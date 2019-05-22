<?php

include("header.php");

    if (isset($_GET['id'])){
	    $reponse = $bdd->query('SELECT *  FROM recette WHERE idrecette = '.$_GET['id']);
		$donnees=$reponse->fetch();

		if (($donnees['IDUTILISATEURS']) == ($_SESSION['id']))
		{
			$req = $bdd->prepare('UPDATE recette SET TITRE=?, WHERE IDRECETTE = ?');
			$req->execute(array($_POST['nom'], $_GET['id']));
			
			header("Location: index.php");
		}

	}
	else {
		header("Location: index.php");
	}



?>