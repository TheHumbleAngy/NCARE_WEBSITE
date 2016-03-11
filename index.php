<?php
    error_reporting(0);
?>
<!DOCTYPE html>
<html>
<head>
    <link href="css/js-image-slider.css" rel="stylesheet" type="text/css"/>
    <script src="js/js-image-slider.js" type="text/javascript"></script>

    <link href="css/bootstrap.css" rel="stylesheet" type="text/css"/>
    <link href="css/bootstrap-responsive.css" rel="stylesheet" type="text/css"/>

    <link href="css/mnwrp.css" rel="stylesheet" type="text/css" />

    <link href="css/style.css" rel="stylesheet" type="text/css"/>
    <link href="css/screen.css" rel="stylesheet" type="text/css"/>

    <script src="js/jquery.js"></script>
    <script src="js/vsmenu.js"></script>
    <link href="css/vsmenu_.css" type="text/css" rel="stylesheet"/>

    <style type="text/css">
        body {
            background: #e0f7fe url(images/pattern_3.png) fixed !important;
        }
    </style>

    <title>NCA Re</title>
</head>
<body>
<div class="outer">
    <div class="container">
        <div class="sb sb_blue">
            <table width=100% style="margin: 3px">
                <tr>
                    <td width="80%"><img src="images/logo1-resized.png" alt="logo"/></td>
                    <td width="20%" align="center"><a href="index.php?page=accueil" class="police">ACCUEIL</a> | <a
                            href="index.php?page=sitemap" class="police">SITEMAP</a> | <a href="index.php?page=contact"
                                                                                          class="police">CONTACT</a>
                    </td>
                </tr>
            </table>
        </div>

        <!-- Image animation -->
        <div id="sliderframe">
            <div id="slider">
                <img src="images/slide-14.jpg" name="slide1" width="1024" height="300">
                <img src="images/slide-18.jpg" name="slide2" width="1024" height="300">
                <img src="images/slide-16.jpg" name="slide3" width="1024" height="300">
                <img src="images/slide-17.jpg" name="slide4" width="1024" height="300">
                <img src="images/slide-12.jpg" name="slide5" width="1024" height="300">
                <img src="images/slide-15.jpg" name="slide6" width="1024" height="300">
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
        <div class="container">
            <div class="fcol f_col_1">
                <!-- widget contacts -->
                <div class="widget-container widget_contact">
                    <h3 class="widget-title">Nous contacter:</h3>
                    <div class="inner">
                        <div class="contact-address">
                            <div class="address">
                                <p>Nouvelle Compagnie Africaine de Réassurance</p>
                                <p>Rez-de-chaussée Immeuble les Harmonies Abidjan Plateau</p>
                                <p>01 BP 5962 Abidjan 01 Côte d'Ivoire</p>
                            </div>
                            <div class="phone"><em>Tel:</em> <span>00 225 20 21 92 06 <br/>
									</span> Fax: <span>00 225 20 21 90 73</span></div>
                            <div class="mail"><em>Email:</em> <a href="mailto:infos@nca-re.net"
                                                                 style="outline: none;">infos@nca-re.net</a></div>
                        </div>
                    </div>
                </div>
                <!--/ widget contacts -->
            </div>
            <!--/ f_col_1 -->

            <div class="fcol f_col_2">
                <!-- widget widget_nav_menu -->
                <div class="widget-container widget_nav_menu">
                    <h3 class="widget-title">A Propos:</h3>
                    <ul class="iconless">
                        <li class="even"><a href="index.php?page=accueil"
                                            style="outline: none;"><span>Profile</span></a>
                        </li>
                        <li><a href="#" style="outline: none;"><span>Historique</span></a></li>
                        <li class="even"><a href="#" style="outline: none;"><span>Mots du Directeur général</span></a>
                        </li>
                        <li><a href="index.php?page=mission"
                               style="outline: none;"><span>Mission</span></a></li>
                        <li><a href="index.php?page=souscriptions" style="outline: none;"><span>Nos Souscriptions</span></a>
                        </li>
                        <li><a href="index.php?page=equipe"
                               style="outline: none;"><span>Structure Organisationnelle</span></a>
                        </li>
                    </ul>
                </div>
                <!-- widget widget_nav_menu -->
            </div>
            <!--/ f_col_2 -->

            <div class="fcol f_col_3">

                <!-- widget widget_nav_menu -->
                <div class="widget-container widget_nav_menu">
                    <h3 class="widget-title">Réassurance:</h3>
                    <ul class="iconless">
                        <li class="even"><a href="#" style="outline: none;"><span>Vue d'ensemble</span></a>
                        </li>
                        <li><a href="#" style="outline: none;"><span>Stratégie(s)</span></a></li>
                    </ul>
                </div>
                <!-- widget widget_nav_menu -->

            </div>
            <!--/ f_col_3 -->

            <div class="fcol f_col_4">

                <!-- widget widget_categories -->
                <div class="widget-container widget_categories">
                    <h3 class="widget-title">Activités et Services:</h3>
                    <ul class="iconless">
                        <li class="even"><a href="#"
                                            style="outline: none;"><span>Non-life Reinsurance</span></a></li>
                        <li><a href="#" style="outline: none;"><span>Réassurance Vie</span></a></li>
                        <li class="even"><a href="#" style="outline: none;"><span>Risks Solution</span></a>
                        </li>
                        <li><a href="#" style="outline: none;"><span>Sinistres</span></a></li>
                    </ul>
                </div>
                <!-- widget widget_categories -->

            </div>
            <!--/ f_col_4 -->

            <div class="fcol f_col_5">

                <!-- widget widget_nav_menu -->
                <div class="widget-container widget_nav_menu">
                    <h3 class="widget-title">Marché des Capitaux:</h3>
                    <ul class="iconless">
                        <li><a href="#"
                               style="outline: none;"><span>Philosophie d'Investissement</span></a></li>
                        <li class="even"><a href="#" style="outline: none;"><span>Portefeuille d'Investissements</span></a>
                        </li>
                        <li><a href="#" style="outline: none;"><span>Instruments à Révenu Fixes</span></a>
                        </li>
                        <li><a href="#" style="outline: none;"><span>Actions Cotées</span></a></li>
                        <li><a href="#" style="outline: none;"><span>Fonds Privés</span></a></li>
                        <li><a href="#" style="outline: none;"><span>Investissements Alternatifs</span></a>
                        </li>
                    </ul>
                </div>
                <!-- widget widget_nav_menu -->

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