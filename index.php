<!doctype html>

<html lang="fr">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content='width=device-width, initial-scale=1' />

  <title>EF'RATP</title>
  <meta name="description" content="EFR'ATP">
  <meta name="author" content="Thibaut GENET">
  <link rel="icon" href="img/danger.svg" type="image/svg+xml">

  <link rel="stylesheet" href="style.css">

<meta http-equiv="refresh" content="60" >

</head>
<body onload=display_ct();>
<?php include 'include/api.php';
include 'test/passages.php'; ?>

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
                    echo 'Fin / Pas de service';
                }
                else {
                    echo ($M7['nextDepartures']['data'][0]['lineDirection']); 
                }
            ?></p></div>
            </div>
            <div class="temps">
            <div class="panel"><p><?php
                if ((($M7['nextDepartures']['statusCode']) == 404) or (sizeof($M7['nextDepartures']['data']) < 1)) {
                    echo '-';
                }
                elseif (($M7['nextDepartures']['data'][0]['time']) == 0) {
                    echo '<p class="clignote">Départ</p>';
                }
                else {

                        echo ($M7['nextDepartures']['data'][0]['time']);
                    }
                
            ?></p></div>
                <div class="panel"><p>
                <?php
                if ((($M7['nextDepartures']['statusCode']) == 404) or (sizeof($M7['nextDepartures']['data']) < 2)) {
                    echo '-';
                }
                else {

                        echo ($M7['nextDepartures']['data'][1]['time']);
                    }
                
            ?>
            </p></div>
            </div>
            <div class="trafic">
                <?php
                    if (($M7['nextDepartures']['statusCode']) != 404) {
                        if (array_key_exists('metro', $trafic2)) {
                        if (array_key_exists(7, $trafic2['metro'])) {
                            if ($trafic2['metro'][7]['level'] == "alert") {
                                echo '<img src="img/retard.svg" class="status">';
                            }
                            elseif ($trafic2['metro'][7]['level'] == "critical") {
                                echo '<img src="img/danger.svg" class="status">';
                            }
                            else {echo '<img src="img/info.svg" class="status">';}
                        }
                        else {echo '<img src="img/ok.svg" class="status">';}
                    }
                    else {
                        echo '<img src="img/ok.svg" class="status">';
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
                
                echo $destination[0]['value'];

            ?></p></div>
            </div>
            <div class="temps">
                <div class="panel"><p><?php
                echo $tempsrestant[0];
                
            ?></p></div>
                <div class="panel"><p><?php 
                echo $tempsrestant[1];
                
            ?></p></div>
            </div>
            <div class="trafic">
            <?php
   
                        echo '<img src="img/ok.svg" class="status">';
                    
                ?>
            </div>
        </div>
    </div>


    <hr style="margin-top: 75px; margin-bottom:45px; border:0.1px solid #D9D9D9;">

    
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
                    echo 'Fin / Pas de service';
                }
                else {
                    echo ($BUS172['nextDepartures']['data'][0]['lineDirection']); 
                }
            ?>
            </div>
                <div class="tempsbus"><?php
                if ((($BUS172['nextDepartures']['statusCode']) != 404)) {
                    echo ($BUS172['nextDepartures']['data'][0]['time']);
                }
                else { echo '-';}
                ?></div>
                <div class="panel" id="bus"><?php
                if ((($BUS172['nextDepartures']['statusCode']) == 404) or (empty($BUS172['nextDepartures']['data'][1]['lineDirection']))) {
                    echo 'Fin / Pas de service';
                }
                else {
                    echo ($BUS172['nextDepartures']['data'][1]['lineDirection']); 
                }
            ?></div>
                <div class="tempsbus"><?php
                if ((($BUS172['nextDepartures']['statusCode']) == 404) or (sizeof($BUS172['nextDepartures']['data']) < 2)) {
                    echo '-';
                }
                else { 
                    
                    echo ($BUS172['nextDepartures']['data'][1]['time']);
                  }
                ?></div>
            </div>
        </div>
        <p style="margin-left:20.5%">Prochains passages à l'arrêt "Auguste Delaune"</p>
    </div>
    <div class="max-bus">
        <div class="bus" id="two">
            <div class="indicebus">
                <img src="img/bus380.svg" id="indice_bus">
            </div>
            <div class="left">
                <div class="panel" id="bus" style="margin-bottom: 10px;"><?php
                if ((($BUS380['nextDepartures']['statusCode']) == 404) or (empty($BUS380['nextDepartures']['data'][0]['lineDirection']))) {
                    echo 'Fin / Pas de service';
                }
                else {
                    echo ($BUS380['nextDepartures']['data'][0]['lineDirection']); 
                }
            ?>
            </div>
                <div class="tempsbus"><?php
                if ((($BUS380['nextDepartures']['statusCode']) != 404)) {
                    echo ($BUS380['nextDepartures']['data'][0]['time']);
                }
                else { echo '-';}
                ?></div>
                <div class="panel" id="bus"><?php
                if ((($BUS380['nextDepartures']['statusCode']) == 404) or (empty($BUS380['nextDepartures']['data'][1]['lineDirection']))) {
                    echo 'Fin / Pas de service';
                }
                else {
                    echo ($BUS380['nextDepartures']['data'][1]['lineDirection']); 
                }
            ?></div>
                <div class="tempsbus"><?php
                if ((($BUS380['nextDepartures']['statusCode']) == 404) or (sizeof($BUS380['nextDepartures']['data']) < 2)) {
                    echo '-';
                }
                else { 
                    
                    echo ($BUS380['nextDepartures']['data'][1]['time']);
                  }
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
  <img src="img/t7.svg" id="indice_ligne">
  <?php
        
                    echo "Trafic fluide sur l'ensemble de la ligne";

        ?>
        </p>
  </div>


  <div class="vslide">
    <p>
  <img src="img/m7.svg" id="indice_ligne">
        <?php
        if (($M7['nextDepartures']['statusCode']) != 404) 
            {
                if (array_key_exists('metro', $trafic2)) {
                if (array_key_exists(7, $trafic2['metro']))
                    {
                        echo ($trafic2['metro']['7']['message']);
                    }
                elseif (!array_key_exists(7, $trafic2['metro'])) {
                    echo "Trafic fluide sur l'ensemble de la ligne";
                }

                else {echo 'Problème lors de la réccupération des informations trafic / Fin de service.';}
            }
        
            else { echo "Trafic fluide sur l'ensemble de la ligne";}
        }
        else {
            echo 'Fin de service';
            }
    
        ?>
        </p>
  </div>

  <div class="vslide">
    <p>
  <img src="img/qr.svg" id="indice_ligne" style="width: 70px;">
        < Scannez le code pour avoir l'info trafic de toutes les lignes</p>
  </div>
  

</div></div>


        <span style="vertical-align: middle;display: flex;align-items: center;" id='ct'></span>
    </div>
</footer>

</html>