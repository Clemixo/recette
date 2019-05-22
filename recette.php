<?php include("header.php");

	
	$reponse = $bdd->query('SELECT *  FROM recette WHERE idrecette = '.$_GET['id']);
	$donnees=$reponse->fetch();   

 ?>
<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>

<div class="breadcumb-area bg-img bg-overlay" style="background-image: url(img/bg-img/breadcumb4.jpg);">
        <div class="container h-100">
            <div class="row h-100 align-items-center">
                <div class="col-12">
                    <div class="breadcumb-text text-center">
                        <h2><?php echo $donnees['TITRE']; ?></h2>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- ##### Breadcumb Area End ##### -->

    <div class="receipe-post-area section-padding-80">

        

        <!-- Receipe Slider -->
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="receipe-slider owl-carousel">
                        <img src="img/bg-img/bg5.jpg" alt="">
                        <img src="img/bg-img/bg5.jpg" alt="">
                        <img src="img/bg-img/bg5.jpg" alt="">
                    </div>
                </div>
            </div>
        </div>

        <!-- Receipe Content Area -->
        <div class="receipe-content-area">
            <div class="container">

                <div class="row">
                    <div class="col-12 col-md-8">
                        <div class="receipe-headline my-5">
                            <span><?php echo $donnees['date'] ?></span>
                            <h2><?php echo $donnees['TITRE'] ?></h2>
                            <div class="receipe-duration">
                                <h6>Préparition : <?php echo $donnees['TEMPPREPARATION'] ?> min</h6>
                                <h6>Cuisson: <?php echo $donnees['TEMPCUISSON'] ?> min</h6>
                                <h6>Pour <?php echo $donnees['NOMBREPERSONNE'] ?> personnes</h6>
                            </div>
                        </div>
                    </div>

                     <?php
                    $tabnote= array(1,4,5,5,5);
                    $note=array_sum($tabnote)/count($tabnote);
                    ?>

                    <div class="col-12 col-md-4">
                        <div class="receipe-ratings text-right my-5">
                            <div class="ratings"><?php
                            if ($note>4.5){
                                ?><i class="fa fa-star" aria-hidden="true"></i>
                                      <i class="fa fa-star" aria-hidden="true"></i>
                                      <i class="fa fa-star" aria-hidden="true"></i>
                                      <i class="fa fa-star" aria-hidden="true"></i>
                                      <i class="fa fa-star" aria-hidden="true"></i><?php
                            }
                            elseif ($note>3.5) {
                                ?><i class="fa fa-star" aria-hidden="true"></i>
                                      <i class="fa fa-star" aria-hidden="true"></i>
                                      <i class="fa fa-star" aria-hidden="true"></i>
                                      <i class="fa fa-star" aria-hidden="true"></i>
                                      <i class="fa fa-star-o" aria-hidden="true"></i><?php
                            }
                            elseif ($note>2.5) {
                                ?><i class="fa fa-star" aria-hidden="true"></i>
                                      <i class="fa fa-star" aria-hidden="true"></i>
                                      <i class="fa fa-star" aria-hidden="true"></i>
                                      <i class="fa fa-star-o" aria-hidden="true"></i>
                                      <i class="fa fa-star-o" aria-hidden="true"></i><?php
                            }
                            elseif ($note>1.5) {
                                ?><i class="fa fa-star" aria-hidden="true"></i>
                                      <i class="fa fa-star" aria-hidden="true"></i>
                                      <i class="fa fa-star-o" aria-hidden="true"></i>
                                      <i class="fa fa-star-o" aria-hidden="true"></i>
                                      <i class="fa fa-star-o" aria-hidden="true"></i><?php
                            }
                            elseif ($note>0.5) {
                                ?><i class="fa fa-star" aria-hidden="true"></i>
                                      <i class="fa fa-star-o" aria-hidden="true"></i>
                                      <i class="fa fa-star-o" aria-hidden="true"></i>
                                      <i class="fa fa-star-o" aria-hidden="true"></i>
                                      <i class="fa fa-star-o" aria-hidden="true"></i><?php
                            }
                                ?>
                            </div>
                            <a href="modifier.php?id=<?php  echo $donnees['IDRECETTE'] ?>" class="btn delicious-btn btn-2 m-1" class="btn btn-default col-lg-4">Modifier</button></a>

                            <a href="supression.php?id=<?php  echo $donnees['IDRECETTE'] ?>" class="btn delicious-btn btn-3 m-1" id="delete"  class="btn btn-default col-lg-4" onclick="if(window.confirm('Voulez-vous vraiment supprimer cette magnifique recette ?')){return true;}else{return false;}">Supprimer</button></a>
                            	                   
                           
                        </div>
                    </div>
                </div>

                <div class="row">
                    <div class="col-12 col-lg-8">
                        <!-- Single Preparation Step -->
                        <?php if (!empty($donnees['ETAPE1']))
                        	{ ?>
                        <div class="single-preparation-step d-flex">
                        	

                            <h4>01.</h4>
                            <p><?php echo $donnees['ETAPE1'] ?></p>
                        </div>
                        <?php } ?>
                        <!-- Single Preparation Step -->
                        <?php if (!empty($donnees['ETAPE2']))
                        	{ ?>
                        <div class="single-preparation-step d-flex">
                            <h4>02.</h4>
                            <p><?php echo $donnees['ETAPE2'] ?></p>
                        </div>
                        <?php } ?>
                        <!-- Single Preparation Step -->
                       <?php if (!empty($donnees['ETAPE3']))
                        	{ ?>
                        <div class="single-preparation-step d-flex">
                            <h4>03.</h4>
                            <p><?php echo $donnees['ETAPE3'] ?></p>
                        </div>
                        <?php } ?>

                        <?php if (!empty($donnees['ETAPE4']))
                        	{ ?>
                        <div class="single-preparation-step d-flex">
                            <h4>04.</h4>
                            <p><?php echo $donnees['ETAPE4'] ?></p>
                        </div>
                        <?php } ?>

                        <?php if (!empty($donnees['ETAPE5']))
                        	{ ?>
                        <div class="single-preparation-step d-flex">
                            <h4>05.</h4>
                            <p><?php echo $donnees['ETAPE5'] ?></p>
                        </div>
                        <?php } ?>

                        <?php if (!empty($donnees['ETAPE6']))
                        	{ ?>
                        <div class="single-preparation-step d-flex">
                            <h4>06.</h4>
                            <p><?php echo $donnees['ETAPE6'] ?></p>
                        </div>
                        <?php } ?>

                        <?php if (!empty($donnees['ETAPE7']))
                        	{ ?>
                        <div class="single-preparation-step d-flex">
                            <h4>07.</h4>
                            <p><?php echo $donnees['ETAPE7'] ?></p>
                        </div>
                        <?php } ?>

                        <?php if (!empty($donnees['ETAPE8']))
                        	{ ?>
                        <div class="single-preparation-step d-flex">
                            <h4>08.</h4>
                            <p><?php echo $donnees['ETAPE8'] ?></p>
                        </div>
                        <?php } ?>

                        <?php if (!empty($donnees['ETAPE9']))
                        	{ ?>
                        <div class="single-preparation-step d-flex">
                            <h4>09.</h4>
                            <p><?php echo $donnees['ETAPE9'] ?></p>
                        </div>
                        <?php } ?>

                        <?php if (!empty($donnees['ETAPE10']))
                        	{ ?>
                        <div class="single-preparation-step d-flex">
                            <h4>10.</h4>
                            <p><?php echo $donnees['ETAPE10'] ?></p>
                        </div>
                        <?php } ?>
                        
                    </div>

                    <!-- Ingredients -->
                    <div class="col-12 col-lg-4">
                        <div class="ingredients">
                            <h4>Ingredients</h4>

                            <!-- Custom Checkbox -->
                            <?php if (!empty($donnees['INGREDIANT1'])){?>
                            <div class="custom-control custom-checkbox">
                                <input type="checkbox" class="custom-control-input" id="customCheck1">
                                <label class="custom-control-label" for="customCheck1"><?php echo $donnees['INGREDIANT1']; ?></label>
                            </div><?php } ?>

                            <!-- Custom Checkbox -->
                            <?php if (!empty($donnees['INGREDIANT2'])){?>
                            <div class="custom-control custom-checkbox">
                                <input type="checkbox" class="custom-control-input" id="customCheck1">
                                <label class="custom-control-label" for="customCheck1"><?php echo $donnees['INGREDIANT2']; ?></label>
                            </div><?php } ?>

                             <?php if (!empty($donnees['INGREDIANT3'])){?>
                            <div class="custom-control custom-checkbox">
                                <input type="checkbox" class="custom-control-input" id="customCheck1">
                                <label class="custom-control-label" for="customCheck1"><?php echo $donnees['INGREDIANT3']; ?></label>
                            </div><?php } ?>

                             <?php if (!empty($donnees['INGREDIANT4'])){?>
                            <div class="custom-control custom-checkbox">
                                <input type="checkbox" class="custom-control-input" id="customCheck1">
                                <label class="custom-control-label" for="customCheck1"><?php echo $donnees['INGREDIANT4']; ?></label>
                            </div><?php } ?>

                             <?php if (!empty($donnees['INGREDIANT5'])){?>
                            <div class="custom-control custom-checkbox">
                                <input type="checkbox" class="custom-control-input" id="customCheck1">
                                <label class="custom-control-label" for="customCheck1"><?php echo $donnees['INGREDIANT5']; ?></label>
                            </div><?php } ?>

                             <?php if (!empty($donnees['INGREDIANT6'])){?>
                            <div class="custom-control custom-checkbox">
                                <input type="checkbox" class="custom-control-input" id="customCheck1">
                                <label class="custom-control-label" for="customCheck1"><?php echo $donnees['INGREDIANT6']; ?></label>
                            </div><?php } ?>

                             <?php if (!empty($donnees['INGREDIANT7'])){?>
                            <div class="custom-control custom-checkbox">
                                <input type="checkbox" class="custom-control-input" id="customCheck1">
                                <label class="custom-control-label" for="customCheck1"><?php echo $donnees['INGREDIANT7']; ?></label>
                            </div><?php } ?>

                             <?php if (!empty($donnees['INGREDIANT8'])){?>
                            <div class="custom-control custom-checkbox">
                                <input type="checkbox" class="custom-control-input" id="customCheck1">
                                <label class="custom-control-label" for="customCheck1"><?php echo $donnees['INGREDIANT8']; ?></label>
                            </div><?php } ?>

                             <?php if (!empty($donnees['INGREDIANT9'])){?>
                            <div class="custom-control custom-checkbox">
                                <input type="checkbox" class="custom-control-input" id="customCheck1">
                                <label class="custom-control-label" for="customCheck1"><?php echo $donnees['INGREDIANT9']; ?></label>
                            </div><?php } ?>

                             <?php if (!empty($donnees['INGREDIANT10'])){?>
                            <div class="custom-control custom-checkbox">
                                <input type="checkbox" class="custom-control-input" id="customCheck1">
                                <label class="custom-control-label" for="customCheck1"><?php echo $donnees['INGREDIANT10']; ?></label>
                            </div><?php } ?>

                             <?php if (!empty($donnees['INGREDIANT11'])){?>
                            <div class="custom-control custom-checkbox">
                                <input type="checkbox" class="custom-control-input" id="customCheck1">
                                <label class="custom-control-label" for="customCheck1"><?php echo $donnees['INGREDIANT11']; ?></label>
                            </div><?php } ?>

                             <?php if (!empty($donnees['INGREDIANT12'])){?>
                            <div class="custom-control custom-checkbox">
                                <input type="checkbox" class="custom-control-input" id="customCheck1">
                                <label class="custom-control-label" for="customCheck1"><?php echo $donnees['INGREDIANT12']; ?></label>
                            </div><?php } ?>

                             <?php if (!empty($donnees['INGREDIANT13'])){?>
                            <div class="custom-control custom-checkbox">
                                <input type="checkbox" class="custom-control-input" id="customCheck1">
                                <label class="custom-control-label" for="customCheck1"><?php echo $donnees['INGREDIANT13']; ?></label>
                            </div><?php } ?>

                             <?php if (!empty($donnees['INGREDIANT14'])){?>
                            <div class="custom-control custom-checkbox">
                                <input type="checkbox" class="custom-control-input" id="customCheck1">
                                <label class="custom-control-label" for="customCheck1"><?php echo $donnees['INGREDIANT14']; ?></label>
                            </div><?php } ?>

                             <?php if (!empty($donnees['INGREDIANT15'])){?>
                            <div class="custom-control custom-checkbox">
                                <input type="checkbox" class="custom-control-input" id="customCheck1">
                                <label class="custom-control-label" for="customCheck1"><?php echo $donnees['INGREDIANT15']; ?></label>
                            </div><?php } ?>

                             <?php if (!empty($donnees['INGREDIANT16'])){?>
                            <div class="custom-control custom-checkbox">
                                <input type="checkbox" class="custom-control-input" id="customCheck1">
                                <label class="custom-control-label" for="customCheck1"><?php echo $donnees['INGREDIANT16']; ?></label>
                            </div><?php } ?>

                             <?php if (!empty($donnees['INGREDIANT17'])){?>
                            <div class="custom-control custom-checkbox">
                                <input type="checkbox" class="custom-control-input" id="customCheck1">
                                <label class="custom-control-label" for="customCheck1"><?php echo $donnees['INGREDIANT17']; ?></label>
                            </div><?php } ?>

                             <?php if (!empty($donnees['INGREDIANT18'])){?>
                            <div class="custom-control custom-checkbox">
                                <input type="checkbox" class="custom-control-input" id="customCheck1">
                                <label class="custom-control-label" for="customCheck1"><?php echo $donnees['INGREDIANT18']; ?></label>
                            </div><?php } ?>

                             <?php if (!empty($donnees['INGREDIANT19'])){?>
                            <div class="custom-control custom-checkbox">
                                <input type="checkbox" class="custom-control-input" id="customCheck1">
                                <label class="custom-control-label" for="customCheck1"><?php echo $donnees['INGREDIANT19']; ?></label>
                            </div><?php } ?>

                             <?php if (!empty($donnees['INGREDIANT20'])){?>
                            <div class="custom-control custom-checkbox">
                                <input type="checkbox" class="custom-control-input" id="customCheck1">
                                <label class="custom-control-label" for="customCheck1"><?php echo $donnees['INGREDIANT20']; ?></label>
                            </div><?php } ?>

                            
                        </div>
                    </div>
                </div>

                <div class="row">
                    <div class="col-12">
                        <div class="section-heading text-left">
                            <h3>Leave a comment</h3>
                        </div>
                    </div>
                </div>

                <div class="row">
                    <div class="col-12">
                        <div class="contact-form-area">
                            <form action="#" method="post">
                                <div class="row">
                                    <div class="col-12 col-lg-6">
                                        <input type="text" class="form-control" id="name" placeholder="Name">
                                    </div>
                                    <div class="col-12 col-lg-6">
                                        <input type="email" class="form-control" id="email" placeholder="E-mail">
                                    </div>
                                    <div class="col-12">
                                        <input type="text" class="form-control" id="subject" placeholder="Subject">
                                    </div>
                                    <div class="col-12">
                                        <textarea name="message" class="form-control" id="message" cols="30" rows="10" placeholder="Message"></textarea>
                                    </div>
                                    <div class="col-12">
                                        <button class="btn delicious-btn mt-30" type="submit">Post Comments</button>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    
    <!-- ##### Footer Area Start ##### -->

    <!-- ##### All Javascript Files ##### -->
    <!-- jQuery-2.2.4 js -->
    <script src="js/jquery/jquery-2.2.4.min.js"></script>
    <!-- Popper js -->
    <script src="js/bootstrap/popper.min.js"></script>
    <!-- Bootstrap js -->
    <script src="js/bootstrap/bootstrap.min.js"></script>
    <!-- All Plugins js -->
    <script src="js/plugins/plugins.js"></script>
    <!-- Active js -->
    <script src="js/active.js"></script>
</body>

</html>