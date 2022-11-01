<!doctype html>

<html lang="fr">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">

  <title>EFR'ATP</title>
  <meta name="description" content="EFR'ATP">
  <meta name="author" content="Thibaut GENET">

  <link rel="icon" href="/favicon.ico">
  <link rel="icon" href="/favicon.svg" type="image/svg+xml">

  <link rel="stylesheet" href="style.css">

<meta http-equiv="refresh" content="40" >

</head>
<body onload=display_ct();>
<?php include 'include/api.php' ?>

<div style="height: 65px;"></div>    

    <div class="affichage">
        <div class="ligne">
            <h2>Ligne</h2>
        </div>
        <div class="destination">
            <h2>Destination</h2>
        </div>
        <div class="temps">
            <h2>Prochains départs</h2>
        </div>
        <div class="trafic">
            <h2>Statut</h2>
        </div>
        <div class="line">
            <div class="ligne">
                <img src="img/m7_2.svg" id="indice_ligne">
            </div>
            <div class="destination">
                <div class="panel"><p><?php
                if (($M7['nextDepartures']['statusCode']) == 404) {
                    echo 'Fin de service';
                }
                else {
                    echo ($M7['nextDepartures']['data'][0]['lineDirection']); 
                }
            ?></p></div>
            </div>
            <div class="temps">
            <div class="panel"><p><?php
                if (($M7['nextDepartures']['statusCode']) == 404) {
                    echo '-';
                }
                else {
                    if (($M7['nextDepartures']['data'][0]['time']) >= 5) {
                        echo ($M7['nextDepartures']['data'][0]['time']);
                    }
                    else {
                        echo ($M7['nextDepartures']['data'][1]['time']);
                    }
                }
            ?></p></div>
                <div class="panel"><p>
                <?php
                if (($M7['nextDepartures']['statusCode']) == 404) {
                    echo '-';
                }
                else {
                    if (($M7['nextDepartures']['data'][0]['time']) >= 5) {
                        echo ($M7['nextDepartures']['data'][2]['time']);
                    }
                    else {
                        echo ($M7['nextDepartures']['data'][1]['time']);
                    }
                }
            ?>
            </p></div>
            </div>
            <div class="trafic">
                <?php
                    if (($M7['nextDepartures']['statusCode']) != 404) {
                        if (($trafic['allPerturbationsByLine'][20]['hasTrafficDisruptions']) == false) {
                            echo '<img src="img/ok.svg" class="status">';
                        }
                        else {
                            echo '<img src="img/retard.svg" class="status">';
                        }   
                    }
                    else {
                        echo '<img src="img/danger.svg" class="status">';
                    }
                ?>
            </div>
        </div>
        <div class="line">
            <div class="ligne">
                <img src="img/t7_2.svg" id="indice_ligne">
            </div>
            <div class="destination">
                <div class="panel"><p><?php
                if (($T7['nextDepartures']['statusCode']) == 404) {
                    echo 'Fin de service';
                }
                else {
                    echo ($T7['nextDepartures']['data'][0]['lineDirection']); 
                }
            ?></p></div>
            </div>
            <div class="temps">
                <div class="panel"><p><?php
                if (($T7['nextDepartures']['statusCode']) == 404) {
                    echo '-';
                }
                else {
                    if (($T7['nextDepartures']['data'][0]['time']) >= 5) {
                        echo ($T7['nextDepartures']['data'][0]['time']);
                    }
                    else {
                        echo ($T7['nextDepartures']['data'][1]['time']);
                    }
                }
            ?></p></div>
                <div class="panel"><p>
                <?php
                if (($T7['nextDepartures']['statusCode']) == 404) {
                    echo '-';
                }
                else {
                    if (($T7['nextDepartures']['data'][0]['time']) >= 5) {
                        echo ($T7['nextDepartures']['data'][2]['time']);
                    }
                    else {
                        echo ($T7['nextDepartures']['data'][1]['time']);
                    }
                }
            ?></p></div>
            </div>
            <div class="trafic">
            <?php
                    if (($T7['nextDepartures']['statusCode']) != 404) {
                        if (($trafic['allPerturbationsByLine'][20]['hasTrafficDisruptions']) == false) {
                            echo '<img src="img/ok.svg" class="status">';
                        }
                        else {
                            echo '<img src="img/retard.svg" class="status">';
                        }   
                    }
                    else {
                        echo '<img src="img/danger.svg" class="status">';
                    }
                ?>
            </div>
        </div>
    </div>


    <hr style="margin-top: 55px; margin-bottom:-25px; border:0.1px solid #D9D9D9;">
<br /><br /><br /><br />
<div class="block">
    <div class="max-bus">
        <div class="bus" id="one">
            <div class="indicebus">
                <img src="img/bus172.svg" id="indice_bus">
            </div>
            <div class="left">
                <div class="panel" id="bus" style="margin-bottom: 10px;">
                <?php
                if ((($BUS172['nextDepartures']['statusCode']) == 404) or (empty($BUS172['nextDepartures']['data'][0]['lineDirection']))) {
                    echo 'Fin de service';
                }
                else {
                    echo ($BUS172['nextDepartures']['data'][0]['lineDirection']); 
                }
            ?>
            </div>
                <div class="tempsbus"><?php
                if ((($BUS172['nextDepartures']['statusCode']) != 404) or (!empty($BUS172['nextDepartures']['data'][0]['lineDirection']))) {
                    echo ($BUS172['nextDepartures']['data'][0]['time']);
                }
                else { echo '-';}
                ?></div>
                <div class="panel" id="bus"><?php
                if ((($BUS172['nextDepartures']['statusCode']) == 404) or (empty($BUS172['nextDepartures']['data'][1]['lineDirection']))) {
                    echo 'Fin de service';
                }
                else {
                    echo ($BUS172['nextDepartures']['data'][1]['lineDirection']); 
                }
            ?></div>
                <div class="tempsbus"><?php
                if ((($BUS172['nextDepartures']['statusCode']) != 404) or (!empty($BUS172['nextDepartures']['data'][1]['time']))) {
                    echo ($BUS172['nextDepartures']['data'][1]['time']);
                }
                else { echo '-';}
                ?></div>
            </div>
        </div>
        <p style="margin-left:19.5%">Prochains passages à l'arrêt "Auguste Delaune"</p>
    </div>
    <div class="max-bus">
        <div class="bus" id="two">
            <div class="indicebus">
                <img src="img/bus380.svg" id="indice_bus">
            </div>
            <div class="left">
                <div class="panel" id="bus" style="margin-bottom: 10px;"><?php
                if ((($BUS380['nextDepartures']['statusCode']) == 404) or (empty($BUS380['nextDepartures']['data'][0]['lineDirection']))) {
                    echo 'Fin de service';
                }
                else {
                    echo ($BUS380['nextDepartures']['data'][0]['lineDirection']); 
                }
            ?>
            </div>
                <div class="tempsbus"><?php
                if ((($BUS380['nextDepartures']['statusCode']) != 404) or (!empty($BUS380['nextDepartures']['data'][0]['lineDirection']))) {
                    echo ($BUS380['nextDepartures']['data'][0]['time']);
                }
                else { echo '-';}
                ?></div>
                <div class="panel" id="bus"><?php
                if ((($BUS380['nextDepartures']['statusCode']) == 404) or (empty($BUS380['nextDepartures']['data'][1]['lineDirection']))) {
                    echo 'Fin de service';
                }
                else {
                    echo ($BUS380['nextDepartures']['data'][1]['lineDirection']); 
                }
            ?></div>
                <div class="tempsbus"><?php
                if ((($BUS380['nextDepartures']['statusCode']) != 404) or (!empty($BUS380['nextDepartures']['data'][1]['time']))) {
                    echo ($BUS380['nextDepartures']['data'][1]['time']);
                }
                else { echo '-';}
                ?></div>
            </div>
        </div>
        <p style="margin-left:33.5%">Prochains passages à l'arrêt "Auguste Delaune"</p>
    </div>
</div>

    <script type="text/javascript"> 
function display_ct() {
var x = new Date()
var x1=x.getMonth() + 1+ "/" + x.getDate() + "/" + x.getFullYear(); 
x1 = "<h3 class='time'>" + x.getHours( )+ ":" +  x.getMinutes() + '</h3>';
document.getElementById('ct').innerHTML = x1;
var refresh=1000; // Refresh rate in milli seconds
mytime=setTimeout('display_ct()',refresh)
display_c();
 }
</script>

</body>
<footer>
    <div class="infotrafic">

 
    

    <div class="vwrap"><div class="vmove">
  <div class="vslide">
    <p>
  <img src="img/m7.svg" id="indice_ligne">
        <?php

        if ((($trafic['allPerturbationsByLine'][20]['hasTrafficDisruptions']) == false))
            {
                echo 'Trafic fluide sur l\'ensemble de la ligne.' ;
            }
        elseif (($trafic['allPerturbationsByLine'][20]['hasTrafficDisruptions']) == true){
            echo ($trafic['allPerturbationsByLine'][20]['currentDisruptions'][0]['title']);
            }
        else {
            echo 'Problème lors de la réccupération des informations trafic.';
        }
        ?></p>
  </div>
  <div class="vslide">
    <p>
  <img src="img/t7.svg" id="indice_ligne">
        <?php

        if ((($trafic['allPerturbationsByLine'][20]['hasTrafficDisruptions']) == false))
            {
                echo 'Trafic fluide sur l\'ensemble de la ligne.' ;
            }
        elseif (($trafic['allPerturbationsByLine'][20]['hasTrafficDisruptions']) == true){
            echo ($trafic['allPerturbationsByLine'][20]['currentDisruptions'][0]['title']);
            }
        else {
            echo 'Problème lors de la réccupération des informations trafic.';
        }
        ?>
        </p>
  </div>
  <div class="vslide">
    <p>
  <img src="img/bus172.svg" id="indice_ligne">
        <?php

        if ((($trafic['allPerturbationsByLine'][20]['hasTrafficDisruptions']) == false))
            {
                echo 'Trafic fluide sur l\'ensemble de la ligne.' ;
            }
        elseif (($trafic['allPerturbationsByLine'][20]['hasTrafficDisruptions']) == true){
            echo ($trafic['allPerturbationsByLine'][20]['currentDisruptions'][0]['title']);
            }
        else {
            echo 'Problème lors de la réccupération des informations trafic.';
        }
        ?>
        </p>
  </div>
</div></div>



    



        
        <span style="vertical-align: middle;display: flex;align-items: center;" id='ct'></span>
    </div>
</footer>


<script>

</script>
</html>