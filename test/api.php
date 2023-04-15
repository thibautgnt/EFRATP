<?php
// URL de l'API
$station = '29903';
$line = 'C01774';
//Passages T7
$url1 = "https://prim.iledefrance-mobilites.fr/marketplace/stop-monitoring?MonitoringRef=STIF%3AStopPoint%3AQ%3A35946%3A&LineRef=STIF%3ALine%3A%3AC01774%3A";
//Passages M7
$url3 = "https://prim.iledefrance-mobilites.fr/marketplace/stop-monitoring?MonitoringRef=STIF%3AStopPoint%3AQ%3A22400%3A&LineRef=STIF%3ALine%3A%3AC01377%3A";
//Trafic
$url2 = "https://prim.iledefrance-mobilites.fr/marketplace/general-message?LineRef=STIF%3ALine%3A%3AC01774%3A&InfoChannelRef=Perturbation";

// Header apiKey
$header = array(
    'apiKey: nM497S8rT4zfDgU0aAZBT5ItxRG3tFEN'
);

//--------------------------------------------------------------
//PASSAGES T7

// Initialisation de la session cURL pour la première URL
$curl1 = curl_init($url1);

// Configuration des options de cURL pour la première URL
curl_setopt($curl1, CURLOPT_RETURNTRANSFER, true);
curl_setopt($curl1, CURLOPT_HTTPHEADER, $header);

// Exécution de la requête cURL pour la première URL
$response1 = curl_exec($curl1);

// Fermeture de la session cURL pour la première URL
curl_close($curl1);

// Décodage de la réponse JSON pour la première URL
$depart_T7 = json_decode($response1, true);


//--------------------------------------------------------------
//TRAFFIC T7


// Initialisation de la session cURL pour la deuxième URL
$curl2 = curl_init($url2);

// Configuration des options de cURL pour la deuxième URL
curl_setopt($curl2, CURLOPT_RETURNTRANSFER, true);
curl_setopt($curl2, CURLOPT_HTTPHEADER, $header);

// Exécution de la requête cURL pour la deuxième URL
$response2 = curl_exec($curl2);

// Fermeture de la session cURL pour la deuxième URL
curl_close($curl2);

// Décodage de la réponse JSON pour la deuxième URL
$trafic = json_decode($response2, true);

?>
