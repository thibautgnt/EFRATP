<?php
// URL de l'API
$station = '29903';
$line = 'C01774';
$url = "https://prim.iledefrance-mobilites.fr/marketplace/stop-monitoring?MonitoringRef=STIF%3AStopPoint%3AQ%3A35946%3A&LineRef=STIF%3ALine%3A%3AC01774%3A";

// Header apiKey
$header = array(
    'apiKey: nM497S8rT4zfDgU0aAZBT5ItxRG3tFEN'
);

// Initialisation de la session cURL
$curl = curl_init($url);

// Configuration des options de cURL
curl_setopt($curl, CURLOPT_RETURNTRANSFER, true);
curl_setopt($curl, CURLOPT_HTTPHEADER, $header);

// Exécution de la requête cURL
$response = curl_exec($curl);

// Fermeture de la session cURL
curl_close($curl);

// Affichage de la réponse de l'API
//echo $response;


$api = json_decode($response,true);


?>