﻿<?php
    error_reporting(0);
?>
<!DOCTYPE html>
<html>
<head>
    <link type="text/css" href="css_js/bootstrap-3.3.4-dist/css/bootstrap.css" rel="stylesheet"/>
    <link type="text/css" href="css_js/bootstrap-3.3.4-dist/css/bootstrap-theme.css" rel="stylesheet"/>
    <link type="text/css" href="css_js/stylish.css" rel="stylesheet"/>
    <link type="text/css" href="css_js/mnwrp.css" rel="stylesheet"/>
    <link type="text/css" href="css_js/skitter.styles.css" rel="stylesheet"/>

<!--    <script src="css_js/js-image-slider.js"></script>-->
    <script src="css_js/bootstrap-3.3.4-dist/js/jquery-1.11.3.js"></script>
    <script src="css_js/bootstrap-3.3.4-dist/js/bootstrap.js"></script>
    <script src="css_js/jquery.easing.1.3.js"></script>
    <script src="css_js/jquery.skitter.js"></script>

    <script>
        $(document).ready(function() {
            $(".box_skitter_large").skitter({
                theme: 'minimalist',
                interval: 3000,
                animation: 'random',
                numbers_align: 'left'
            });
        });
    </script>
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
                            <a href="index.php?page=accueil">Accueil</a> |
                            <a href="index.php?page=sitemap">Plan du Site</a> |
                            <a href="index.php?page=contact">Contact</a>
                        </p>
                    </div>
                </div>
            </div>
        </div>

        <!-- Image animation -->
        <div class="box_skitter box_skitter_large">
            <ul>
                <li>
                    <img src="images/slide-14_.jpg">
                    <div class="label_text">
                        <p>Confiance</p>
                    </div>
                </li>
                <li>
                    <img src="images/slide-18.jpg" />
                    <div class="label_text">
                        <p>Engagement</p>
                    </div>
                </li>
                <li>
                    <img src="images/slide-16.jpg" />
                    <div class="label_text">
                        <p>Souscription</p>
                    </div>
                </li>
                <li>
                    <img src="images/slide-17.jpg" />
                    <div class="label_text">
                        <p>Mutualisation</p>
                    </div>
                </li>
                <li>
                    <img src="images/slide-12.jpg" />
                    <div class="label_text">
                        <p>Slide 5</p>
                    </div>
                </li>
            </ul>
<!--            <div id="slider">-->
<!--                <img src="images/slide-14.jpg" name="slide1" height="250">-->
<!--                <img src="images/slide-18.jpg" name="slide2" height="250">-->
<!--                <img src="images/slide-16.jpg" name="slide3" height="250">-->
<!--                <img src="images/slide-17.jpg" name="slide4" height="250">-->
<!--                <img src="images/slide-12.jpg" name="slide5" height="250">-->
<!--                <img src="images/slide-15.jpg" name="slide6" height="250">-->
<!--            </div>-->
        </div>

        <!-- Menu horizontal -->
        <div>
            <?php
                include_once('mnwrp.php');
            ?>
        </div>

        <!-- Corps de page -->
        <div class="row">
            <div class="col-md-9">
                <?php
                    $page = $_GET['page'];    /* gets the variable $page */
                    if (($page == "contact") ||
                        ($page == "equipe") ||
                        ($page == "mission") ||
                        ($page == "souscriptions") ||
                        ($page == "chiffres_cles") ||
                        ($page == "politique_souscripton")) {
                        $page .= '.php';
                        include_once($page);
                    } else {
                        include_once('accueil.php');
                    }
                ?>
            </div>

            <div class="col-md-3">
                <div class="sb sb_blue" style="height: 340px">
                    <div class="box_title">
                        <h4 style="">La NCA Ré <span class="label label-primary">en BREF!</span></h4>
                    </div>
                    <div class="box_content" style="height: 275px; overflow: auto; font-size: 13px">
                        <p>
                            <strong>Date et lieu de création: </strong>17 Novembre 2012 à Abidjan, Côte d'Ivoire
                        </p>
                        <p>
                            <strong>Siège: </strong>Abidjan, Côte d'Ivoire
                        </p>
                        <p>
                            <strong>Membres: </strong>
                        </p>
                        <p>
                            <strong>Capital Social: </strong>7.000.000.000 FCFA, soit 10.671.431 €
                        </p>
                        <p>
                            <strong>Fonds Propres: </strong>
                        </p>
                        <p>
                            <strong>Bénéfice Net: </strong>
                        </p>
                        <p>
                            <strong>Chiffre d'Affaires: </strong>
                        </p>
                        <p>
                            <strong>Langues Utilisées: </strong>Français & Anglais
                        </p>

                    </div>
                </div>
            </div>
        </div>
    </div>
    <br/><br/>

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