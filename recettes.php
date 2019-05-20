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

                $reponse = $bdd->query('SELECT titre, photocouverture FROM recette ORDER BY DATE desc');

                while ($donnees = $reponse->fetch())
                {
                ?>
                <div class="col-12 col-sm-6 col-lg-4">
                    <div class="single-best-receipe-area mb-30">
                        <a href="receipe-post.html"><img height="100%" width="100%" src="img/photocouv/<?php echo $donnees['photocouverture'] ?>"  alt="">
                        <div class="receipe-content">
                            <a href="receipe-post.html">
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

                <!-- Single Best Receipe Area -->
                <div class="col-12 col-sm-6 col-lg-4">
                    <div class="single-best-receipe-area mb-30">
                        <a href="recettes.php"><img src="img/bg-img/r2.jpg" alt="">
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
                </div>

            </div>
        </div>
    </section>
</body>