<?php
// URL de l'API
$station = '29903';
$line = 'C01774';
//Passages
$url1 = "https://prim.iledefrance-mobilites.fr/marketplace/stop-monitoring?MonitoringRef=STIF%3AStopPoint%3AQ%3A35946%3A&LineRef=STIF%3ALine%3A%3AC01774%3A";
//Trafic
$url2 = "https://prim.iledefrance-mobilites.fr/marketplace/general-message?LineRef=STIF%3ALine%3A%3AC01774%3A&InfoChannelRef=Perturbation";

// Header apiKey
$header = array(
    'apiKey: nM497S8rT4zfDgU0aAZBT5ItxRG3tFEN'
);

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
$api = json_decode($response1, true);


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


// Affichage des résultats
//var_dump($api);
//echo($response2);
?>
