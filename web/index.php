<?php
session_start();
require("../functions.php");
?>


<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    
    <!-- SEO Meta Tags -->
    <meta name="description" content="Create a stylish landing page for your business startup and get leads for the offered services with this free HTML landing page template.">
    <meta name="author" content="Inovatik">

    <!-- OG Meta Tags to improve the way the post looks when you share the page on LinkedIn, Facebook, Google+ -->
    <meta property="og:site_name" content="" /> <!-- website name -->
    <meta property="og:site" content="" /> <!-- website link -->
    <meta property="og:title" content=""/> <!-- title shown in the actual shared post -->
    <meta property="og:description" content="" /> <!-- description shown in the actual shared post -->
    <meta property="og:image" content="" /> <!-- image link, make sure it's jpg -->
    <meta property="og:url" content="" /> <!-- where do you want your post to link to -->
    <meta property="og:type" content="article" />

    <!-- Website Title -->
    <title>Astico</title>
    
    <!-- Styles -->
    <link href="https://fonts.googleapis.com/css?family=Raleway:400,400i,600,700,700i&amp;subset=latin-ext" rel="stylesheet">
    <link href="css/bootstrap.css" rel="stylesheet">
    <link href="css/fontawesome-all.css" rel="stylesheet">
    <link href="css/swiper.css" rel="stylesheet">
    <link href="css/magnific-popup.css" rel="stylesheet">
    <link href="css/styles.css" rel="stylesheet">
    <link href="css/table.css" rel="stylesheet">
    <link href="css/liste_images.css" rel="stylesheet">
    

    <!-- JS -->
    <script type="text/javascript" src="js/jquery.min.js"></script>
    <script type="text/javascript" src="js/other_function.js"></script>

    <?php 
        if( ! array_key_exists('connecter', $_SESSION) ){
            echo "
                <script type=\"text/javascript\">
                var connecter = false;
                </script>
            ";
        }
        else{
            if($_SESSION["connecter"] == true ){
                echo "
                    <script type=\"text/javascript\">
                        var connecter = true;
                    </script>
                ";
            }
            else{
                echo "
                    <script type=\"text/javascript\">
                        var connecter = false;
                    </script>
                ";
            }
        }
    ?>
    
    <!-- Favicon  -->
    <!-- <link rel="icon" href="images/favicon.png"> -->
</head>
<body data-spy="scroll" data-target=".fixed-top">
    
    <!-- Preloader -->
    <div class="spinner-wrapper">
        <div class="spinner">
            <div class="bounce1"></div>
            <div class="bounce2"></div>
            <div class="bounce3"></div>
        </div>
    </div>
    <!-- end of preloader -->
    

    <!-- Navigation -->
    <nav class="navbar navbar-expand-lg navbar-dark navbar-custom fixed-top">
        <!-- Text Logo - Use this if you don't have a graphic logo -->
        <!-- <a class="navbar-brand logo-text page-scroll" href="index.php">Evolo</a> -->

        <!-- Image Logo -->
        <a class="navbar-brand logo-image" href="index.php"><img src="images/logo_astico.png" alt="alternative"></a>
        
        <!-- Mobile Menu Toggle Button -->
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarsExampleDefault" aria-controls="navbarsExampleDefault" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-awesome fas fa-bars"></span>
            <span class="navbar-toggler-awesome fas fa-times"></span>
        </button>
        <!-- end of mobile menu toggle button -->

        <div class="collapse navbar-collapse" id="navbarsExampleDefault">
            <ul class="navbar-nav ml-auto">
                <li class="nav-item">
                    <a class="nav-link page-scroll" href="#header">Accueil <span class="sr-only">(current)</span></a>
                </li>
                <li class="nav-item">
                    <a class="nav-link page-scroll" href="#services">Services</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link page-scroll" href="#pricing">Prix</a>
                </li>
                <!-- <li class="nav-item">
                    <a class="nav-link page-scroll" href="#request">Request</a>
                </li>
 -->
                <!-- Dropdown Menu -->          
                <!-- <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle page-scroll" href="#about" id="navbarDropdown" role="button" aria-haspopup="true" aria-expanded="false">About</a>
                    <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                        <a class="dropdown-item" href="terms-conditions.html"><span class="item-text">Terms Conditions</span></a>
                        <div class="dropdown-items-divide-hr"></div>
                        <a class="dropdown-item" href="privacy-policy.html"><span class="item-text">Privacy Policy</span></a>
                    </div>
                </li> -->
                <!-- end of dropdown menu -->

                <li class="nav-item">
                    <a class="nav-link page-scroll" href="#contact">Contact</a>
                </li>
            </ul>
            <span class="nav-item social-icons">
                <span class="fa-stack">
                    <a href="https://www.facebook.com/asso.astico/">
                        <i class="fas fa-circle fa-stack-2x facebook"></i>
                        <i class="fab fa-facebook-f fa-stack-1x"></i>
                    </a>
                </span>
                <span class="fa-stack">
                    <a href="#your-link">
                        <i class="fas fa-circle fa-stack-2x twitter"></i>
                        <i class="fab fa-twitter fa-stack-1x"></i>
                    </a>
                </span>
            </span>
        </div>
    </nav> <!-- end of navbar -->
    <!-- end of navigation -->


    <!-- Header -->
    <header id="header" class="header">
        <div class="header-content">
            <div class="container">
                <div class="row">
                    <div class="col-lg-6">
                        <div class="text-container">
                            <h1><span class="turquoise">Association </span> Astico </h1>
                            <p class="p-large">Une association au coeur Post emensos insuperabilis expeditionis eventus languentibus partium animis, quas periculorum varietas</p>
                            <a class="btn-solid-lg page-scroll" href="#services">DECOUVRIR</a>
                            
                            <a id="btn_connexion" class="btn-solid-lg popup-with-move-anim" href="#details-lightbox-3">CONNEXION</a>
                        </div> <!-- end of text-container -->
                    </div> <!-- end of col -->

                    <!-- <div class="col-lg-6"> -->
                        <!-- <div class="image-container">
                            <img class="img-fluid" src="images/header-teamwork.svg" alt="alternative">
                        </div> --> <!-- end of image-container -->
                    <!-- </div> end of col -->


                </div> <!-- end of row -->
            </div> <!-- end of container -->
        </div> <!-- end of header-content -->
    </header> <!-- end of header -->
    <!-- end of header -->


    <!-- Customers -->
    <div class="slider-1">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <h5>Trusted By</h5>
                    
                    <!-- Image Slider -->
                    <div class="slider-container">
                        <div class="swiper-container image-slider">
                            <div class="swiper-wrapper">
                                <div class="swiper-slide">
                                    <div class="image-container">
                                        <img class="img-responsive" src="images/customer-logo-1.png" alt="alternative">
                                    </div>
                                </div>
                                <div class="swiper-slide">
                                    <div class="image-container">
                                        <img class="img-responsive" src="images/customer-logo-2.png" alt="alternative">
                                    </div>
                                </div>
                                <div class="swiper-slide">
                                    <div class="image-container">
                                        <img class="img-responsive" src="images/customer-logo-3.png" alt="alternative">
                                    </div>
                                </div>
                                <div class="swiper-slide">
                                    <div class="image-container">
                                        <img class="img-responsive" src="images/customer-logo-4.png" alt="alternative">
                                    </div>
                                </div>
                                <div class="swiper-slide">
                                    <div class="image-container">
                                        <img class="img-responsive" src="images/customer-logo-5.png" alt="alternative">
                                    </div>
                                </div>
                                <div class="swiper-slide">
                                    <div class="image-container">
                                        <img class="img-responsive" src="images/customer-logo-6.png" alt="alternative">
                                    </div>
                                </div>
                            </div> <!-- end of swiper-wrapper -->
                        </div> <!-- end of swiper container -->
                    </div> <!-- end of slider-container -->
                    <!-- end of image slider -->

                </div> <!-- end of col -->
            </div> <!-- end of row -->
        </div> <!-- end of container -->
    </div> <!-- end of slider-1 -->
    <!-- end of customers -->


    <!-- Services -->
    <div id="services" class="cards-1">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <h2>Services</h2>
                    <p class="p-heading p-large">Post emensos insuperabilis expeditionis eventus languentibus partium animis, quas periculorum varietas fregerat et laborum, nondum tubarum cessante clangore vel milite locato per stationes hibernas</p>
                </div> <!-- end of col -->
            </div> <!-- end of row -->
            <div class="row">
                <div class="col-lg-12">

                    <!-- Card -->
                    <div class="card">
                        <a href="https://sns.edu.umontpellier.fr/fr/master-sciences-numerique-pour-la-sante-montpellier/parcours-ingenierie-des-dispositifs-de-sante-ids/">
                            <img class="card-image" src="images/IDS.png" alt="alternative"></a>
                        <div class="card-body">
                            <h4 class="card-title">IDS</h4>
                            <p>La spécialité « Ingénierie des Dispositifs pour la Santé » (en abrégé : IDS) vise à former les étudiants à la maîtrise théorique et pratique de concepts et dispositifs technologiques appliqués au biomédical.</p>
                        </div>
                    </div>
                    <!-- end of card -->

                    <!-- Card -->
                    <div class="card">
                        <a href="https://sns.edu.umontpellier.fr/fr/master-sciences-numerique-pour-la-sante-montpellier/phymed/">
                            <img class="card-image" src="images/Phymed.png" alt="alternative"></a>
                        <div class="card-body">
                            <h4 class="card-title">Phymed</h4>
                            <p>PhyMed répond au besoin scientifique de fournir, dans un même cursus, une formation avancée en physique appliquée et une formation de base en biologie et santé afin de combler le fossé existant entre les physiciens d’une part et les scientifiques travaillant dans le domaine des sciences de la vie d’autre part.</p>
                        </div>
                    </div>
                    <!-- end of card -->

                    <!-- Card -->
                    <div class="card">
                        <a href="https://sns.edu.umontpellier.fr/fr/master-sciences-numerique-pour-la-sante-montpellier/bcd/">
                            <img class="card-image" src="images/BCD.png" alt="alternative"></a>
                        <div class="card-body">
                            <h4 class="card-title">BCD</h4>
                            <p>Une formation en vue d’acquérir les compétences nécessaires au traitement et à l’analyse des masses de données produites en santé et en agroalimentaire (dossier médical personnalisé, télésanté, imagerie médicale, données issues de capteurs, données de séquences, ...).</p>
                        </div>
                    </div>
                    <!-- end of card -->
                    
                </div> <!-- end of col -->
            </div> <!-- end of row -->
        </div> <!-- end of container -->
    </div> <!-- end of cards-1 -->
    <!-- end of services -->


    <!-- Details 1 -->
    <div class="basic-1">
        <div class="container">
            <div class="row">
                <div class="col-lg-6">
                    <div class="text-container">
                        <h2>Liste des contacts</h2>
                        <p>Garder le contact avec les anciens membres</p>
                        <?php
                            if( isset($_SESSION["connecter"]) && $_SESSION["connecter"] ){
                                echo '<a id="btn_connexion" class="btn-solid-lg popup-with-move-anim" href="#details-lightbox-4">LISTE</a>';
                            }
                            else{
                                echo '<a id="btn_connexion" class="btn-solid-lg popup-with-move-anim" href="#details-lightbox-3">LISTE</a>';
                            }
                        ?>
                        <!-- <a class="btn-solid-reg popup-with-move-anim" href="#details-lightbox-3">LISTE</a> -->
                    </div> <!-- end of text-container -->
                </div> <!-- end of col -->
                <div class="col-lg-6">
                    <div class="image-container">
                        <img class="img-fluid" src="images/details-1-office-worker.svg" alt="alternative">
                    </div> <!-- end of image-container -->
                </div> <!-- end of col -->
            </div> <!-- end of row -->
        </div> <!-- end of container -->
    </div> <!-- end of basic-1 -->
    <!-- end of details 1 -->

    
    <!-- Details 2 -->
    <div class="basic-2">
        <div class="container">
            <div class="row">
                <div class="col-lg-6">
                    <div class="image-container">
                        <img class="img-fluid" src="images/details-2-office-team-work.svg" alt="alternative">
                    </div> <!-- end of image-container -->
                </div> <!-- end of col -->
                <div class="col-lg-6">
                    <div class="text-container">
                        <h2>Accés au drive</h2>
                        <ul class="list-unstyled li-space-lg">
                            <li class="media">
                                <i class="fas fa-check"></i>
                                <div class="media-body">Vous donne accés au cours des trois formations</div>
                            </li>
                        </ul>
                        <?php
                            if( isset($_SESSION["connecter"]) && $_SESSION["connecter"] ){
                                echo '<a id="btn_connexion" class="btn-solid-lg"  href="https://drive.google.com/folderview?id=0B7pMzlYXZy3PYVhpRVhfRUN1Szg" onclick="window.open(this.href); return false;">DRIVE</a>';
                            }
                            else{
                                echo '<a id="btn_connexion" class="btn-solid-lg popup-with-move-anim" href="#details-lightbox-3">DRIVE</a>';
                            }
                        ?>
                    </div> <!-- end of text-container -->
                </div> <!-- end of col -->
            </div> <!-- end of row -->
        </div> <!-- end of container -->
    </div> <!-- end of basic-2 -->
    <!-- end of details 2 -->

    <!-- Details Lightboxes -->
    <!-- Details Lightbox 1 -->
    <div id="details-lightbox-1" class="lightbox-basic zoom-anim-dialog mfp-hide">
        <div class="container">
            <div class="row">
                <button title="Close (Esc)" type="button" class="mfp-close x-button">×</button>
                <div class="col-lg-8">
                    <div class="image-container">
                        <img class="img-fluid" src="images/details-lightbox-1.svg" alt="alternative">
                    </div> <!-- end of image-container -->
                </div> <!-- end of col -->
                <div class="col-lg-4">
                    <h3>Design And Plan</h3>
                    <hr>
                    <h5>Core feature</h5>
                    <p>The emailing module basically will speed up your email marketing operations while offering more subscriber control.</p>
                    <p>Do you need to build lists for your email campaigns? It just got easier with Evolo.</p>
                    <ul class="list-unstyled li-space-lg">
                        <li class="media">
                            <i class="fas fa-check"></i><div class="media-body">List building framework</div>
                        </li>
                        <li class="media">
                            <i class="fas fa-check"></i><div class="media-body">Easy database browsing</div>
                        </li>
                        <li class="media">
                            <i class="fas fa-check"></i><div class="media-body">User administration</div>
                        </li>
                        <li class="media">
                            <i class="fas fa-check"></i><div class="media-body">Automate user signup</div>
                        </li>
                        <li class="media">
                            <i class="fas fa-check"></i><div class="media-body">Quick formatting tools</div>
                        </li>
                        <li class="media">
                            <i class="fas fa-check"></i><div class="media-body">Fast email checking</div>
                        </li>
                    </ul>
                    <a class="btn-solid-reg mfp-close page-scroll" href="#contact">REQUEST</a> <a class="btn-outline-reg mfp-close as-button" href="#screenshots">BACK</a>
                </div> <!-- end of col -->
            </div> <!-- end of row -->
        </div> <!-- end of container -->
    </div> <!-- end of lightbox-basic -->
    <!-- end of details lightbox 1 -->




    <!-- Details Lightbox 2 -->
    <div id="details-lightbox-2" class="lightbox-basic zoom-anim-dialog mfp-hide">
        <div class="container">
            <div class="row">
                <button title="Close (Esc)" type="button" class="mfp-close x-button">×</button>
                <div class="col-lg-8">
                    <div class="image-container">
                        <img class="img-fluid" src="images/details-lightbox-2.svg" alt="alternative">
                    </div> <!-- end of image-container -->
                </div> <!-- end of col -->
                <div class="col-lg-4">
                    <h3>Search To Optimize</h3>
                    <hr>
                    <h5>Core feature</h5>
                    <p>The emailing module basically will speed up your email marketing operations while offering more subscriber control.</p>
                    <p>Do you need to build lists for your email campaigns? It just got easier with Evolo.</p>
                    <ul class="list-unstyled li-space-lg">
                        <li class="media">
                            <i class="fas fa-check"></i><div class="media-body">List building framework</div>
                        </li>
                        <li class="media">
                            <i class="fas fa-check"></i><div class="media-body">Easy database browsing</div>
                        </li>
                        <li class="media">
                            <i class="fas fa-check"></i><div class="media-body">User administration</div>
                        </li>
                        <li class="media">
                            <i class="fas fa-check"></i><div class="media-body">Automate user signup</div>
                        </li>
                        <li class="media">
                            <i class="fas fa-check"></i><div class="media-body">Quick formatting tools</div>
                        </li>
                        <li class="media">
                            <i class="fas fa-check"></i><div class="media-body">Fast email checking</div>
                        </li>
                    </ul>
                    <a class="btn-solid-reg mfp-close page-scroll" href="#contact">REQUEST</a> <a class="btn-outline-reg mfp-close as-button" href="#screenshots">BACK</a>
                </div> <!-- end of col -->
            </div> <!-- end of row -->
        </div> <!-- end of container -->
    </div> <!-- end of lightbox-basic -->
    <!-- end of details lightbox 2 -->
    <!-- end of details lightboxes -->

    <!-- details-lightbox-3 -->
    <!-- formulaire de connexion -->
    <div id="details-lightbox-3" class="lightbox-basic zoom-anim-dialog mfp-hide">
        <div class="container">
            <div class="row">
                <button title="Close (Esc)" type="button" class="mfp-close x-button">×</button>
                <!-- <div class="col-lg-8"> -->
                    <!-- <div class="image-container"> -->
                        <!-- <img class="img-fluid" src="images/details-lightbox-1.svg" alt="alternative"> -->
                    <!-- </div> --> <!-- end of image-container -->
                <!-- </div> --> <!-- end of col -->
                <div class="col-lg-5"> 
                    <!-- <div class="image-container"> -->
                        <!-- <img class="img-fluid" src="images/details-lightbox-1.svg" alt="alternative"> -->
                    <!-- </div> --> <!-- end of image-container -->
                    <h5>Connexion</h5>
                    <p>Connecter vous pour acceder aux services du site. Vous devez être adhérent à Astico</p>
                    <p>Si vous n'avait pas d'identfiant ou de mot de passe, veuillez contacter l'association Astico</p>
                    <ul class="list-unstyled li-space-lg">
                        <li class="media">
                            <i class="fas fa-check"></i><div class="media-body">Fourni un accés au drive pour les cours</div>
                        </li>
                        <li class="media">
                            <i class="fas fa-check"></i><div class="media-body">Accées à la liste des anciens contacts</div>
                        </li>
                    </ul>
                </div>
                <div class="col-lg-4">
                    <form data-toggle="validator" data-focus="false">
                        <div class="form-group">
                            <input type="email" class="form-control-input" id="cmail" name="cmail" required>
                            <label class="label-control" for="cmail">Mail *</label>
                            <div class="help-block with-errors"></div>
                        </div>
                        <div class="form-group">
                            <input type="password" class="form-control-input" id="cpassword" name="cpassword" required>
                            <label class="label-control" for="cpassword">Mot de passe *</label>
                            <div class="help-block with-errors"></div>
                        </div>
                        <div id="connect_error" class="help-block with-errors"></div>

                        <div class="form-group">
                            <input type="button" class="btn-solid-reg as-button" value="CONNEXION" onclick="se_connecter()">
                            <!-- <a class="btn-solid-reg as-button" href="" onclick='se_connecter()'>CONNEXION</a> -->
                            <!-- <input type="submit" class="btn-solid-reg as-button" value="Submit" onclick="se_connecter()"> -->
                            <a class="btn-outline-reg mfp-close as-button" href="#screenshots">RETOUR</a>
                        </div>
                    </form>
                    
                </div> <!-- end of col -->
            </div> <!-- end of row -->
        </div> <!-- end of container -->
    </div> <!-- end of lightbox-basic -->
    <!-- end of details lightbox 3 -->

    <!-- tableau liste de contact -->
    <div id="details-lightbox-4" class="lightbox-basic zoom-anim-dialog mfp-hide">
        <div class="container">
            <div class="row">

                <!-- <input type="text" id="myInput" onkeyup="filter_table()" placeholder="Search.." title="Type in all cols"> -->
                <div class="wrap">
                   <div class="search">
                      <input id="myInput" onkeyup="filter_table()" type="text" class="searchTerm" placeholder="Rechercher...">
                      <button type="submit" class="searchButton">
                        <i class="fa fa-search"></i>
                     </button>
                   </div>
                </div>

                <div id="dad_myTable">
                    <table id="myTable">
                        <tr class="header">
                            <th >mail</th>
                            <th >nom</th>
                            <th >prenom </th>
                            <th >localisation</th>
                            <th >avantages</th>
                        </tr>
                        <?php
                            if( isset($_SESSION["connecter"]) && $_SESSION["connecter"] ){
                                echo_liste_contact();
                            }
                            else{
                                echo 'cette page est accessible que si vous êtes connecter';
                            }
                        ?>
                    </table>
                </div>
                    
            </div> <!-- end of row -->
        </div> <!-- end of container -->
    </div> <!-- end of lightbox-basic -->
    <!-- end of details lightbox 4 -->

    
    <!-- Pricing -->
    <div id="pricing" class="cards-2">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <h2>Prix</h2>
                    <p class="p-heading p-large">We've prepared pricing plans for all budgets so you can get started right away. They're great for small companies and large organizations</p>
                </div> <!-- end of col -->
            </div> <!-- end of row -->
            <div class="row">
                <div class="col-lg-12">

                    <!-- Card-->
                    <div class="card">
                        <div class="card-body">
                            <div class="card-title">Inscription</div>
                            <div class="card-subtitle">Just to see what can be achieved</div>
                            <hr class="cell-divide-hr">
                            <div class="price">
                                <span class="currency">€</span><span class="value">900M</span>
                                <div class="frequency">mois</div>
                            </div>
                            <hr class="cell-divide-hr">
                            <ul class="list-unstyled li-space-lg">
                                <li class="media">
                                    <i class="fas fa-check"></i><div class="media-body">Accés au drive</div>
                                </li>
                                <li class="media">
                                    <i class="fas fa-check"></i><div class="media-body">Accés aux contacts des anciens membres</div>
                                </li>
                            </ul>
                            <div class="button-wrapper">
                                <a class="btn-solid-reg page-scroll" href="#contact">REQUEST</a>
                            </div>
                        </div>
                    </div> <!-- end of card -->
                    <!-- end of card -->

                    <!-- Card-->
                    <!-- <div class="card">
                        <div class="card-body">
                            <div class="card-title">MEDIUM</div>
                            <div class="card-subtitle">Very appropriate for the short term</div>
                            <hr class="cell-divide-hr">
                            <div class="price">
                                <span class="currency">$</span><span class="value">299</span>
                                <div class="frequency">monthly</div>
                            </div>
                            <hr class="cell-divide-hr">
                            <ul class="list-unstyled li-space-lg">
                                <li class="media">
                                    <i class="fas fa-check"></i><div class="media-body">Improve Your Email Marketing</div>
                                </li>
                                <li class="media">
                                    <i class="fas fa-check"></i><div class="media-body">User And Admin Rights Control</div>
                                </li>
                                <li class="media">
                                    <i class="fas fa-check"></i><div class="media-body">List Building And Cleaning</div>
                                </li>
                                <li class="media">
                                    <i class="fas fa-check"></i><div class="media-body">Collected Data Management</div>
                                </li>
                                <li class="media">
                                    <i class="fas fa-times"></i><div class="media-body">More Planning And Evaluation</div>
                                </li>
                            </ul>
                            <div class="button-wrapper">
                                <a class="btn-solid-reg page-scroll" href="#request">REQUEST</a>
                            </div>
                        </div>
                    </div> --> <!-- end of card -->
                    <!-- end of card -->

                    <!-- Card-->
                    <!-- <div class="card">
                        <div class="label">
                            <p class="best-value">Best Value</p>
                        </div>
                        <div class="card-body">
                            <div class="card-title">COMPLETE</div>
                            <div class="card-subtitle">Must have for large companies</div>
                            <hr class="cell-divide-hr">
                            <div class="price">
                                <span class="currency">$</span><span class="value">399</span>
                                <div class="frequency">monthly</div>
                            </div>
                            <hr class="cell-divide-hr">
                            <ul class="list-unstyled li-space-lg">
                                <li class="media">
                                    <i class="fas fa-check"></i><div class="media-body">Improve Your Email Marketing</div>
                                </li>
                                <li class="media">
                                    <i class="fas fa-check"></i><div class="media-body">User And Admin Rights Control</div>
                                </li>
                                <li class="media">
                                    <i class="fas fa-check"></i><div class="media-body">List Building And Cleaning</div>
                                </li>
                                <li class="media">
                                    <i class="fas fa-check"></i><div class="media-body">Collected Data Management</div>
                                </li>
                                <li class="media">
                                    <i class="fas fa-check"></i><div class="media-body">More Planning And Evaluation</div>
                                </li>
                            </ul>
                            <div class="button-wrapper">
                                <a class="btn-solid-reg page-scroll" href="#request">REQUEST</a>
                            </div>
                        </div> 
                    </div> --> <!-- end of card -->
                    <!-- end of card -->

                </div> <!-- end of col -->
            </div> <!-- end of row -->
        </div> <!-- end of container -->
    </div> <!-- end of cards-2 -->
    <!-- end of pricing -->


    <!-- Request -->
    <!-- <div id="request" class="form-1">
        <div class="container">
            <div class="row">
                <div class="col-lg-6">
                    <div class="text-container">
                        <h2>Fill The Following Form To Request A Meeting</h2>
                        <p>Evolo is one of the easiest and feature packed marketing automation apps in the market. Discover what it can do for your business organization right away.</p>
                        <ul class="list-unstyled li-space-lg">
                            <li class="media">
                                <i class="fas fa-check"></i>
                                <div class="media-body"><strong class="blue">Automate your marketing</strong> activities and get results today</div>
                            </li>
                            <li class="media">
                                <i class="fas fa-check"></i>
                                <div class="media-body"><strong class="blue">Interact with all your</strong> targeted customers at a personal level</div>
                            </li>
                            <li class="media">
                                <i class="fas fa-check"></i>
                                <div class="media-body"><strong class="blue">Convince them to buy</strong> your company's awesome products</div>
                            </li>
                            <li class="media">
                                <i class="fas fa-check"></i>
                                <div class="media-body"><strong class="blue">Save precious time</strong> and invest it where you need it the most</div>
                            </li>
                        </ul> -->
                    <!-- </div> end of text-container -->
                <!-- </div> end of col -->
                <!-- <div class="col-lg-6"> -->

                    <!-- Request Form -->
                    <!-- <div class="form-container">
                        <form id="requestForm" data-toggle="validator" data-focus="false">
                            <div class="form-group">
                                <input type="text" class="form-control-input" id="rname" name="rname" required>
                                <label class="label-control" for="rname">Full name</label>
                                <div class="help-block with-errors"></div>
                            </div>
                            <div class="form-group">
                                <input type="email" class="form-control-input" id="remail" name="remail" required>
                                <label class="label-control" for="remail">Email</label>
                                <div class="help-block with-errors"></div>
                            </div>
                            <div class="form-group">
                                <input type="text" class="form-control-input" id="rphone" name="rphone" required>
                                <label class="label-control" for="rphone">Phone</label>
                                <div class="help-block with-errors"></div>
                            </div>
                            <div class="form-group">
                                <select class="form-control-select" id="rselect" required>
                                    <option class="select-option" value="" disabled selected>Interested in...</option>
                                    <option class="select-option" value="Personal Loan">Starter</option>
                                    <option class="select-option" value="Car Loan">Medium</option>
                                    <option class="select-option" value="House Loan">Complete</option>
                                </select>
                                <div class="help-block with-errors"></div>
                            </div>
                            <div class="form-group checkbox">
                                <input type="checkbox" id="rterms" value="Agreed-to-Terms" name="rterms" required>I agree with Evolo's stated <a href="privacy-policy.html">Privacy Policy</a> and <a href="terms-conditions.html">Terms & Conditions</a>
                                <div class="help-block with-errors"></div>
                            </div>
                            <div class="form-group">
                                <button type="submit" class="form-control-submit-button">REQUEST</button>
                            </div>
                            <div class="form-message">
                                <div id="rmsgSubmit" class="h3 text-center hidden"></div>
                            </div>
                        </form> -->
                    <!-- </div> end of form-container -->
                    <!-- end of request form -->

                </div> <!-- end of col -->
            </div> <!-- end of row -->
        </div> <!-- end of container -->
    </div> <!-- end of form-1 -->
    <!-- end of request -->

    <!-- Images -->
    <div class="basic-3">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <h2>Images</h2>
                </div> 
            </div>
            <div class="row">
                <ul class="image-list-small">
                    <li>
                        <a href="http://placehold.it/1080x720/D7594B/ffffff&text=image" style="background-image: url('http://placehold.it/1080x720/D7594B/ffffff&text=image');"></a>
                        <div class="details">
                            <h3><a href="#">In the subway</a></h3>
                            <p class="image-author">Matt Stone</p>
                        </div>
                    </li>
                    <li>
                        <a href="#" style="background-image: url('http://placehold.it/150x150/1155BB/ffffff&text=image');"></a>
                        <div class="details">
                            <h3><a href="#">Industrial</a></h3>
                            <p class="image-author">Earnest Leming</p>
                        </div>
                    </li>
                    <li>
                        <a href="#" style="background-image: url('assets/images/pictures/colosseum.jpg');"></a>
                        <div class="details">
                            <h3><a href="#">When in Rome..</a></h3>
                            <p class="image-author">Edward Flint</p>
                        </div>
                    </li>
                    <li>
                        <a href="#" style="background-image: url('assets/images/pictures/sahale-wa.jpg');"></a>
                        <div class="details">
                            <h3><a href="#">Mountain Top</a></h3>
                            <p class="image-author">Rick Alpine</p>
                        </div>
                    </li>
                    <li>
                        <a href="#" style="background-image: url('assets/images/pictures/tonemapped.jpg');"></a>
                        <div class="details">
                            <h3><a href="#">Vienna Adventure</a></h3>
                            <p class="image-author">Stacy River</p>
                        </div>
                    </li>
                    <li>
                        <a href="#" style="background-image: url('assets/images/pictures/sands-of-life.jpg');"></a>
                        <div class="details">
                            <h3><a href="#">Magnificent beach</a></h3>
                            <p class="image-author">Frank Stone</p>
                        </div>
                    </li>
                    <li>
                        <a href="#" style="background-image: url('assets/images/pictures/sands-of-life.jpg');"></a>
                        <div class="details">
                            <h3><a href="#">Magnificent beach</a></h3>
                            <p class="image-author">Frank Stone</p>
                        </div>
                    </li>
                    <li>
                        <a href="#" style="background-image: url('assets/images/pictures/sands-of-life.jpg');"></a>
                        <div class="details">
                            <h3><a class="text_none" href="#">Magnificent beach</a></h3>
                            <p class="image-author text_none">Frank Stone</p>
                        </div>
                    </li>
                    
                </ul>
            </div>
        </div>
    </div>
    <!-- end-image -->

    <!-- Video -->
    <div class="basic-3">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <h2>Video</h2>
                </div> <!-- end of col -->
            </div> <!-- end of row -->
            <div class="row">
                <div class="col-lg-12">
                    
                    <!-- Video Preview -->
                    <div class="image-container">
                        <div class="video-wrapper">
                            <a class="popup-youtube" href="https://www.youtube.com/watch?v=lWgvuOuZHfg" data-effect="fadeIn">
                                <img class="img-fluid" src="images/video-frame.svg" alt="alternative">
                                <span class="video-play-button">
                                    <span></span>
                                </span>
                            </a>
                        </div> <!-- end of video-wrapper -->
                    </div> <!-- end of image-container -->
                    <!-- end of video preview -->

                    <p>Torquate offendit pluribus re ego asperner quod philosophi a oratio aeque falli eloquentiam quot et quod non ego dicit locis.</p>
                </div> <!-- end of col -->
            </div> <!-- end of row -->
        </div> <!-- end of container -->
    </div> <!-- end of basic-3 -->
    <!-- end of video -->


    <!-- Testimonials -->
    <div class="slider-2">
        <div class="container">
            <div class="row">
                <div class="col-lg-6">
                    <div class="image-container">
                        <img class="img-fluid" src="images/testimonials-2-men-talking.svg" alt="alternative">
                    </div> <!-- end of image-container -->
                </div> <!-- end of col -->
                <div class="col-lg-6">
                    <h2>Témoignages</h2>

                    <!-- Card Slider -->
                    <div class="slider-container">
                        <div class="swiper-container card-slider">
                            <div class="swiper-wrapper">
                                
                                <!-- Slide -->
                                <div class="swiper-slide">
                                    <div class="card">
                                        <img class="card-image" src="images/testimonial-1.svg" alt="alternative">
                                        <div class="card-body">
                                            <p class="testimonial-text">I just finished my trial period and was so amazed with the support and results that I purchased Evolo right away at the special price.</p>
                                            <p class="testimonial-author">Jude Thorn - Designer</p>
                                        </div>
                                    </div>
                                </div> <!-- end of swiper-slide -->
                                <!-- end of slide -->
        
                                <!-- Slide -->
                                <div class="swiper-slide">
                                    <div class="card">
                                        <img class="card-image" src="images/testimonial-2.svg" alt="alternative">
                                        <div class="card-body">
                                            <p class="testimonial-text">Evolo has always helped or startup to position itself in the highly competitive market of mobile applications. You will not regret using it!</p>
                                            <p class="testimonial-author">Marsha Singer - Developer</p>
                                        </div>
                                    </div>        
                                </div> <!-- end of swiper-slide -->
                                <!-- end of slide -->
        
                                <!-- Slide -->
                                <div class="swiper-slide">
                                    <div class="card">
                                        <img class="card-image" src="images/testimonial-3.svg" alt="alternative">
                                        <div class="card-body">
                                            <p class="testimonial-text">Love their services and was so amazed with the support and results that I purchased Evolo for two years in a row. They are awesome.</p>
                                            <p class="testimonial-author">Roy Smith - Marketer</p>
                                        </div>
                                    </div>        
                                </div> <!-- end of swiper-slide -->
                                <!-- end of slide -->
                               
                            </div> <!-- end of swiper-wrapper -->
        
                            <!-- Add Arrows -->
                            <div class="swiper-button-next"></div>
                            <div class="swiper-button-prev"></div>
                            <!-- end of add arrows -->
        
                        </div> <!-- end of swiper-container -->
                    </div> <!-- end of slider-container -->
                    <!-- end of card slider -->

                </div> <!-- end of col -->
            </div> <!-- end of row -->
        </div> <!-- end of container -->
    </div> <!-- end of slider-2 -->
    <!-- end of testimonials -->


    <!-- About -->
    <div id="about" class="basic-4">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <h2>A propos de l'équipe</h2>
                    <p class="p-heading p-large">Rencontrer notre équipe ...</p>
                </div> <!-- end of col -->
            </div> <!-- end of row -->
            <div class="row">
                <div class="col-lg-12">
                    
                    <!-- Team Member -->
                    <div class="team-member">
                        <div class="image-wrapper">
                            <img class="img-fluid" src="images/team-member-1.svg" alt="alternative">
                        </div> <!-- end of image-wrapper -->
                        <p class="p-large"><strong>Lacy Whitelong</strong></p>
                        <p class="job-title">Business Developer</p>
                        <span class="social-icons">
                            <span class="fa-stack">
                                <a href="https://www.facebook.com/asso.astico/">
                                    <i class="fas fa-circle fa-stack-2x facebook"></i>
                                    <i class="fab fa-facebook-f fa-stack-1x"></i>
                                </a>
                            </span>
                            <span class="fa-stack">
                                <a href="#your-link">
                                    <i class="fas fa-circle fa-stack-2x twitter"></i>
                                    <i class="fab fa-twitter fa-stack-1x"></i>
                                </a>
                            </span>
                        </span> <!-- end of social-icons -->
                    </div> <!-- end of team-member -->
                    <!-- end of team member -->

                    <!-- Team Member -->
                    <div class="team-member">
                        <div class="image-wrapper">
                            <img class="img-fluid" src="images/team-member-2.svg" alt="alternative">
                        </div> <!-- end of image wrapper -->
                        <p class="p-large"><strong>Chris Blue</strong></p>
                        <p class="job-title">Online Marketer</p>
                        <span class="social-icons">
                            <span class="fa-stack">
                                <a href="https://www.facebook.com/asso.astico/">
                                    <i class="fas fa-circle fa-stack-2x facebook"></i>
                                    <i class="fab fa-facebook-f fa-stack-1x"></i>
                                </a>
                            </span>
                            <span class="fa-stack">
                                <a href="#your-link">
                                    <i class="fas fa-circle fa-stack-2x twitter"></i>
                                    <i class="fab fa-twitter fa-stack-1x"></i>
                                </a>
                            </span>
                        </span> <!-- end of social-icons -->
                    </div> <!-- end of team-member -->
                    <!-- end of team member -->

                    <!-- Team Member -->
                    <div class="team-member">
                        <div class="image-wrapper">
                            <img class="img-fluid" src="images/team-member-3.svg" alt="alternative">
                        </div> <!-- end of image wrapper -->
                        <p class="p-large"><strong>Sheila Zimerman</strong></p>
                        <p class="job-title">Software Engineer</p>
                        <span class="social-icons">
                            <span class="fa-stack">
                                <a href="#your-link">
                                    <i class="fas fa-circle fa-stack-2x facebook"></i>
                                    <i class="fab fa-facebook-f fa-stack-1x"></i>
                                </a>
                            </span>
                            <span class="fa-stack">
                                <a href="#your-link">
                                    <i class="fas fa-circle fa-stack-2x twitter"></i>
                                    <i class="fab fa-twitter fa-stack-1x"></i>
                                </a>
                            </span>
                        </span> <!-- end of social-icons -->
                    </div> <!-- end of team-member -->
                    <!-- end of team member -->

                    <!-- Team Member -->
                    <div class="team-member">
                        <div class="image-wrapper">
                            <img class="img-fluid" src="images/team-member-4.svg" alt="alternative">
                        </div> <!-- end of image wrapper -->
                        <p class="p-large"><strong>Mary Villalonga</strong></p>
                        <p class="job-title">Product Manager</p>
                        <span class="social-icons">
                            <span class="fa-stack">
                                <a href="#your-link">
                                    <i class="fas fa-circle fa-stack-2x facebook"></i>
                                    <i class="fab fa-facebook-f fa-stack-1x"></i>
                                </a>
                            </span>
                            <span class="fa-stack">
                                <a href="#your-link">
                                    <i class="fas fa-circle fa-stack-2x twitter"></i>
                                    <i class="fab fa-twitter fa-stack-1x"></i>
                                </a>
                            </span>
                        </span> <!-- end of social-icons -->
                    </div> <!-- end of team-member -->
                    <!-- end of team member -->

                </div> <!-- end of col -->
            </div> <!-- end of row -->
        </div> <!-- end of container -->
    </div> <!-- end of basic-4 -->
    <!-- end of about -->


    <!-- Contact -->
    <div id="contact" class="form-2">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <h2>Informations de contact</h2>
                    <ul class="list-unstyled li-space-lg">
                        <li class="address">N'hésite surtout pas à nous contacter via le formulaire ou l'adresse mail</li>
                        <li><i class="fas fa-map-marker-alt"></i>Faculté des Sciences de Montpellier, Place E. Bataillon, 34095 Montpellier</li>
                        <!-- <li><i class="fas fa-phone"></i><a class="turquoise" href="tel:003024630820">+81 720 2212</a></li> -->
                        <li><i class="fas fa-envelope"></i><a class="turquoise" href="mailto:office@evolo.com">association.astico@gmail.com</a></li>
                    </ul>
                </div> <!-- end of col -->
            </div> <!-- end of row -->
            <div class="row">
                <div class="col-lg-6">
                    <div class="map-responsive">
                        <!-- <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d100939.98555098464!2d-122.507640204439!3d37.757814996609724!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x80859a6d00690021%3A0x4a501367f076adff!2sSan+Francisco%2C+CA%2C+USA!5e0!3m2!1sen!2sro!4v1498231462606" allowfullscreen></iframe> -->
                        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2887.736882411047!2d3.8607104157726138!3d43.63283502912217!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x12b6aede6a2f7ec3%3A0x14715e24ed076f4f!2sFacult%C3%A9%20des%20Sciences%20de%20Montpellier!5e0!3m2!1sfr!2sfr!4v1570216290754!5m2!1sfr!2sfr" allowfullscreen=""></iframe>
                    </div>
                </div> <!-- end of col -->
                <div class="col-lg-6">
                    
                    <!-- Contact Form -->
                    <form id="contactForm" data-toggle="validator" data-focus="false">
                        <div class="form-group">
                            <input type="text" class="form-control-input" id="cname" required>
                            <label class="label-control" for="cname">Nom</label>
                            <div class="help-block with-errors"></div>
                        </div>
                        <div class="form-group">
                            <input type="email" class="form-control-input" id="cemail" required>
                            <label class="label-control" for="cemail">Email</label>
                            <div class="help-block with-errors"></div>
                        </div>
                        <div class="form-group">
                            <textarea class="form-control-textarea" id="cmessage" required></textarea>
                            <label class="label-control" for="cmessage">Votre message</label>
                            <div class="help-block with-errors"></div>
                        </div>
                        <div class="form-group checkbox">
                            <input type="checkbox" id="cterms" value="Agreed-to-Terms" required>I have read and agree with Evolo's stated <a href="privacy-policy.html">Privacy Policy</a> and <a href="terms-conditions.html">Terms Conditions</a> 
                            <div class="help-block with-errors"></div>
                        </div>
                        <div class="form-group">
                            <button type="submit" class="form-control-submit-button">ENVOYE MESSAGE</button>
                        </div>
                        <div class="form-message">
                            <div id="cmsgSubmit" class="h3 text-center hidden"></div>
                        </div>
                    </form>
                    <!-- end of contact form -->

                </div> <!-- end of col -->
            </div> <!-- end of row -->
        </div> <!-- end of container -->
    </div> <!-- end of form-2 -->
    <!-- end of contact -->


    <!-- Footer -->
    <div class="footer">
        <div class="container">
            <div class="row">
                <div class="col-md-4">
                    <div class="footer-col">
                        <h4>A propos Astico</h4>
                        <p>XXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXX;</p>
                    </div>
                </div> <!-- end of col -->
                <div class="col-md-4">
                    <div class="footer-col middle">
                        <h4>Liens importants</h4>
                        <ul class="list-unstyled li-space-lg">
                            <li class="media">
                                <i class="fas fa-square"></i>
                                <div class="media-body">Montpellier Omics Days <a class="turquoise" href="https://montpellier-omics-days.fr">https://montpellier-omics-days.fr</a></div>
                            </li>
                            <!-- <li class="media">
                                <i class="fas fa-square"></i>
                                <div class="media-body">Read our <a class="turquoise" href="terms-conditions.html">Terms & Conditions</a>, <a class="turquoise" href="privacy-policy.html">Privacy Policy</a></div>
                            </li> -->
                        </ul>
                    </div>
                </div> <!-- end of col -->
                <div class="col-md-4">
                    <div class="footer-col last">
                        <h4>Social Media</h4>
                        <span class="fa-stack">
                            <a href="https://www.facebook.com/asso.astico/">
                                <i class="fas fa-circle fa-stack-2x"></i>
                                <i class="fab fa-facebook-f fa-stack-1x"></i>
                            </a>
                        </span>
                        <span class="fa-stack">
                            <a href="#your-link">
                                <i class="fas fa-circle fa-stack-2x"></i>
                                <i class="fab fa-twitter fa-stack-1x"></i>
                            </a>
                        </span>
                        <!-- <span class="fa-stack">
                            <a href="#your-link">
                                <i class="fas fa-circle fa-stack-2x"></i>
                                <i class="fab fa-google-plus-g fa-stack-1x"></i>
                            </a>
                        </span>
                        <span class="fa-stack">
                            <a href="#your-link">
                                <i class="fas fa-circle fa-stack-2x"></i>
                                <i class="fab fa-instagram fa-stack-1x"></i>
                            </a>
                        </span>
                        <span class="fa-stack">
                            <a href="#your-link">
                                <i class="fas fa-circle fa-stack-2x"></i>
                                <i class="fab fa-linkedin-in fa-stack-1x"></i>
                            </a>
                        </span> -->
                    </div> 
                </div> <!-- end of col -->
            </div> <!-- end of row -->
        </div> <!-- end of container -->
    </div> <!-- end of footer -->  
    <!-- end of footer -->


    <!-- Copyright -->
    <div class="copyright">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <p class="p-small">Copyright © Evolo - StartUp HTML Landing Page Template by <a href="https://inovatik.com">Inovatik</a></p>
                </div> <!-- end of col -->
            </div> <!-- enf of row -->
        </div> <!-- end of container -->
    </div> <!-- end of copyright --> 
    <!-- end of copyright -->
    
        
    <!-- Scripts -->
    <script src="js/jquery.min.js"></script> <!-- jQuery for Bootstrap's JavaScript plugins -->
    <script src="js/popper.min.js"></script> <!-- Popper tooltip library for Bootstrap -->
    <script src="js/bootstrap.min.js"></script> <!-- Bootstrap framework -->
    <script src="js/jquery.easing.min.js"></script> <!-- jQuery Easing for smooth scrolling between anchors -->
    <script src="js/swiper.min.js"></script> <!-- Swiper for image and text sliders -->
    <script src="js/jquery.magnific-popup.js"></script> <!-- Magnific Popup for lightboxes -->
    <script src="js/validator.min.js"></script> <!-- Validator.js - Bootstrap plugin that validates forms -->
    <script src="js/scripts.js"></script> <!-- Custom scripts -->

    <script type="text/javascript">
        verif_connexion(connecter);
    </script>
    <script type="text/javascript">
        //Permet de lancer la connexion en appuyant sur le boutton entrée
        $("#details-lightbox-3").on('keyup', function (e) {
            if (e.keyCode === 13) {
                se_connecter();
            }
        });

        //Pour gerer la liste d'image sans texte
        $(".text_none").html(".");
        $(".text_none").css("opacity","0");//couleur en blanc
    </script>
    <script type="text/javascript" src="js/other_function.js"></script>
</body>
</html>
