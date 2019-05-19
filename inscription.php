<?php

session_start();

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
	$_SESSION['mail'] = $_POST['mail'];
	$_SESSION['mdp1'] = $_POST['mdp1'];
	$_SESSION['mdp2'] = $_POST['mdp2'];
}
else{
	$_SESSION['pseudo'] = '';
	$_SESSION['mail'] =  '';
	$_SESSION['mdp1'] = '';
	$_SESSION['mdp2'] = '';
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
				<form class="login100-form validate-form p-l-55 p-r-55 p-t-178" method="post" action="inscription.php" name="form1">
					<span class="login100-form-title">
						Inscription
					</span>

					<div class="wrap-input100 validate-input m-b-16" data-validate="Merci de remplir le champ.">
						<input class="input100" type="text" name="pseudo" placeholder="Pseudo" value="<?php echo($_SESSION['pseudo']) ?>">
						<span class="focus-input100"></span>
					</div>

					<div class="wrap-input100 validate-input m-b-16" data-validate="Merci de remplir le champ.">
						<input class="input100" type="text" name="mail" placeholder="Email" value="<?php echo($_SESSION['mail']) ?>">
						<span class="focus-input100"></span>
					</div>

					<div class="wrap-input100 validate-input m-b-16" data-validate="Merci de remplir le champ.">
						<input class="input100" type="password" name="mdp1" placeholder="Mot de passe" value="<?php echo($_SESSION['mdp1']) ?>">
						<span class="focus-input100"></span>
					</div>

					<div class="wrap-input100 validate-input m-b-16" data-validate="Merci de remplir le champ.">
						<input class="input100" type="password" name="mdp2" placeholder="Confirmation mot de passe" value="<?php echo($_SESSION['mdp2']) ?>"> 
						<span class="focus-input100"></span>
					</div>					

					<div class="container-login100-form-btn m-b-16">
						<button class="login100-form-btn" type="submit" name="submit" id="validate">
							Inscription
						</button>
					</div>

					<?php

						if(isset($_POST['submit'])){

						$validate = 0;

						if (isset($_POST['pseudo']) AND isset($_POST['mail']) AND isset($_POST['mdp1']) AND isset($_POST['mdp2']) AND !empty($_POST['pseudo']) AND !empty($_POST['mail']) AND 
						!empty($_POST['mdp1']) AND !empty($_POST['mdp2']))
							{
								++$validate;

							if (preg_match('(([0-9a-zA-Z]){3,20})', $_POST['pseudo']))
							{								
								$reqpseudo = $bdd->prepare("SELECT pseudo FROM utilisateurs WHERE pseudo = ?");
					            $reqpseudo->execute(array($_POST['pseudo']));
					            $pseudoexist = $reqpseudo->rowcount();
					            if($pseudoexist == 0)
					            {	
					            	++$validate;
					            }
								else
								{
									echo "<li>Ce pseudo n'est pas disponible.</li>";
								}						
							}
							else
							{
								echo "<li>Votre pseudo est incorrect : il doit avoir une longueur entre 3 et 20 et ne pas posséder de caractère spéciaux</li>";
							}


							if (preg_match('([A-Za-z0-9](([_\.\-]?[a-zA-Z0-9]+)*)@([A-Za-z0-9]+)(([_\.\-]?[a-zA-Z0-9]+)*)\.([A-Za-z]{2,}))', $_POST['mail']))
							{
								$reqmail = $bdd->prepare("SELECT mail FROM utilisateurs WHERE mail = ?");
					            $reqmail->execute(array($_POST['mail']));
					            $mailexist = $reqmail->rowcount();
					            if($mailexist == 0)
					            {	
					            	++$validate;
					            }
								else
								{
									echo "<li>Cet email est déjà utilisé.</li>";
								}	
							}
							else
							{
								echo "<li>Adresse mail incorrecte</li>";
							}

							if (preg_match('#^(?=.*[a-z])(?=.*[A-Z])(?=.*[0-9]).{6,}$#', $_POST['mdp1']))
							{
								++$validate;
							}
							else
							{
								echo "<li>Mot de passe incorrecte : il doit contenir 6 caractères minimums dont une majuscule, une minuscule et un chiffre.</li>";
							}

							if ($_POST['mdp1'] == $_POST['mdp2'])
							{
								++$validate;
							}
							else
							{
								echo "<li>Mot de passe différant</li>";
							}

																					
							}
						

						if($validate == 5)
						{
							
							$pass_hache = password_hash($_POST['mdp1'], PASSWORD_DEFAULT);
							$req = $bdd->prepare('INSERT INTO utilisateurs(pseudo, mail, mdp) VALUES(:pseudo, :mail, :mdp)');
							$req->execute(array('pseudo' => $_POST['pseudo'], 'mail' => $_POST['mail'], 'mdp' => $pass_hache ));
							session_destroy();
							header("Location: inscription.php");
						}
												
					}


					?> 

					<div class="flex-col-c p-t-10 p-b-40">
						<span class="txt1 p-b-9">
							Vous avez déjà un compte ?
						</span>

						<a href="connexion.php" class="txt3">
						Connexion !
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