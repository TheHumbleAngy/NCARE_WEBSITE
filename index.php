<?php
    error_reporting(0);
?>
<!DOCTYPE html>
<html>
<head>
    <!--<link href="css/js-image-slider.css" rel="stylesheet" type="text/css"/>
    <script src="js/js-image-slider.js" type="text/javascript"></script>

    <link href="css/bootstrap.css" rel="stylesheet" type="text/css"/>
    <link href="css/bootstrap-responsive.css" rel="stylesheet" type="text/css"/>

    <link href="css/mnwrp.css" rel="stylesheet" type="text/css"/>

    <link href="css/style.css" rel="stylesheet" type="text/css"/>
    <link href="css/screen.css" rel="stylesheet" type="text/css"/>

    <script src="js/jquery.js"></script>
    <script src="js/vsmenu.js"></script>
    <link href="css/vsmenu_.css" type="text/css" rel="stylesheet"/>-->

    <link type="text/css" href="css_js/bootstrap-3.3.4-dist/css/bootstrap.css" rel="stylesheet">
    <link type="text/css" href="css_js/bootstrap-3.3.4-dist/css/bootstrap-theme.css" rel="stylesheet">
    <link type="text/css" href="css_js/stylish.css" rel="stylesheet">
    <link type="text/css" href="css_js/mnwrp.css" rel="stylesheet"/>

    <script src="css_js/js-image-slider.js" type="text/javascript"></script>
    <script src="css_js/bootstrap-3.3.4-dist/js/jquery-1.11.3.js"></script>
    <script src="css_js/bootstrap-3.3.4-dist/js/bootstrap.js"></script>

    <title>NCA Re</title>
</head>
<body class="arriere_plan">
<div class="outer">
    <div class="container">
        <div class="row hautdepage">
            <div class="col-md-12 nopadding">
                <div class="row">
                    <div class="col-md-3 nopadding">
                        <div class="logo_entete">
                            <a href="">
                                <img src="images/logo1-resized.png" alt="logo"/>
                            </a>
                        </div>
                    </div>
                    <div class="col-md-3 col-md-offset-6" style="color: #01addd; text-align: right; top: -5px">
                        <p style="padding-top: 30px; margin: 0">
                            <a href="index.php?page=accueil">ACCUEIL</a> |
                            <a href="index.php?page=sitemap">SITEMAP</a> |
                            <a href="index.php?page=contact">CONTACT</a>
                        </p>
                    </div>
                </div>
            </div>
        </div>

        <!-- Image animation -->
        <div id="sliderframe">
            <div id="slider">
                <img src="images/slide-14.jpg" name="slide1" width="100%" height="250">
                <img src="images/slide-18.jpg" name="slide2" width="100%" height="250">
                <img src="images/slide-16.jpg" name="slide3" width="100%" height="250">
                <img src="images/slide-17.jpg" name="slide4" width="100%" height="250">
                <img src="images/slide-12.jpg" name="slide5" width="100%" height="250">
                <img src="images/slide-15.jpg" name="slide6" width="100%" height="250">
            </div>
        </div>
        <!-- End of Image animation -->

        <!-- Menu bar -->
        <div class="row-fluid">
            <?php
                include_once('mnwrp.php');
            ?>
        </div>
        <!-- End of menu bar -->

        <!-- Corps de page -->
        <div class="row-fluid">
            <div class="span3">
                <?php
                    include('sidebar.php');
                ?>
            </div>
            <div class="span9">
                <?php
                    $page = $_GET['page'];    /* gets the variable $page */
                    if (($page == "contact") || ($page == "equipe") || ($page == "mission") || ($page == "souscriptions")) {
                        $page .= '.php';
                        include_once($page);
                    } else {
                        include_once('accueil.php');
                    }
                ?>
            </div>

        </div>
        <!-- Corps de page -->
    </div>

    <footer>
        <div class="container" style="padding: 50px 0 40px; width: 80%">
            <div class="row">
                <div class="col-md-4">
                    <h3 style="margin-top: 10px;">Nous contacter:</h3>
                    <address>
                        <strong>Nouvelle Compagnie Africaine de Réassurance</strong>
                        <p>Rez-de-chaussée Immeuble les Harmonies Abidjan Plateau</p>
                        <p>01 BP 5962 Abidjan 01 Côte d'Ivoire</p>
                        <br>
                        <abbr title="Téléphone">Tel:</abbr> 00 225 20 21 92 06 <br/>
                        Fax: 00 225 20 21 90 73 <br/>
                        E-mail: <a href="mailto:infos@nca-re.net" style="text-decoration: none;">infos@nca-re.net</a>
                    </address>
                </div>
                <div class="col-md-2">
                    <h4>A Propos:</h4>
                    <ul class="list-unstyled">
                        <li>
                            <a href="index.php?page=accueil" style="text-decoration: none;"><span>Profile</span></a>
                        </li>
                        <li>
                            <a href="#" style="text-decoration: none;"><span>Chiffres Clés</span></a>
                        </li>
                        <li>
                            <a href="#" style="text-decoration: none;"><span>Mots du Directeur général</span></a>
                        </li>
                    </ul>
                </div>
                <div class="col-md-2">
                    <h4>Politique de Souscription</h4>
                    <ul class="list-unstyled">
                        <li>
                            <a href="#" style="text-decoration: none;"><span>Territorialité</span></a>
                        </li>
                        <li>
                            <a href="#" style="text-decoration: none;"><span>Branches</span></a>
                        </li>
                        <li>
                            <a href="#" style="text-decoration: none;"><span>Capacité</span></a>
                        </li>
                    </ul>
                </div>
                <div class="col-md-2">
                    <h4>Partenaires</h4>
                    <ul class="list-unstyled">
                        <li>
                            <a href="#" style="text-decoration: none;"><span>Courtiers</span></a>
                        </li>
                        <li>
                            <a href="#" style="text-decoration: none;"><span>Rétrocessionnaires</span></a>
                        </li>
                    </ul>
                </div>
                <div class="col-md-2">
                    <h4>Dirigeants:</h4>
                    <ul class="list-unstyled">
                        <li>
                            <a href="#" style="text-decoration: none;"><span>Conseil d'Administration</span></a>
                        </li>
                        <li>
                            <a href="#" style="text-decoration: none;"><span>Direction Générale</span></a>
                        </li>
                        <li>
                            <a href="#" style="text-decoration: none;"><span>Autres Responsables</span></a>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </footer>
</div>

<script>
    $(document).ready(function () {
        $("#sliderframe").hide().fadeIn(3000);
    })
</script>
</body>
</html>