<?php


$url = "https://prim.iledefrance-mobilites.fr/marketplace/stop-monitoring?MonitoringRef=STIF%3AStopPoint%3AQ%3A22388%3A";
#$url = "https://prim.iledefrance-mobilites.fr/marketplace/general-message";

$curl = curl_init();
curl_setopt($curl, CURLOPT_URL, $url);
curl_setopt($curl, CURLOPT_POST, true);
curl_setopt($curl, CURLOPT_HTTPHEADER, array("Accept: application/json"),(
   "apiKey : vYQBGa822nCnWwQ84CnKFECbJlpGHPgq"
));
curl_setopt($curl, CURLOPT_POSTFIELDS, "POST DATA");
curl_setopt($curl, CURLOPT_RETURNTRANSFER, true);

$headers = array(
   "apiKey : vYQBGa822nCnWwQ84CnKFECbJlpGHPgq",
);

$resp = curl_exec($curl);
curl_close($curl);

echo $resp;


?>