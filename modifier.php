<?php 

?>

<!DOCTYPE html>

<head>
    
    <title>Recettte bio | Home</title>
    <?php include("header.php");
    if (isset($_GET['id'])){
	    $reponse = $bdd->query('SELECT *  FROM recette WHERE idrecette = '.$_GET['id']);
		$donnees=$reponse->fetch();

		if (!($donnees['IDUTILISATEURS']) == ($_SESSION['id']))
		{
			header("Location: index.php");
		}

	}
	else {
		header("Location: index.php");
	}

    ?>
</head>
<body>
	<div class="container">
        <div class="row">
        	<div class="col-12">
                <div class="contact-form-area">
                    <form action="traitementmodif.php?id=<?php echo $donnees['IDRECETTE'] ?>" method="post" id="my_form" enctype="multipart/form-data">

                        <div class="row">

                        	<div class="col-12" >
                   				<a href="javascript:{}" onclick="document.getElementById('my_form').submit();" class="btn delicious-btn btn-4 m-1 col-12">Publiée !</a>
               				</div>

               				
                            <div class="col-lg-6" ><br />
                            	<div class="row">
                            		<div class="col-lg-12">
                                		<input type="text" class="form-control" id="nom" name="nom" placeholder="Nom de la recette" value="<?php if (isset($donnees['TITRE'])){echo $donnees['TITRE'];} ?>" >
                            		</div>
                           
		                            <div class="col-lg-4">
		                            	<label>Temps de préparation :</label>
		  								<input type="time" name="temppreparation" class="form-control" value="<?php if (isset($donnees['TEMPPREPARATION'])){echo $donnees['TEMPPREPARATION'];} ?>">
									</div>

									<div class="col-lg-4">
		                            	<label>Temps de cuisson :</label>
		  								<input type="time" name="tempcuisson" class="form-control" value="<?php if (isset($donnees['TEMPCUISSON'])){echo $donnees['TEMPCUISSON'];} ?>">
									</div>

									<div class="col-lg-4">
		                            	<label>Nombre de personne :</label>
		  								<input type="number" name="nombredepersonne" id="input" class="form-control" value="<?php if (isset($donnees['NOMBREPERSONNE'])){echo $donnees['NOMBREPERSONNE'];} ?>">
									</div>

		                            <div class="col-12">
		                            	<label>Etape 1 :</label>
		                                <textarea name="etape1" class="form-control" id="etape" cols="30" rows="10" placeholder="" ><?php if (isset($donnees['ETAPE1'])){echo $donnees['ETAPE1'];} ?></textarea>
		                            </div>

		                            <div class="col-12">
		                            	<label>Etape 2 :</label>
		                                <textarea name="etape2" class="form-control" id="etape" cols="30" rows="10"><?php if (isset($donnees['ETAPE2'])){echo $donnees['ETAPE2'];} ?></textarea>
		                            </div>
		                            
		                            <div class="col-12">
		                            	<label>Etape 3 :</label>
		                                <textarea name="etape3" class="form-control" id="etape" cols="30" rows="10" placeholder="Ne pas remplir si les étapes sont terminées."><?php if (isset($donnees['ETAPE3'])){echo $donnees['ETAPE3'];} ?></textarea>
		                            </div>

		                            <div class="col-12">
		                            	<label>Etape 4 :</label>
		                                <textarea name="etape4" class="form-control" id="etape" cols="30" rows="10" placeholder="Ne pas remplir si les étapes sont terminées."><?php if (isset($donnees['ETAPE4'])){echo $donnees['ETAPE4'];} ?></textarea>
		                            </div>

		                            <div class="col-12">
		                            	<label>Etape 5 :</label>
		                                <textarea name="etape5" class="form-control" id="etape" cols="30" rows="10" placeholder="Ne pas remplir si les étapes sont terminées."><?php if (isset($donnees['ETAPE5'])){echo $donnees['ETAPE5'];} ?></textarea>
		                            </div>

		                            <div class="col-12">
		                            	<label>Etape 6 :</label>
		                                <textarea name="etape6" class="form-control" id="etape" cols="30" rows="10" placeholder="Ne pas remplir si les étapes sont terminées."><?php echo $donnees['ETAPE6']; ?></textarea>
		                            </div>

		                            <div class="col-12">
		                            	<label>Etape 7 :</label>
		                                <textarea name="etape7" class="form-control" id="etape" cols="30" rows="10" placeholder="Ne pas remplir si les étapes sont terminées."><?php echo $donnees['ETAPE7']; ?></textarea>
		                            </div>

		                            <div class="col-12">
		                            	<label>Etape 8 :</label>
		                                <textarea name="etape8" class="form-control" id="etape" cols="30" rows="10" placeholder="Ne pas remplir si les étapes sont terminées."><?php echo $donnees['ETAPE8']; ?></textarea>
		                            </div>

		                            <div class="col-12">
		                            	<label>Etape 9 :</label>
		                                <textarea name="etape9" class="form-control" id="etape" cols="30" rows="10" placeholder="Ne pas remplir si les étapes sont terminées."><?php echo $donnees['ETAPE9']; ?></textarea>
		                            </div>

		                            <div class="col-12">
		                            	<label>Etape 10 :</label>
		                                <textarea name="etape10" class="form-control" id="etape" cols="30" rows="10" placeholder="Ne pas remplir si les étapes sont terminées."><?php echo $donnees['ETAPE9']; ?></textarea>
		                            </div>
		                        </div>
		                   	</div>
		                   	<div class="col-lg-6">	<br />	                   		
		                   		<div class="row">

		                   			<div class="col-lg-12">
		                   				<label>Photo de couverture :</label><br />
		                   				<input type="file" name="photocouverture" accept="image/*"/>	                   				
		                   			</div><br />

		                   			<div class="col-lg-12">		                   			
		                   				<label>Autre photo :</label><br />
		                   				<input type="file" name="photo1" accept="image/*" />
		                   				<input type="file" name="photo2" accept="image/*" />
		                   				<input type="file" name="photo3" accept="image/*" />	                   				
		                   			</div>

		                   			<div class="col-lg-12">
		                   				<br /><label>Les ingrédiants :</label>
                						<input type="text" class="form-control" name="ingrediant1" placeholder="Nom de l'ingrédiant" value="<?php echo $donnees['INGREDIANT1'] ?>">
		                   			</div>

		                   			<div class="col-lg-12">
                						<input type="text" class="form-control" name="ingrediant2" placeholder="Nom de l'ingrédiant" value="<?php echo $donnees['INGREDIANT2'] ?>">
		                   			</div>

		                   			<div class="col-lg-12">
                						<input type="text" class="form-control" name="ingrediant3" placeholder="Nom de l'ingrédiant" value="<?php echo $donnees['INGREDIANT3'] ?>" >
		                   			</div>

		                   			<div class="col-lg-12">
                						<input type="text" class="form-control" name="ingrediant4" placeholder="Nom de l'ingrédiant" value="<?php echo $donnees['INGREDIANT4'] ?>">
		                   			</div>

		                   			<div class="col-lg-12">
                						<input type="text" class="form-control" name="ingrediant5" placeholder="Nom de l'ingrédiant" value="<?php echo $donnees['INGREDIANT5'] ?>">
		                   			</div>

		                   			<div class="col-lg-12">
                						<input type="text" class="form-control" name="ingrediant6" placeholder="Nom de l'ingrédiant" value="<?php echo $donnees['INGREDIANT6'] ?>">
		                   			</div>

		                   			<div class="col-lg-12">
                						<input type="text" class="form-control" name="ingrediant7" placeholder="Nom de l'ingrédiant" value="<?php echo $donnees['INGREDIANT7'] ?>">
		                   			</div>

		                   			<div class="col-lg-12">
                						<input type="text" class="form-control" name="ingrediant8" placeholder="Nom de l'ingrédiant" value="<?php echo $donnees['INGREDIANT8'] ?>">
		                   			</div>

		                   			<div class="col-lg-12">
                						<input type="text" class="form-control" name="ingrediant9" placeholder="Nom de l'ingrédiant" value="<?php echo $donnees['INGREDIANT9'] ?>">
		                   			</div>

		                   			<div class="col-lg-12">
                						<input type="text" class="form-control" name="ingrediant10" placeholder="Nom de l'ingrédiant" value="<?php echo $donnees['INGREDIANT10'] ?>">
		                   			</div>

		                   			<div class="col-lg-12">
                						<input type="text" class="form-control" name="ingrediant11" placeholder="Nom de l'ingrédiant" value="<?php echo $donnees['INGREDIANT11'] ?>">
		                   			</div>

		                   			<div class="col-lg-12">
                						<input type="text" class="form-control" name="ingrediant12" placeholder="Nom de l'ingrédiant" value="<?php echo $donnees['INGREDIANT12'] ?>">
		                   			</div>		                   			

		                   			<div class="col-lg-12">
                						<input type="text" class="form-control" name="ingrediant13" placeholder="Nom de l'ingrédiant" value="<?php echo $donnees['INGREDIANT13'] ?>">
		                   			</div>

		                   			<div class="col-lg-12">
                						<input type="text" class="form-control" name="ingrediant14" placeholder="Nom de l'ingrédiant" value="<?php echo $donnees['INGREDIANT14'] ?>">
		                   			</div>

		                   			<div class="col-lg-12">
                						<input type="text" class="form-control" name="ingrediant15" placeholder="Nom de l'ingrédiant" value="<?php echo $donnees['INGREDIANT15'] ?>">
		                   			</div>

		                   			<div class="col-lg-12">
                						<input type="text" class="form-control" name="ingrediant16" placeholder="Nom de l'ingrédiant" value="<?php echo $donnees['INGREDIANT16'] ?>">
		                   			</div>

		                   			<div class="col-lg-12">
                						<input type="text" class="form-control" name="ingrediant17" placeholder="Nom de l'ingrédiant" value="<?php echo $donnees['INGREDIANT17'] ?>">
		                   			</div>

		                   			<div class="col-lg-12">
                						<input type="text" class="form-control" name="ingrediant18" placeholder="Nom de l'ingrédiant" value="<?php echo $donnees['INGREDIANT18'] ?>">
		                   			</div>

		                   			<div class="col-lg-12">
                						<input type="text" class="form-control" name="ingrediant19" placeholder="Nom de l'ingrédiant" value="<?php echo $donnees['INGREDIANT19'] ?>">
		                   			</div>

		                   				<div class="col-lg-12">
                						<input type="text" class="form-control" name="ingrediant20" placeholder="Nom de l'ingrédiant" value="<?php echo $donnees['INGREDIANT20'] ?>">
		                   			</div>	                   			
		                   			
		                   		</div>
		                   		
		                   	</div>                        
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>

</body>