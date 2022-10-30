<?php

$station = 70143;

$url = 'https://api-iv.iledefrance-mobilites.fr/lines/v2/line:IDFM:C01377/stops/stop_area:IDFM:'.$station.'/realTime';
$data = file_get_contents($url); 
$M7 = json_decode($data,true);

$url2 = 'https://api-iv.iledefrance-mobilites.fr/lines/v2/line:IDFM:C01774/stops/stop_area:IDFM:'.$station.'/realTime';
$data2 = file_get_contents($url2); 
$T7 = json_decode($data2,true);

$url4 = 'https://api-iv.iledefrance-mobilites.fr/lines/v2/line:IDFM:C01193/stops/stop_area:IDFM:70143/realTime';
$data4 = file_get_contents($url4); 
$BUS172 = json_decode($data4,true);

$url3 = 'https://www.transilien.com/api/traffic/infos';
$data3 = file_get_contents($url3); 
$trafic = json_decode($data3,true);


$M7trafic = false;
$T7trafic = false;


//CHECK TRAFIC METRO 7
if (($trafic['allPerturbationsByLine'][20]['hasTrafficDisruptions']) == false)
{
    return $M7trafic = false;
}
else 
{
    return $M7trafic = ($trafic['allPerturbationsByLine'][20]['currentDisruptions'][0]['title']);
}



//CHECK TRAFIC TRAMWAY 7
if (($trafic['allPerturbationsByLine'][37]['hasTrafficDisruptions']) == false)
{
    return $T7trafic = false;
}
else {
return $T7trafic = ($trafic['allPerturbationsByLine'][37]['currentDisruptions'][0]['title']);
}


?>