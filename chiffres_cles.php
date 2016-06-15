<?php
    /**
     * Created by PhpStorm.
     * User: Ange KOUAKOU
     * Date: 09/06/2016
     * Time: 10:16
     */

    $page = $_GET['opt'];

    if ($page == "resultats") { ?>

        <div class="sb sb_blue">
            <div class="box_title">
                <h4 style="">Chiffres Clés</h4>
            </div>
            <div class="box_content">
                <h4 style="color: #01ADDD">Résultats: </h4>

                <div style="text-align: center">
                    <img src="images/chiffres_cles.PNG" alt="" class="img-thumbnail"
                         style="margin-left: auto; margin-right: auto">
                </div>
            </div>
        </div>

    <?php } elseif ($page == "gros_sinistres_payes") { ?>

        <div class="sb sb_blue">
            <div class="box_title">
                <h4 style="">Chiffres Clés</h4>
            </div>
            <div class="box_content">
                <h4 style="color: #01ADDD">Gros Sinistres Payés: </h4>
                <ul>
                    <li>
                        <h4 style="color: #01ADDD">2013 </h4>
                        <div style="text-align: center">
                            <img src="images/sinistres2013.PNG" alt="" class="img-thumbnail" style="width: 630px">
                        </div>
                    </li>
                    <li>
                        <h4 style="color: #01ADDD">2014 </h4>
                        <div style="text-align: center">
                            <img src="images/sinistres2014.PNG" alt="" class="img-thumbnail" style="width: 630px">
                        </div>
                    </li>
                    <li>
                        <h4 style="color: #01ADDD">2015 </h4>
                        <div style="text-align: center">
                            <img src="images/sinistres2015.PNG" alt="" class="img-thumbnail" style="width: 630px">
                        </div>
                    </li>
                </ul>
            </div>
        </div>

    <?php }
?>