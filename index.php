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

  <meta http-equiv="refresh" content="60" >

</head>

<body>
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
            <h2>Status</h2>
        </div>
        <div class="line">
            <div class="ligne">
                <img src="img/m7_2.svg" id="indice_ligne">
            </div>
            <div class="destination">
                <div class="panel"><p><?php echo ($M7['nextDepartures']['data'][0]['lineDirection']); ?></p></div>
            </div>
            <div class="temps">
            <div class="panel"><p><?php echo ($M7['nextDepartures']['data'][0]['time']); ?></p></div>
                <div class="panel"><p><?php if (!empty($M7['nextDepartures']['data'][1]['time'])) { echo ($M7['nextDepartures']['data'][1]['time']);} else {echo '/';} ?></p></div>
            </div>
            <div class="trafic">
                <?php
                    if ($M7trafic == false) {
                        echo '<img src="img/ok.svg" class="status">';
                    }
                    else {
                        echo '<img src="img/retard.svg" class="status">';
                    }
                ?>
            </div>
        </div>
        <div class="line">
            <div class="ligne">
                <img src="img/t7_2.svg" id="indice_ligne">
            </div>
            <div class="destination">
                <div class="panel"><p><?php echo ($T7['nextDepartures']['data'][0]['lineDirection']); ?></p></div>
            </div>
            <div class="temps">
                <div class="panel"><p><?php echo ($T7['nextDepartures']['data'][0]['time']); ?></p></div>
                <div class="panel"><p><?php if (!empty($T7['nextDepartures']['data'][1]['time'])) { echo ($T7['nextDepartures']['data'][1]['time']);} else {echo '/';} ?></p></div>
            </div>
            <div class="trafic">
            <?php
                    if ($T7trafic == false) {
                        echo '<img src="img/ok.svg" class="status">';
                    }
                    else {
                        echo '<img src="img/retard.svg" class="status">';
                    }
                ?>
            </div>
        </div>
    </div>


    <hr style="margin-top: 55px; margin-bottom:-25px; border:0.1px solid #D9D9D9;">

    <div class="affichage">
        <div class="line">
                <div class="ligne">
                    <img src="img/bus172.svg" id="indice_bus">
                </div>
                <div class="destination">
                    <div class="panel" id="bus"><p><?php if (!empty($BUS172['nextDepartures']['data'][0]['lineDirection'])) { echo ($BUS172['nextDepartures']['data'][0]['lineDirection']);} else {echo '/';} ?></p></div><br /><br />
                    <div class="panel" id="bus"><p><?php if (!empty($BUS172['nextDepartures']['data'][1]['lineDirection'])) { echo ($BUS172['nextDepartures']['data'][1]['lineDirection']);} else {echo '/';} ?></p></div>
                </div>
                <div class="temps">
                    <div class="panel" id="bus"><p><?php if (!empty($BUS172['nextDepartures']['data'][0]['time'])) { echo ($BUS172['nextDepartures']['data'][0]['time']);} else {echo '/';} ?></p></div>
                    <div class="panel" id="bus"><p><?php if (!empty($BUS172['nextDepartures']['data'][2]['time'])) { echo ($BUS172['nextDepartures']['data'][2]['time']);} else {echo '/';} ?></p></div><br /><br />
                    <div class="panel" id="bus"><p><?php if (!empty($BUS172['nextDepartures']['data'][1]['time'])) { echo ($BUS172['nextDepartures']['data'][1]['time']);} else {echo '/';} ?></p></div>
                    <div class="panel" id="bus"><p><?php if (!empty($BUS172['nextDepartures']['data'][3]['time'])) { echo ($BUS172['nextDepartures']['data'][3]['time']);} else {echo '/';} ?></p></div>
                </div>
                
                <div class="trafic">
                    <img src="img/ok.svg" class="status" id="bus">
                </div>
            </div>
    </div>

</body>
<footer>
    <div class="infotrafic">
        <img src="img/m7.svg" id="indice_ligne">
        <p><?php

        if ($M7trafic == false)
            {
                echo 'Trafic fluide sur l\'ensemble de la ligne.';
            }
        else {
            echo $M7trafic;
            }

        ?></p>
    </div>
</footer>
</html>