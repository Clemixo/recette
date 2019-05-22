<?php 

?>

<!DOCTYPE html>

<head>
    
    <title>Recettte bio | Home</title>
    <?php include("header.php");?>
</head>
<body>
	<div class="container">
        <div class="row">
        	<div class="col-12">
                <div class="contact-form-area">
                    <form action="publie.php" method="post" id="my_form" enctype="multipart/form-data">

                        <div class="row">

                        	<div class="col-12" >
                   				<a href="javascript:{}" onclick="document.getElementById('my_form').submit();" class="btn delicious-btn btn-4 m-1 col-12">Publiée !</a>
               				</div>

               				
                            <div class="col-lg-6" ><br />
                            	<div class="row">
                            		<div class="col-lg-12">
                                		<input type="text" class="form-control" id="nom" name="nom" placeholder="Nom de la recette" value="<?php if (isset($_POST['nom'])){echo $_POST['nom'];} ?>" >
                            		</div>
                           
		                            <div class="col-lg-4">
		                            	<label>Temps de préparation :</label>
		  								<input type="time" name="temppreparation" class="form-control" value="<?php if (isset($_POST['temppreparation'])){echo $_POST['temppreparation'];} ?>">
									</div>

									<div class="col-lg-4">
		                            	<label>Temps de cuisson :</label>
		  								<input type="time" name="tempcuisson" class="form-control" value="<?php if (isset($_POST['tempcuisson'])){echo $_POST['tempcuisson'];} ?>">
									</div>

									<div class="col-lg-4">
		                            	<label>Nombre de personne :</label>
		  								<input type="number" name="nombredepersonne" id="input" class="form-control" value="<?php if (isset($_POST['nombredepersonne'])){echo $_POST['nombredepersonne'];} ?>">
									</div>

		                            <div class="col-12">
		                            	<label>Etape 1 :</label>
		                                <textarea name="etape1" class="form-control" id="etape" cols="30" rows="10" placeholder="" ><?php if (isset($_POST['etape1'])){echo $_POST['etape1'];} ?></textarea>
		                            </div>

		                            <div class="col-12">
		                            	<label>Etape 2 :</label>
		                                <textarea name="etape2" class="form-control" id="etape" cols="30" rows="10"><?php if (isset($_POST['etape2'])){echo $_POST['etape2'];} ?></textarea>
		                            </div>
		                            
		                            <div class="col-12">
		                            	<label>Etape 3 :</label>
		                                <textarea name="etape3" class="form-control" id="etape" cols="30" rows="10" placeholder="Ne pas remplir si les étapes sont terminées."><?php if (isset($_POST['etape3'])){echo $_POST['etape3'];} ?></textarea>
		                            </div>

		                            <div class="col-12">
		                            	<label>Etape 4 :</label>
		                                <textarea name="etape4" class="form-control" id="etape" cols="30" rows="10" placeholder="Ne pas remplir si les étapes sont terminées."><?php if (isset($_POST['etape4'])){echo $_POST['etape4'];} ?></textarea>
		                            </div>

		                            <div class="col-12">
		                            	<label>Etape 5 :</label>
		                                <textarea name="etape5" class="form-control" id="etape" cols="30" rows="10" placeholder="Ne pas remplir si les étapes sont terminées."><?php if (isset($_POST['etape5'])){echo $_POST['etape5'];} ?></textarea>
		                            </div>

		                            <div class="col-12">
		                            	<label>Etape 6 :</label>
		                                <textarea name="etape6" class="form-control" id="etape" cols="30" rows="10" placeholder="Ne pas remplir si les étapes sont terminées."></textarea>
		                            </div>

		                            <div class="col-12">
		                            	<label>Etape 7 :</label>
		                                <textarea name="etape7" class="form-control" id="etape" cols="30" rows="10" placeholder="Ne pas remplir si les étapes sont terminées."></textarea>
		                            </div>

		                            <div class="col-12">
		                            	<label>Etape 8 :</label>
		                                <textarea name="etape8" class="form-control" id="etape" cols="30" rows="10" placeholder="Ne pas remplir si les étapes sont terminées."></textarea>
		                            </div>

		                            <div class="col-12">
		                            	<label>Etape 9 :</label>
		                                <textarea name="etape9" class="form-control" id="etape" cols="30" rows="10" placeholder="Ne pas remplir si les étapes sont terminées."></textarea>
		                            </div>

		                            <div class="col-12">
		                            	<label>Etape 10 :</label>
		                                <textarea name="etape10" class="form-control" id="etape" cols="30" rows="10" placeholder="Ne pas remplir si les étapes sont terminées."></textarea>
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
                						<input type="text" class="form-control" name="ingrediant1" placeholder="Nom de l'ingrédiant">
		                   			</div>

		                   			<div class="col-lg-12">
                						<input type="text" class="form-control" name="ingrediant2" placeholder="Nom de l'ingrédiant">
		                   			</div>

		                   			<div class="col-lg-12">
                						<input type="text" class="form-control" name="ingrediant3" placeholder="Nom de l'ingrédiant">
		                   			</div>

		                   			<div class="col-lg-12">
                						<input type="text" class="form-control" name="ingrediant4" placeholder="Nom de l'ingrédiant">
		                   			</div>

		                   			<div class="col-lg-12">
                						<input type="text" class="form-control" name="ingrediant5" placeholder="Nom de l'ingrédiant">
		                   			</div>

		                   			<div class="col-lg-12">
                						<input type="text" class="form-control" name="ingrediant6" placeholder="Nom de l'ingrédiant">
		                   			</div>

		                   			<div class="col-lg-12">
                						<input type="text" class="form-control" name="ingrediant7" placeholder="Nom de l'ingrédiant">
		                   			</div>

		                   			<div class="col-lg-12">
                						<input type="text" class="form-control" name="ingrediant8" placeholder="Nom de l'ingrédiant">
		                   			</div>

		                   			<div class="col-lg-12">
                						<input type="text" class="form-control" name="ingrediant9" placeholder="Nom de l'ingrédiant">
		                   			</div>

		                   			<div class="col-lg-12">
                						<input type="text" class="form-control" name="ingrediant10" placeholder="Nom de l'ingrédiant">
		                   			</div>

		                   			<div class="col-lg-12">
                						<input type="text" class="form-control" name="ingrediant11" placeholder="Nom de l'ingrédiant">
		                   			</div>

		                   			<div class="col-lg-12">
                						<input type="text" class="form-control" name="ingrediant12" placeholder="Nom de l'ingrédiant">
		                   			</div>		                   			

		                   			<div class="col-lg-12">
                						<input type="text" class="form-control" name="ingrediant13" placeholder="Nom de l'ingrédiant">
		                   			</div>

		                   			<div class="col-lg-12">
                						<input type="text" class="form-control" name="ingrediant14" placeholder="Nom de l'ingrédiant">
		                   			</div>

		                   			<div class="col-lg-12">
                						<input type="text" class="form-control" name="ingrediant15" placeholder="Nom de l'ingrédiant">
		                   			</div>

		                   			<div class="col-lg-12">
                						<input type="text" class="form-control" name="ingrediant16" placeholder="Nom de l'ingrédiant">
		                   			</div>

		                   			<div class="col-lg-12">
                						<input type="text" class="form-control" name="ingrediant17" placeholder="Nom de l'ingrédiant">
		                   			</div>

		                   			<div class="col-lg-12">
                						<input type="text" class="form-control" name="ingrediant18" placeholder="Nom de l'ingrédiant">
		                   			</div>

		                   			<div class="col-lg-12">
                						<input type="text" class="form-control" name="ingrediant19" placeholder="Nom de l'ingrédiant">
		                   			</div>

		                   				<div class="col-lg-12">
                						<input type="text" class="form-control" name="ingrediant20" placeholder="Nom de l'ingrédiant">
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