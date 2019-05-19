<?php

try
{
	$bdd = new PDO('mysql:host=localhost;dbname=recette;charset=utf8', 'root', '');
}
catch(Exception $e)
{
	die('Erreur : '.$e->getMessage());
}

if(isset($_POST['submit'])){
	$_SESSION['pseudo'] = $_POST['pseudo'];
	$_SESSION['mdp'] = $_POST['mdp'];
}
else{
	$_SESSION['pseudo'] = '';
	$_SESSION['mdp'] = '';

}
?>

<!DOCTYPE html>
<html lang="fr">
<head>
	<title>Login V8</title>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
<!--===============================================================================================-->	
	<link rel="icon" type="image/png" href="images/icons/favicon.ico"/>
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/bootstrap/css/bootstrap.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="fonts/font-awesome-4.7.0/css/font-awesome.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/animate/animate.css">
<!--===============================================================================================-->	
	<link rel="stylesheet" type="text/css" href="vendor/css-hamburgers/hamburgers.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/animsition/css/animsition.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/select2/select2.min.css">
<!--===============================================================================================-->	
	<link rel="stylesheet" type="text/css" href="vendor/daterangepicker/daterangepicker.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="css/util.css">
	<link rel="stylesheet" type="text/css" href="css/main.css">
<!--===============================================================================================-->
</head>
<body>
	
	<div class="limiter">
		<div class="container-login100">
			<div class="wrap-login100">
				<form class="login100-form validate-form p-l-55 p-r-55 p-t-178" method="post" action="connexion.php">
					<span class="login100-form-title">
						Connexion
					</span>

					<div class="wrap-input100 validate-input m-b-16" data-validate="Merci d'entrer votre pseudo.">
						<input class="input100" type="text" name="pseudo" placeholder="Pseudo" value="<?php echo($_SESSION['pseudo']) ?>">
						<span class="focus-input100"></span>
					</div>

					<div class="wrap-input100 validate-input" data-validate = "Merci d'entrer votre mot de passe.">
						<input class="input100" type="password" name="mdp" placeholder="Mot de passe"  value="<?php echo($_SESSION['mdp']) ?>">
						<span class="focus-input100"></span>
					</div>

					<div class="text-right p-t-13 p-b-23">
						<span class="txt1">
							Vous avez oublier votre
						</span>

						<a href="#" class="txt2">
							Pseudo / Mot de passe ?
						</a>
					</div>

					<div class="container-login100-form-btn m-b-16">
						<button class="login100-form-btn" type="submit" name="submit">
							Connexion
						</button>
					</div>
					<?php 
						if(isset($_POST['submit'])){

							if (isset($_POST['pseudo']) AND isset($_POST['mdp'])AND !empty($_POST['pseudo']) AND !empty($_POST['mdp']))
							{

								$req = $bdd->prepare('SELECT idutilisateurs, mdp FROM utilisateurs WHERE pseudo = :pseudo');
								$req->execute(array(
								    'pseudo' => $_POST['pseudo']));
								$resultat = $req->fetch();
								$isPasswordCorrect = password_verify($_POST['mdp'], $resultat['mdp']);

								if (!$resultat)
								{
								    echo '<li>Mauvais identifiant ou mot de passe !</li>';						    						   
								}
								else
								{
								    if ($isPasswordCorrect) {
								    	session_start();
								        $_SESSION['id'] = $resultat['idutilisateurs'];
								        $_SESSION['pseudo'] = $_POST['pseudo'];
								        header("Location: index.php");
								    }
								    else {
								        echo '<li>Mauvais identifiant ou mot de passe !</li>';
								    }
								}
							}

						}
					?>
					<div class="flex-col-c p-t-30 p-b-40">
						<span class="txt1 p-b-9">
							Vous n'avez pas de compte ?
						</span>

						<a href="inscription.php" class="txt3">
							Inscrivez vous !
						</a>
					</div>
				</form>
			</div>
		</div>
	</div>
	
	
<!--===============================================================================================-->
	<script src="vendor/jquery/jquery-3.2.1.min.js"></script>
<!--===============================================================================================-->
	<script src="vendor/animsition/js/animsition.min.js"></script>
<!--===============================================================================================-->
	<script src="vendor/bootstrap/js/popper.js"></script>
	<script src="vendor/bootstrap/js/bootstrap.min.js"></script>
<!--===============================================================================================-->
	<script src="vendor/select2/select2.min.js"></script>
<!--===============================================================================================-->
	<script src="vendor/daterangepicker/moment.min.js"></script>
	<script src="vendor/daterangepicker/daterangepicker.js"></script>
<!--===============================================================================================-->
	<script src="vendor/countdowntime/countdowntime.js"></script>
<!--===============================================================================================-->
	<script src="js/main.js"></script>

</body>
</html>