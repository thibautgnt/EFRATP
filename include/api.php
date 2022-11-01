<?php



$url = 'https://api-iv.iledefrance-mobilites.fr/lines/v2/line:IDFM:C01377/stops/stop_area:IDFM:70143/realTime';
$data = file_get_contents($url); 
$M7 = json_decode($data,true);

$url2 = 'https://api-iv.iledefrance-mobilites.fr/lines/v2/line:IDFM:C01774/stops/stop_area:IDFM:70143/realTime';
$data2 = file_get_contents($url2); 
$T7 = json_decode($data2,true);

$url4 = 'https://api-iv.iledefrance-mobilites.fr/lines/v2/line:IDFM:C01193/stops/stop_area:IDFM:70140/realTime';
$data4 = file_get_contents($url4); 
$BUS172 = json_decode($data4,true);

$url5 = 'https://api-iv.iledefrance-mobilites.fr/lines/v2/line:IDFM:C01809/stops/stop_area:IDFM:70140/realTime';
$data5 = file_get_contents($url5); 
$BUS380 = json_decode($data5,true);

$url3 = 'https://www.transilien.com/api/traffic/infos';
$data3 = file_get_contents($url3); 
$trafic = json_decode($data3,true);


?>