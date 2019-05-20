<?php 
		                   			include("header.php");
		                   			$imagecouv = basename($_FILES['photocouverture']['name']);
		                   			$image1= basename($_FILES['photo1']['name']);
		                   			$image2 = basename($_FILES['photo2']['name']);
		                   			$image3 = basename($_FILES['photo3']['name']);
									
		                   			                        			                              			
                        			if (isset($_FILES['photocouverture']) AND $_FILES['photocouverture']['error'] == 0)
									{
                        				move_uploaded_file($_FILES['photocouverture']['tmp_name'], 'img/photocouv/' . basename($_FILES['photocouverture']['name']));         
                        			}

                        			if (isset($_FILES['photo1']) AND $_FILES['photo1']['error'] == 0)
									{
                        				move_uploaded_file($_FILES['photo1']['tmp_name'], 'img/photo/' . basename($_FILES['photo1']['name']));         
                        			}

                        			if (isset($_FILES['photo2']) AND $_FILES['photo2']['error'] == 0)
									{
                        				move_uploaded_file($_FILES['photo2']['tmp_name'], 'img/photo/' . basename($_FILES['photo2']['name']));         
                        			}

                        			if (isset($_FILES['photo3']) AND $_FILES['photo3']['error'] == 0)
									{
                        				move_uploaded_file($_FILES['photo3']['tmp_name'], 'img/photo/' . basename($_FILES['photo3']['name']));         
                        			}





		                   				
		                   				$req = $bdd->prepare('INSERT INTO recette(idutilisateurs, titre, temppreparation, tempcuisson, nombrepersonne, photocouverture, photo1, photo2, photo3, etape1, etape2, etape3, etape4, etape5, etape6, etape7, etape8, etape9, etape10, ingrediant1, ingrediant2, ingrediant3, ingrediant4, ingrediant5, ingrediant6, ingrediant7, ingrediant8, ingrediant9, ingrediant10, ingrediant11, ingrediant12, ingrediant13, ingrediant14, ingrediant15, ingrediant16, ingrediant17, ingrediant18, ingrediant19, ingrediant20) VALUES(:idutilisateurs, :titre, :temppreparation, :tempcuisson, :nombrepersonne, :photocouverture, :photo1, :photo2, :photo3, :etape1, :etape2, :etape3, :etape4, :etape5, :etape6, :etape7, :etape8, :etape9, :etape10, :ingrediant1, :ingrediant2, :ingrediant3, :ingrediant4, :ingrediant5, :ingrediant6, :ingrediant7, :ingrediant8, :ingrediant9, :ingrediant10, :ingrediant11, :ingrediant12, :ingrediant13, :ingrediant14, :ingrediant15, :ingrediant16, :ingrediant17, :ingrediant18, :ingrediant19, :ingrediant20)');
										$req->execute(array('idutilisateurs' => $_SESSION['id'], 'titre' => $_POST['nom'], 'temppreparation' => $_POST['temppreparation'], 'tempcuisson' => $_POST['tempcuisson'], 'nombrepersonne' => $_POST['nombredepersonne'], 'photocouverture' => $imagecouv, 'photo1' => $image1, 'photo2' => $image2, 'photo3' => $image3, 'etape1' => $_POST['etape1'], 'etape2' => $_POST['etape2'], 'etape3' => $_POST['etape3'], 'etape4' => $_POST['etape4'], 'etape5' => $_POST['etape5'], 'etape6' => $_POST['etape6'], 'etape7' => $_POST['etape7'], 'etape8' => $_POST['etape8'], 'etape9' => $_POST['etape9'], 'etape10' => $_POST['etape10'], 'ingrediant1' => $_POST['ingrediant1'], 'ingrediant2' => $_POST['ingrediant2'], 'ingrediant3' => $_POST['ingrediant3'], 'ingrediant4' => $_POST['ingrediant4'], 'ingrediant5' => $_POST['ingrediant5'], 'ingrediant6' => $_POST['ingrediant6'], 'ingrediant7' => $_POST['ingrediant7'], 'ingrediant8' => $_POST['ingrediant8'], 'ingrediant9' => $_POST['ingrediant9'] , 'ingrediant10' => $_POST['ingrediant10'], 'ingrediant11' => $_POST['ingrediant11'], 'ingrediant12' => $_POST['ingrediant12'], 'ingrediant13' => $_POST['ingrediant13'], 'ingrediant14' => $_POST['ingrediant14'], 'ingrediant15' => $_POST['ingrediant15'], 'ingrediant16' => $_POST['ingrediant16'], 'ingrediant17' => $_POST['ingrediant17'], 'ingrediant18' => $_POST['ingrediant18'], 'ingrediant19' => $_POST['ingrediant19'], 'ingrediant20' => $_POST['ingrediant20']));
									?>