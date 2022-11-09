<!doctype html>

<html lang="fr">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content='width=device-width, initial-scale=1' />

  <title>EFR'ATP</title>
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
        <center><p>Cliquer sur une ligne pour afficher son info trafic</p></center><br /><br />

        <h2><img class="indice" src="https://www.ratp.fr/sites/default/files/lines-assets/picto/metro/symbole.1634824971.svg">&nbsp; Métro</h2><hr>
        <a href="statut.php?type=metro&ligne=1"><img class="indiceligne" src="https://www.ratp.fr/sites/default/files/lines-assets/picto/metro/picto_metro_ligne-1.1634824971.svg"></a>
        <?php   if (array_key_exists(1, $trafic2['metro'])) {
                    if ($trafic2['metro'][1]['level'] == "alert") {echo '<img src="img/retard.svg" class="statut">';}
                    elseif ($trafic2['metro'][1]['level'] == "critical") {echo '<img src="img/danger.svg" class="statut">';}
                    else {echo '<img src="img/info.svg" class="statut">';}}
                else {echo '<img src="img/ok.svg" class="statut">';}?>
        <a href="statut.php?type=metro&ligne=2"><img class="indiceligne" src="https://www.ratp.fr/sites/default/files/lines-assets/picto/metro/picto_metro_ligne-2.1634824971.svg"></a>
        <?php   if (array_key_exists(2, $trafic2['metro'])) {
                    if ($trafic2['metro'][2]['level'] == "alert") {echo '<img src="img/retard.svg" class="statut">';}
                    elseif ($trafic2['metro'][2]['level'] == "critical") {echo '<img src="img/danger.svg" class="statut">';}
                    else {echo '<img src="img/info.svg" class="statut">';}}
                else {echo '<img src="img/ok.svg" class="statut">';}?>
        <a href="statut.php?type=metro&ligne=3"><img class="indiceligne" src="https://www.ratp.fr/sites/default/files/lines-assets/picto/metro/picto_metro_ligne-3.1634824971.svg"></a>
        <?php   if (array_key_exists(3, $trafic2['metro'])) {
                    if ($trafic2['metro'][3]['level'] == "alert") {echo '<img src="img/retard.svg" class="statut">';}
                    elseif ($trafic2['metro'][3]['level'] == "critical") {echo '<img src="img/danger.svg" class="statut">';}
                    else {echo '<img src="img/info.svg" class="statut">';}}
                else {echo '<img src="img/ok.svg" class="statut">';}?>
        <a href="statut.php?type=metro&ligne=3b"><img class="indiceligne" src="https://www.ratp.fr/sites/default/files/lines-assets/picto/metro/picto_metro_ligne-3b.1634824971.svg"></a>
        <?php   if (array_key_exists('3b', $trafic2['metro'])) {
                    if ($trafic2['metro']['3b']['level'] == "alert") {echo '<img src="img/retard.svg" class="statut">';}
                    elseif ($trafic2['metro']['3b']['level'] == "critical") {echo '<img src="img/danger.svg" class="statut">';}
                    else {echo '<img src="img/info.svg" class="statut">';}}
                else {echo '<img src="img/ok.svg" class="statut">';}?>
        <a href="statut.php?type=metro&ligne=4"><img class="indiceligne" src="https://www.ratp.fr/sites/default/files/lines-assets/picto/metro/picto_metro_ligne-4.1634824971.svg"></a>
        <?php   if (array_key_exists(4, $trafic2['metro'])) {
                    if ($trafic2['metro'][4]['level'] == "alert") {echo '<img src="img/retard.svg" class="statut">';}
                    elseif ($trafic2['metro'][4]['level'] == "critical") {echo '<img src="img/danger.svg" class="statut">';}
                    else {echo '<img src="img/info.svg" class="statut">';}}
                else {echo '<img src="img/ok.svg" class="statut">';}?>
        <a href="statut.php?type=metro&ligne=5"><img class="indiceligne" src="https://www.ratp.fr/sites/default/files/lines-assets/picto/metro/picto_metro_ligne-5.1634824971.svg"></a>
        <?php   if (array_key_exists(5, $trafic2['metro'])) {
                    if ($trafic2['metro'][5]['level'] == "alert") {echo '<img src="img/retard.svg" class="statut">';}
                    elseif ($trafic2['metro'][5]['level'] == "critical") {echo '<img src="img/danger.svg" class="statut">';}
                    else {echo '<img src="img/info.svg" class="statut">';}}
                else {echo '<img src="img/ok.svg" class="statut">';}?><br />
        <a href="statut.php?type=metro&ligne=6"><img class="indiceligne" src="https://www.ratp.fr/sites/default/files/lines-assets/picto/metro/picto_metro_ligne-6.1634824971.svg"></a>
        <?php   if (array_key_exists(6, $trafic2['metro'])) {
                    if ($trafic2['metro'][6]['level'] == "alert") {echo '<img src="img/retard.svg" class="statut">';}
                    elseif ($trafic2['metro'][6]['level'] == "critical") {echo '<img src="img/danger.svg" class="statut">';}
                    else {echo '<img src="img/info.svg" class="statut">';}}
                else {echo '<img src="img/ok.svg" class="statut">';}?>
        <a href="statut.php?type=metro&ligne=7"><img class="indiceligne" src="https://www.ratp.fr/sites/default/files/lines-assets/picto/metro/picto_metro_ligne-7.1634824971.svg"></a>
        <?php   if (array_key_exists(7, $trafic2['metro'])) {
                    if ($trafic2['metro'][7]['level'] == "alert") {echo '<img src="img/retard.svg" class="statut">';}
                    elseif ($trafic2['metro'][7]['level'] == "critical") {echo '<img src="img/danger.svg" class="statut">';}
                    else {echo '<img src="img/info.svg" class="statut">';}}
                else {echo '<img src="img/ok.svg" class="statut">';}?>
        <a href="statut.php?type=metro&ligne=7b"><img class="indiceligne" src="https://www.ratp.fr/sites/default/files/lines-assets/picto/metro/picto_metro_ligne-7b.1634824971.svg"></a> 
        <?php   if (array_key_exists('7b', $trafic2['metro'])) {
                    if ($trafic2['metro']['7b']['level'] == "alert") {echo '<img src="img/retard.svg" class="statut">';}
                    elseif ($trafic2['metro']['7b']['level'] == "critical") {echo '<img src="img/danger.svg" class="statut">';}
                    else {echo '<img src="img/info.svg" class="statut">';}}
                else {echo '<img src="img/ok.svg" class="statut">';}?> 
        <a href="statut.php?type=metro&ligne=8"><img class="indiceligne" src="https://www.ratp.fr/sites/default/files/lines-assets/picto/metro/picto_metro_ligne-8.1634824971.svg"></a>  
        <?php   if (array_key_exists(8, $trafic2['metro'])) {
                    if ($trafic2['metro'][8]['level'] == "alert") {echo '<img src="img/retard.svg" class="statut">';}
                    elseif ($trafic2['metro'][8]['level'] == "critical") {echo '<img src="img/danger.svg" class="statut">';}
                    else {echo '<img src="img/info.svg" class="statut">';}}
                else {echo '<img src="img/ok.svg" class="statut">';}?>
        <a href="statut.php?type=metro&ligne=9"><img class="indiceligne" src="https://www.ratp.fr/sites/default/files/lines-assets/picto/metro/picto_metro_ligne-9.1634824971.svg"></a>
        <?php   if (array_key_exists(9, $trafic2['metro'])) {
                    if ($trafic2['metro'][9]['level'] == "alert") {echo '<img src="img/retard.svg" class="statut">';}
                    elseif ($trafic2['metro'][9]['level'] == "critical") {echo '<img src="img/danger.svg" class="statut">';}
                    else {echo '<img src="img/info.svg" class="statut">';}}
                else {echo '<img src="img/ok.svg" class="statut">';}?>
        <a href="statut.php?type=metro&ligne=10"><img class="indiceligne" src="https://www.ratp.fr/sites/default/files/lines-assets/picto/metro/picto_metro_ligne-10.1634824971.svg"></a>
        <?php   if (array_key_exists(10, $trafic2['metro'])) {
                    if ($trafic2['metro'][10]['level'] == "alert") {echo '<img src="img/retard.svg" class="statut">';}
                    elseif ($trafic2['metro'][10]['level'] == "critical") {echo '<img src="img/danger.svg" class="statut">';}
                    else {echo '<img src="img/info.svg" class="statut">';}}
                else {echo '<img src="img/ok.svg" class="statut">';}?> <br />
        <a href="statut.php?type=metro&ligne=11"><img class="indiceligne" src="https://www.ratp.fr/sites/default/files/lines-assets/picto/metro/picto_metro_ligne-11.1634824971.svg"></a> 
        <?php   if (array_key_exists(11, $trafic2['metro'])) {
                    if ($trafic2['metro'][11]['level'] == "alert") {echo '<img src="img/retard.svg" class="statut">';}
                    elseif ($trafic2['metro'][11]['level'] == "critical") {echo '<img src="img/danger.svg" class="statut">';}
                    else {echo '<img src="img/info.svg" class="statut">';}}
                else {echo '<img src="img/ok.svg" class="statut">';}?>
        <a href="statut.php?type=metro&ligne=12"><img class="indiceligne" src="https://www.ratp.fr/sites/default/files/lines-assets/picto/metro/picto_metro_ligne-12.1634824971.svg"></a>
        <?php   if (array_key_exists(12, $trafic2['metro'])) {
                    if ($trafic2['metro'][12]['level'] == "alert") {echo '<img src="img/retard.svg" class="statut">';}
                    elseif ($trafic2['metro'][12]['level'] == "critical") {echo '<img src="img/danger.svg" class="statut">';}
                    else {echo '<img src="img/info.svg" class="statut">';}}
                else {echo '<img src="img/ok.svg" class="statut">';}?>
        <a href="statut.php?type=metro&ligne=13"><img class="indiceligne" src="https://www.ratp.fr/sites/default/files/lines-assets/picto/metro/picto_metro_ligne-13.1634824971.svg"></a>
        <?php   if (array_key_exists(13, $trafic2['metro'])) {
                    if ($trafic2['metro'][13]['level'] == "alert") {echo '<img src="img/retard.svg" class="statut">';}
                    elseif ($trafic2['metro'][13]['level'] == "critical") {echo '<img src="img/danger.svg" class="statut">';}
                    else {echo '<img src="img/info.svg" class="statut">';}}
                else {echo '<img src="img/ok.svg" class="statut">';}?>
        <a href="statut.php?type=metro&ligne=14"><img class="indiceligne" src="https://www.ratp.fr/sites/default/files/lines-assets/picto/metro/picto_metro_ligne-14.1634824971.svg"></a>
        <?php   if (array_key_exists(14, $trafic2['metro'])) {
                    if ($trafic2['metro'][14]['level'] == "alert") {echo '<img src="img/retard.svg" class="statut">';}
                    elseif ($trafic2['metro'][14]['level'] == "critical") {echo '<img src="img/danger.svg" class="statut">';}
                    else {echo '<img src="img/info.svg" class="statut">';}}
                else {echo '<img src="img/ok.svg" class="statut">';}?>

            


        <br /><br /><br /><h2><img class="indice" src="https://www.ratp.fr/sites/default/files/lines-assets/picto/rer/symbole.1634824971.svg">&nbsp; RER</h2><hr>
        <a href="statut.php?type=rer&ligne=a"><img class="indiceligne" src="https://www.ratp.fr/sites/default/files/lines-assets/picto/rer/picto_rer_ligne-a.1634824971.svg"></a>
        <?php   if (array_key_exists('A', $trafic2['rer'])) {
                    if ($trafic2['rer']['A']['level'] == "alert") {echo '<img src="img/retard.svg" class="statut">';}
                    elseif ($trafic2['rer']['A']['level'] == "critical") {echo '<img src="img/danger.svg" class="statut">';}
                    else {echo '<img src="img/info.svg" class="statut">';}}
                else {echo '<img src="img/ok.svg" class="statut">';}?>
        <a href="statut.php?type=rer&ligne=b"><img class="indiceligne" src="https://www.ratp.fr/sites/default/files/lines-assets/picto/rer/picto_rer_ligne-b.1634824971.svg"></a> 
        <?php   if (array_key_exists('B', $trafic2['rer'])) {
                    if ($trafic2['rer']['B']['level'] == "alert") {echo '<img src="img/retard.svg" class="statut">';}
                    elseif ($trafic2['rer']['B']['level'] == "critical") {echo '<img src="img/danger.svg" class="statut">';}
                    else {echo '<img src="img/info.svg" class="statut">';}}
                else {echo '<img src="img/ok.svg" class="statut">';}?>
        <a href="statut.php?type=rer&ligne=c"><img class="indiceligne" src="https://www.ratp.fr/sites/default/files/lines-assets/picto/rer/picto_rer_ligne-c.1634824971.svg"></a>
        <?php   if (array_key_exists('C', $trafic2['rer'])) {
                    if ($trafic2['rer']['C']['level'] == "alert") {echo '<img src="img/retard.svg" class="statut">';}
                    elseif ($trafic2['rer']['C']['level'] == "critical") {echo '<img src="img/danger.svg" class="statut">';}
                    else {echo '<img src="img/info.svg" class="statut">';}}
                else {echo '<img src="img/ok.svg" class="statut">';}?>  
        <a href="statut.php?type=rer&ligne=d"><img class="indiceligne" src="https://www.ratp.fr/sites/default/files/lines-assets/picto/rer/picto_rer_ligne-d.1634824971.svg"></a>
        <?php   if (array_key_exists('D', $trafic2['rer'])) {
                    if ($trafic2['rer']['D']['level'] == "alert") {echo '<img src="img/retard.svg" class="statut">';}
                    elseif ($trafic2['rer']['D']['level'] == "critical") {echo '<img src="img/danger.svg" class="statut">';}
                    else {echo '<img src="img/info.svg" class="statut">';}}
                else {echo '<img src="img/ok.svg" class="statut">';}?>
        <a href="statut.php?type=rer&ligne=e"><img class="indiceligne" src="https://www.ratp.fr/sites/default/files/lines-assets/picto/rer/picto_rer_ligne-e.1634824971.svg"></a>
        <?php   if (array_key_exists('E', $trafic2['rer'])) {
                    if ($trafic2['rer']['E']['level'] == "alert") {echo '<img src="img/retard.svg" class="statut">';}
                    elseif ($trafic2['rer']['E']['level'] == "critical") {echo '<img src="img/danger.svg" class="statut">';}
                    else {echo '<img src="img/info.svg" class="statut">';}}
                else {echo '<img src="img/ok.svg" class="statut">';}?>


        <br /><br /><br /><h2><img class="indice" src="https://www.ratp.fr/sites/default/files/lines-assets/picto/sncf/symbole.1634824971.svg">&nbsp; Transilien</h2><hr>
        <a href="statut.php?type=sncf&ligne=h"><img class="indiceligne" src="https://www.ratp.fr/sites/default/files/lines-assets/picto/sncf/picto_sncf_ligne-h.1634824971.svg"></a>
        <?php   if (array_key_exists('H', $trafic2['sncf'])) {
                    if ($trafic2['sncf']['H']['level'] == "alert") {echo '<img src="img/retard.svg" class="statut">';}
                    elseif ($trafic2['sncf']['H']['level'] == "critical") {echo '<img src="img/danger.svg" class="statut">';}
                    else {echo '<img src="img/info.svg" class="statut">';}}
                else {echo '<img src="img/ok.svg" class="statut">';}?> 
        <a href="statut.php?type=sncf&ligne=j"><img class="indiceligne" src="https://www.ratp.fr/sites/default/files/lines-assets/picto/sncf/picto_sncf_ligne-j.1634824971.svg"></a>
        <?php   if (array_key_exists('J', $trafic2['sncf'])) {
                    if ($trafic2['sncf']['J']['level'] == "alert") {echo '<img src="img/retard.svg" class="statut">';}
                    elseif ($trafic2['sncf']['J']['level'] == "critical") {echo '<img src="img/danger.svg" class="statut">';}
                    else {echo '<img src="img/info.svg" class="statut">';}}
                else {echo '<img src="img/ok.svg" class="statut">';}?> 
        <a href="statut.php?type=sncf&ligne=k"><img class="indiceligne" src="https://www.ratp.fr/sites/default/files/lines-assets/picto/sncf/picto_sncf_ligne-k.1634824971.svg"></a>
        <?php   if (array_key_exists('K', $trafic2['sncf'])) {
                    if ($trafic2['sncf']['K']['level'] == "alert") {echo '<img src="img/retard.svg" class="statut">';}
                    elseif ($trafic2['sncf']['K']['level'] == "critical") {echo '<img src="img/danger.svg" class="statut">';}
                    else {echo '<img src="img/info.svg" class="statut">';}}
                else {echo '<img src="img/ok.svg" class="statut">';}?> 
        <a href="statut.php?type=sncf&ligne=l"><img class="indiceligne" src="https://www.ratp.fr/sites/default/files/lines-assets/picto/sncf/picto_sncf_ligne-l.1634824971.svg"></a>
        <?php   if (array_key_exists('L', $trafic2['sncf'])) {
                    if ($trafic2['sncf']['L']['level'] == "alert") {echo '<img src="img/retard.svg" class="statut">';}
                    elseif ($trafic2['sncf']['L']['level'] == "critical") {echo '<img src="img/danger.svg" class="statut">';}
                    else {echo '<img src="img/info.svg" class="statut">';}}
                else {echo '<img src="img/ok.svg" class="statut">';}?>  
        <a href="statut.php?type=sncf&ligne=n"><img class="indiceligne" src="https://www.ratp.fr/sites/default/files/lines-assets/picto/sncf/picto_sncf_ligne-n.1634824971.svg"></a> 
        <?php   if (array_key_exists('N', $trafic2['sncf'])) {
                    if ($trafic2['sncf']['N']['level'] == "alert") {echo '<img src="img/retard.svg" class="statut">';}
                    elseif ($trafic2['sncf']['N']['level'] == "critical") {echo '<img src="img/danger.svg" class="statut">';}
                    else {echo '<img src="img/info.svg" class="statut">';}}
                else {echo '<img src="img/ok.svg" class="statut">';}?>  
        <a href="statut.php?type=sncf&ligne=p"><img class="indiceligne" src="https://www.ratp.fr/sites/default/files/lines-assets/picto/sncf/picto_sncf_ligne-p.1634824971.svg"></a> 
        <?php   if (array_key_exists('P', $trafic2['sncf'])) {
                    if ($trafic2['sncf']['P']['level'] == "alert") {echo '<img src="img/retard.svg" class="statut">';}
                    elseif ($trafic2['sncf']['P']['level'] == "critical") {echo '<img src="img/danger.svg" class="statut">';}
                    else {echo '<img src="img/info.svg" class="statut">';}}
                else {echo '<img src="img/ok.svg" class="statut">';}?> <br />
        <a href="statut.php?type=sncf&ligne=r"><img class="indiceligne" src="https://www.ratp.fr/sites/default/files/lines-assets/picto/sncf/picto_sncf_ligne-r.1634824971.svg"></a>       
        <?php   if (array_key_exists('R', $trafic2['sncf'])) {
                    if ($trafic2['sncf']['R']['level'] == "alert") {echo '<img src="img/retard.svg" class="statut">';}
                    elseif ($trafic2['sncf']['R']['level'] == "critical") {echo '<img src="img/danger.svg" class="statut">';}
                    else {echo '<img src="img/info.svg" class="statut">';}}
                else {echo '<img src="img/ok.svg" class="statut">';}?> 
        <a href="statut.php?type=sncf&ligne=u"><img class="indiceligne" src="https://www.ratp.fr/sites/default/files/lines-assets/picto/sncf/picto_sncf_ligne-u.1634824971.svg"></a>
        <?php   if (array_key_exists('U', $trafic2['sncf'])) {
                    if ($trafic2['sncf']['U']['level'] == "alert") {echo '<img src="img/retard.svg" class="statut">';}
                    elseif ($trafic2['sncf']['U']['level'] == "critical") {echo '<img src="img/danger.svg" class="statut">';}
                    else {echo '<img src="img/info.svg" class="statut">';}}
                else {echo '<img src="img/ok.svg" class="statut">';}?>   




        <br /><br /><br /><h2><img class="indice" src="https://www.ratp.fr/sites/default/files/lines-assets/picto/tram/symbole.1634824971.svg">&nbsp; Tramway</h2><hr>
        <a href="statut.php?type=tram&ligne=t1"><img class="indiceligne" src="https://www.ratp.fr/sites/default/files/lines-assets/picto/tram/picto_tram_ligne-t1.1634824971.svg"></a>
        <?php   if (array_key_exists('T1', $trafic2['tram'])) {
                    if ($trafic2['tram']['T1']['level'] == "alert") {echo '<img src="img/retard.svg" class="statut">';}
                    elseif ($trafic2['tram']['T1']['level'] == "critical") {echo '<img src="img/danger.svg" class="statut">';}
                    else {echo '<img src="img/info.svg" class="statut">';}}
                else {echo '<img src="img/ok.svg" class="statut">';}?>
        <a href="statut.php?type=tram&ligne=t2"><img class="indiceligne" src="https://www.ratp.fr/sites/default/files/lines-assets/picto/tram/picto_tram_ligne-t2.1634824971.svg"></a>
        <?php   if (array_key_exists('T2', $trafic2['tram'])) {
                    if ($trafic2['tram']['T2']['level'] == "alert") {echo '<img src="img/retard.svg" class="statut">';}
                    elseif ($trafic2['tram']['T2']['level'] == "critical") {echo '<img src="img/danger.svg" class="statut">';}
                    else {echo '<img src="img/info.svg" class="statut">';}}
                else {echo '<img src="img/ok.svg" class="statut">';}?>
        <a href="statut.php?type=tram&ligne=t3a"><img class="indiceligne" src="https://www.ratp.fr/sites/default/files/lines-assets/picto/tram/picto_tram_ligne-t3a.1634824971.svg"></a>
        <?php   if (array_key_exists('T3a', $trafic2['tram'])) {
                    if ($trafic2['tram']['T3a']['level'] == "alert") {echo '<img src="img/retard.svg" class="statut">';}
                    elseif ($trafic2['tram']['T3a']['level'] == "critical") {echo '<img src="img/danger.svg" class="statut">';}
                    else {echo '<img src="img/info.svg" class="statut">';}}
                else {echo '<img src="img/ok.svg" class="statut">';}?>
        <a href="statut.php?type=tram&ligne=t3b"><img class="indiceligne" src="https://www.ratp.fr/sites/default/files/lines-assets/picto/tram/picto_tram_ligne-t3b.1634824971.svg"></a>
        <?php   if (array_key_exists('T3b', $trafic2['tram'])) {
                    if ($trafic2['tram']['T3b']['level'] == "alert") {echo '<img src="img/retard.svg" class="statut">';}
                    elseif ($trafic2['tram']['T3b']['level'] == "critical") {echo '<img src="img/danger.svg" class="statut">';}
                    else {echo '<img src="img/info.svg" class="statut">';}}
                else {echo '<img src="img/ok.svg" class="statut">';}?>
        <a href="statut.php?type=tram&ligne=t4"><img class="indiceligne" src="https://www.ratp.fr/sites/default/files/lines-assets/picto/tram/picto_tram_ligne-t4.1634824971.svg"></a>
        <?php   if (array_key_exists('T4', $trafic2['tram'])) {
                    if ($trafic2['tram']['T4']['level'] == "alert") {echo '<img src="img/retard.svg" class="statut">';}
                    elseif ($trafic2['tram']['T4']['level'] == "critical") {echo '<img src="img/danger.svg" class="statut">';}
                    else {echo '<img src="img/info.svg" class="statut">';}}
                else {echo '<img src="img/ok.svg" class="statut">';}?>
        <a href="statut.php?type=tram&ligne=t5"><img class="indiceligne" src="https://www.ratp.fr/sites/default/files/lines-assets/picto/tram/picto_tram_ligne-t5.1634824971.svg"></a>
        <?php   if (array_key_exists('T5', $trafic2['tram'])) {
                    if ($trafic2['tram']['T5']['level'] == "alert") {echo '<img src="img/retard.svg" class="statut">';}
                    elseif ($trafic2['tram']['T5']['level'] == "critical") {echo '<img src="img/danger.svg" class="statut">';}
                    else {echo '<img src="img/info.svg" class="statut">';}}
                else {echo '<img src="img/ok.svg" class="statut">';}?><br />
        <a href="statut.php?type=tram&ligne=t6"><img class="indiceligne" src="https://www.ratp.fr/sites/default/files/lines-assets/picto/tram/picto_tram_ligne-t6.1634824971.svg"></a>
        <?php   if (array_key_exists('T6', $trafic2['tram'])) {
                    if ($trafic2['tram']['T6']['level'] == "alert") {echo '<img src="img/retard.svg" class="statut">';}
                    elseif ($trafic2['tram']['T6']['level'] == "critical") {echo '<img src="img/danger.svg" class="statut">';}
                    else {echo '<img src="img/info.svg" class="statut">';}}
                else {echo '<img src="img/ok.svg" class="statut">';}?>
        <a href="statut.php?type=tram&ligne=t7"><img class="indiceligne" src="https://www.ratp.fr/sites/default/files/lines-assets/picto/tram/picto_tram_ligne-t7.1634824971.svg"></a>
        <?php   if (array_key_exists('T7', $trafic2['tram'])) {
                    if ($trafic2['tram']['T7']['level'] == "alert") {echo '<img src="img/retard.svg" class="statut">';}
                    elseif ($trafic2['tram']['T7']['level'] == "critical") {echo '<img src="img/danger.svg" class="statut">';}
                    else {echo '<img src="img/info.svg" class="statut">';}}
                else {echo '<img src="img/ok.svg" class="statut">';}?>
        <a href="statut.php?type=tram&ligne=t8"><img class="indiceligne" src="https://www.ratp.fr/sites/default/files/lines-assets/picto/tram/picto_tram_ligne-t8.1634824971.svg"></a>
        <?php   if (array_key_exists('T8', $trafic2['tram'])) {
                    if ($trafic2['tram']['T8']['level'] == "alert") {echo '<img src="img/retard.svg" class="statut">';}
                    elseif ($trafic2['tram']['T8']['level'] == "critical") {echo '<img src="img/danger.svg" class="statut">';}
                    else {echo '<img src="img/info.svg" class="statut">';}}
                else {echo '<img src="img/ok.svg" class="statut">';}?>
        <a href="statut.php?type=tram&ligne=t9"><img class="indiceligne" src="https://www.ratp.fr/sites/default/files/lines-assets/picto/tram/picto_tram_ligne-t9.1634824971.svg"></a>
        <?php   if (array_key_exists('T9', $trafic2['tram'])) {
                    if ($trafic2['tram']['T9']['level'] == "alert") {echo '<img src="img/retard.svg" class="statut">';}
                    elseif ($trafic2['tram']['T9']['level'] == "critical") {echo '<img src="img/danger.svg" class="statut">';}
                    else {echo '<img src="img/info.svg" class="statut">';}}
                else {echo '<img src="img/ok.svg" class="statut">';}?>
        <a href="statut.php?type=tram&ligne=t11"><img class="indiceligne" src="https://www.ratp.fr/sites/default/files/lines-assets/picto/tram/picto_tram_ligne-t11.1634824971.svg"></a>
        <?php   if (array_key_exists('T11', $trafic2['tram'])) {
                    if ($trafic2['tram']['T11']['level'] == "alert") {echo '<img src="img/retard.svg" class="statut">';}
                    elseif ($trafic2['tram']['T11']['level'] == "critical") {echo '<img src="img/danger.svg" class="statut">';}
                    else {echo '<img src="img/info.svg" class="statut">';}}
                else {echo '<img src="img/ok.svg" class="statut">';}?>
        <a href="statut.php?type=tram&ligne=t13"><img class="indiceligne" src="https://www.ratp.fr/sites/default/files/lines-assets/picto/tram/picto_tram_ligne-t13.1634824971.svg"></a>
        <?php   if (array_key_exists('T13', $trafic2['tram'])) {
                    if ($trafic2['tram']['T13']['level'] == "alert") {echo '<img src="img/retard.svg" class="statut">';}
                    elseif ($trafic2['tram']['T13']['level'] == "critical") {echo '<img src="img/danger.svg" class="statut">';}
                    else {echo '<img src="img/info.svg" class="statut">';}}
                else {echo '<img src="img/ok.svg" class="statut">';}?>
        
        



    </div>
</body>

<footer>
    <p>Application créée par <a target="_blank" href="https://www.linkedin.com/in/thibautgenet/">Thibaut Genet</a> - Étudiant en Bachelor Cybersécurité</p>
</footer>

</html>