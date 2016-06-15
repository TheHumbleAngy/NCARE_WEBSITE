<?php
    /**
     * Created by PhpStorm.
     * User: Ange KOUAKOU
     * Date: 13/06/2016
     * Time: 10:21
     */

    $page = $_GET['opt'];

    if ($page == "territorialite") { ?>

        <div class="sb sb_blue">
            <div class="box_title">
                <h4 style="">Territorialité</h4>
            </div>
            <div class="box_content">
                <p>Nos souscriptions s'étendent :</p>
                <ul>
                    <li>A l'Afrique toute entière</li>
                    <li>Au Moyen Orient</li>
                </ul>
            </div>
        </div>

    <?php } elseif ($page == "branches") { ?>

        <div class="sb sb_blue">
            <div class="box_title">
                <h4 style="">Branches</h4>
            </div>
            <div class="box_content">
                <p>La NCA Ré offre des capacités aussi bien en <strong>Traités</strong> qu'en <strong>Facultatives</strong> dans les Branches suivantes :</p>
                <ul>
                    <li>Dommages aux Biens y compris les risques Energy</li>
                    <li>Risques Techniques</li>
                    <li>Automobile, Responsabilité Civile</li>
                    <li>Transport Corps de Facultés</li>
                    <li>Crédit - Caution</li>
                    <li>Décès emprunteurs</li>
                    <li>Temporaire décès indivisuelle et Prévoyance Groupe</li>
                </ul>
            </div>
        </div>
        
    <?php } elseif ($page == "capacite") { ?>

        <div class="sb sb_blue">
            <div class="box_title">
                <h4 style="">Capacité</h4>
            </div>
            <div class="box_content">
                <p>Les Capacités de la NCA Ré sont en constante progression :</p>
                <br/>
                <h4 style="color: #01ADDD">ASSURANCES IARD: </h4>

                <div style="text-align: center">
                    <img src="images/assurances_iard.PNG" alt="" class="img-thumbnail"
                         style="margin-left: auto; margin-right: auto">
                </div>

                <br/>

                <h4 style="color: #01ADDD">ASSURANCES DE PERSONNES: </h4>

                <div style="text-align: center">
                    <img src="images/assurances_personnes.PNG" alt="" class="img-thumbnail"
                         style="margin-left: auto; margin-right: auto">
                </div>
            </div>
        </div>

    <?php }
?>