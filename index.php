<!DOCTYPE html>

<head>
    
    <title>Recettte bio | recettes</title>
    <?php include("header.php");
    ?>
</head>
<body>
	<div class="breadcumb-area bg-img bg-overlay" style="background-image: url(img/bg-img/breadcumb3.jpg);">
        <div class="container h-100">
            <div class="row h-100 align-items-center">
                <div class="col-12">
                    <div class="breadcumb-text text-center">
                        <h2>Les recettes</h2>
                    </div>
                </div>
            </div>
        </div>
    </div>

     <section class="best-receipe-area">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <!--<div class="section-heading">
                        <h3>Les recettes les plus récentes</h3>
                    </div>-->
                </div>
            </div>

            <div class="row section-padding-80">
                <!-- Single Best Receipe Area -->

                <?php  

               
                
                         
               
                $reponse = $bdd->query('SELECT idrecette, titre, photocouverture FROM recette ORDER BY DATE desc');

                while ($donnees = $reponse->fetch())
                {

                    if (!empty($donnees['photocouverture']))
                    {
                    $w = fct_affich_imageW(1000, 850, 'img/photocouv/'.$donnees['photocouverture']);
                    
                    $h = fct_affich_imageH(1000, 850, 'img/photocouv/'.$donnees['photocouverture']);

                    $src = 'img/photocouv/'.$donnees['photocouverture'];
                    
                    }
                    else{

                    $w = fct_affich_imageW(1000, 850, 'img/icons/Logo-Solibio-300_300.jpg');
                    
                    $h = fct_affich_imageH(1000, 850, 'img/icons/Logo-Solibio-300_300.jpg');

                    $src = 'img/icons/Logo-Solibio-300_300.jpg';

                    }
                ?>
                <div class="col-12 col-sm-6 col-lg-4">
                    <div class="single-best-receipe-area mb-30">
                        <?php echo '<a href="recette.php?id='.$donnees['idrecette'].'"><img src="'.$src.'" width="'.$w.'" height="'.$h.'" alt="">'?>
                                                            
                        <div class="receipe-content">
                            <?php echo '<a href="recette.php?id='.$donnees['idrecette'].'" a>' ?>
                                <h5><?php echo $donnees['titre'] ?></h5>
                            </a>
                            <div class="ratings">
                                <i class="fa fa-star" aria-hidden="true"></i>
                                <i class="fa fa-star" aria-hidden="true"></i>
                                <i class="fa fa-star" aria-hidden="true"></i>
                                <i class="fa fa-star" aria-hidden="true"></i>
                                <i class="fa fa-star-o" aria-hidden="true"></i>
                            </div>
                        </div>
                    </div>
                </div>
            <?php } ?>

                <!-- Single Best Receipe Area
                <div class="col-12 col-sm-6 col-lg-4">
                    <div class="single-best-receipe-area mb-30">
                        <a href="recettes.php"><img src="img/photocouv/sr1.jpg" width="850" height="850" alt="">
                        <div class="receipe-content">
                            <a href="recettes.php">
                                <h5>Homemade Burger</h5>
                            </a>
                            <div class="ratings">
                                <i class="fa fa-star" aria-hidden="true"></i>
                                <i class="fa fa-star" aria-hidden="true"></i>
                                <i class="fa fa-star" aria-hidden="true"></i>
                                <i class="fa fa-star" aria-hidden="true"></i>
                                <i class="fa fa-star-o" aria-hidden="true"></i>
                            </div>
                        </div>
                    </div>
                </div>-->

            </div>
        </div>
    </section>
</body>

<?php

    function fct_affich_imageW($Wmax, $Hmax, $img_Src) {
                 // ------------------------------------------------------------------
                   // Lit les dimensions de l'image
       $sizeimg = GetImageSize($img_Src);  
       $Src_W = $sizeimg[0]; // largeur
       $Src_H = $sizeimg[1]; // hauteur
     // ------------------------------------------------------------------
       // Teste les dimensions tenant dans la zone
       $test_H = round(($Wmax / $Src_W) * $Src_H);
       $test_W = round(($Hmax / $Src_H) * $Src_W);
     // ------------------------------------------------------------------
       // Si Height final non précisé (0)
       if(!$Hmax) $Hmax = $test_H;
       // Sinon si Width final non précisé (0)
       elseif(!$Wmax) $Wmax = $test_W;
       // Sinon teste quel redimensionnement tient dans la zone
       elseif($test_H>$Hmax) $Wmax = $test_W;
       else $Hmax = $test_H;
     // ------------------------------------------------------------------
       // (procédure : ne retourne aucune valeur mais ...)
       // AFFICHE les dimensions optimales
      
       return $Wmax;   

    }

    function fct_affich_imageH($Wmax, $Hmax, $img_Src) {
                 // ------------------------------------------------------------------
                   // Lit les dimensions de l'image
       $sizeimg = GetImageSize($img_Src);  
       $Src_W = $sizeimg[0]; // largeur
       $Src_H = $sizeimg[1]; // hauteur
     // ------------------------------------------------------------------
       // Teste les dimensions tenant dans la zone
       $test_H = round(($Wmax / $Src_W) * $Src_H);
       $test_W = round(($Hmax / $Src_H) * $Src_W);
     // ------------------------------------------------------------------
       // Si Height final non précisé (0)
       if(!$Hmax) $Hmax = $test_H;
       // Sinon si Width final non précisé (0)
       elseif(!$Wmax) $Wmax = $test_W;
       // Sinon teste quel redimensionnement tient dans la zone
       elseif($test_H>$Hmax) $Wmax = $test_W;
       else $Hmax = $test_H;
     // ------------------------------------------------------------------
       // (procédure : ne retourne aucune valeur mais ...)
       // AFFICHE les dimensions optimales
      
       return $Hmax;
       

    }

    function fct_affich_image($Wmax, $Hmax, $img_Src) {
 // ------------------------------------------------------------------
   // Lit les dimensions de l'image
   $sizeimg = GetImageSize($img_Src);  
   $Src_W = $sizeimg[0]; // largeur
   $Src_H = $sizeimg[1]; // hauteur
 // ------------------------------------------------------------------
   // Teste les dimensions tenant dans la zone
   $test_H = round(($Wmax / $Src_W) * $Src_H);
   $test_W = round(($Hmax / $Src_H) * $Src_W);
 // ------------------------------------------------------------------
   // Si Height final non précisé (0)
   if(!$Hmax) $Hmax = $test_H;
   // Sinon si Width final non précisé (0)
   elseif(!$Wmax) $Wmax = $test_W;
   // Sinon teste quel redimensionnement tient dans la zone
   elseif($test_H>$Hmax) $Wmax = $test_W;
   else $Hmax = $test_H;
 // ------------------------------------------------------------------
   // (procédure : ne retourne aucune valeur mais ...)
   // AFFICHE les dimensions optimales
   echo 'width='.$Wmax.' height='.$Hmax;
}
// --------------------------------------------------------------------------------------------------


?>