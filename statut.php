<!doctype html>

<?php 
$type = 'metro';
$ligne = '1';

$type = $_GET['type'];
$ligne = $_GET['ligne'];

?>

<html lang="fr">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content='width=device-width, initial-scale=1' />

  <title>EFR'ATP - Statut</title>
  <meta name="description" content="EFR'ATP">
  <meta name="author" content="Thibaut GENET">
  <link rel="icon" href="img/danger.svg" type="image/svg+xml">

  <link rel="stylesheet" href="more.css">

</head>
<?php include 'include/api.php' ?>

<header>
    <h1>Information trafic</h1>
    <p style="color: white; text-align: center;">Beta</p>

</header>


<body>
    <div class="container">
        <center><h2><img class="indice_statut" src="https://www.ratp.fr/sites/default/files/lines-assets/picto/<?php echo $type; ?>/symbole.1634824971.svg">&nbsp;
        <img class="indice_statut" src="https://www.ratp.fr/sites/default/files/lines-assets/picto/<?php echo $type; ?>/picto_<?php echo $type; ?>_ligne-<?php echo $ligne; ?>.1634824971.svg"></h2></center><hr>
        <br />        <?php   if (array_key_exists(strtoupper($ligne), $trafic2[$type])) {
                    if ($trafic2[$type][strtoupper($ligne)]['level'] == "alert") {echo '<img src="img/retard.svg" class="indice_statut">';}
                    elseif ($trafic2[$type][strtoupper($ligne)]['level'] == "critical") {echo '<img src="img/danger.svg" class="indice_statut">';}
                    else {echo '<img src="img/info.svg" class="indice_statut">';}}
                else {echo '<img src="img/ok.svg" class="indice_statut">';}?><h4 style="display:inline;">&nbsp;Information trafic de la ligne <?php echo strtoupper($ligne); ?> :</h4><br /><br />

        <p>
    
        <?php

                 if (array_key_exists(strtoupper($ligne), $trafic2[$type]))
                    {
                        if (str_starts_with(($trafic2[$type][strtoupper($ligne)]['message']), '<a href')) {
                        echo 'Plusieurs perturbations sont actuellement en cours sur cette ligne.<br /><br /><a target="_blank" href="https://www.ratp.fr/infos-trafic/',$type,'/',$ligne,'">Cliquez ici pour en savoir plus</a>
                        <br /><br />';
                            if (($trafic2[$type]) == 'metro') {
                                echo '<a class="twitter-timeline" data-lang="fr" data-height="600" href="https://twitter.com/Ligne',$ligne,'_RATP"></a> <script async src="https://platform.twitter.com/widgets.js" charset="utf-8"></script>';
                            }
                            else {
                                echo '<a class="twitter-timeline" data-lang="fr" data-height="600" href="https://twitter.com/',$type,'',$ligne,'_sncf"></a> <script async src="https://platform.twitter.com/widgets.js" charset="utf-8"></script>';
                            }
                    }
                        else {
                        echo ucfirst($trafic2[$type][strtoupper($ligne)]['message']);}
                    }
                elseif (!array_key_exists(strtoupper($ligne), $trafic2[$type])) {
                    echo "Trafic fluide sur l'ensemble de la ligne.";
                }
         
        ?>
    
    
            </p>

<div style="height:350px"></div>

<center>
<p>Application encore en version beta, des erreurs peuvent se glisser !</p>
<div style="height:20px"></div><a href="more.php"><button>Retour</button></a>

        </center>
    </div>
    
</body>

<footer>
    <p>Application créée par <a target="_blank" href="https://www.linkedin.com/in/thibautgenet/">Thibaut Genet</a> - Étudiant en Bachelor Cybersécurité</p>
</footer>

</html>