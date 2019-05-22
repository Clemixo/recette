<?php 

include("header.php");
if (isset($_GET['id'])){
	
		$reponse = $bdd->query('SELECT *  FROM recette WHERE idrecette = '.$_GET['id']);
		$donnees=$reponse->fetch();

		if (!empty(($_SESSION['id'])))
		{


		if (($donnees['IDUTILISATEURS']) == ($_SESSION['id'])){

			$sql="DELETE FROM recette  where idrecette = ".$_GET['id'];
			$bdd->query($sql);
			header("Location: index.php");
		}


	}

	else
	{
	header("Location: index.php");	   	
	}
}

		
	
	
	
	?>
	

