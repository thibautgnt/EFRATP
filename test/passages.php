<?php

$station = '29903';
include 'api.php';

$heure_actuelle = time();
$tempsactuel = time();

//PREMIER PASSAGE
if (isset($api['Siri']['ServiceDelivery']['StopMonitoringDelivery'][0]['MonitoredStopVisit'][0]['MonitoredVehicleJourney']['MonitoredCall']['ExpectedArrivalTime'])) {
    $tempsrestant = $api['Siri']['ServiceDelivery']['StopMonitoringDelivery'][0]['MonitoredStopVisit'][0]['MonitoredVehicleJourney']['MonitoredCall']['ExpectedArrivalTime'];
    $tempsrestant = new DateTime($tempsrestant, new DateTimeZone('UTC'));
    $tempsrestant->setTimezone(new DateTimeZone('Europe/Paris'));
    $tempsrestant = $tempsrestant->getTimestamp();
    $tempsrestant = $tempsrestant - $tempsactuel;

    //Afficher les minutes et les heures lorsque le temps est supérieur à 1 heure
    if ($tempsrestant > 3600) {
        $tempsrestant = ltrim(gmdate("g", $tempsrestant), '0') . 'h ' . gmdate("i", $tempsrestant);
    } else {
        if ($tempsrestant <= 1 or $tempsrestant == 0) {
            //Afficher si le tram est at stop
            if ($api['Siri']['ServiceDelivery']['StopMonitoringDelivery'][0]['MonitoredStopVisit'][0]['MonitoredVehicleJourney']['MonitoredCall']['VehicleAtStop'] = "true") {
                $tempsrestant = "À quai";
            } 
            else {
                //rien
            }
        }
        //Afficher "Proche" si le temps est inférieur à 2 minutes
        elseif ($tempsrestant <= 2) {
                $tempsrestant = "Proche";
        } 
        else {
            //Afficher le temps en minutes
            $tempsrestant = ltrim(gmdate("i", $tempsrestant), '0');
        }
        
    }
} else {
    $tempsrestant = '-';
}

//DEUXIEME PASSAGE
if (isset($api['Siri']['ServiceDelivery']['StopMonitoringDelivery'][0]['MonitoredStopVisit'][1]['MonitoredVehicleJourney']['MonitoredCall']['ExpectedArrivalTime'])) {
    $tempsrestant2 = $api['Siri']['ServiceDelivery']['StopMonitoringDelivery'][0]['MonitoredStopVisit'][1]['MonitoredVehicleJourney']['MonitoredCall']['ExpectedArrivalTime'];
    $tempsrestant2 = new DateTime($tempsrestant2, new DateTimeZone('UTC'));
    $tempsrestant2->setTimezone(new DateTimeZone('Europe/Paris'));
    $tempsrestant2 = $tempsrestant2->getTimestamp();
    $tempsrestant2 = $tempsrestant2 - $tempsactuel;

    //Afficher les minutes et les heures lorsque le temps est supérieur à 1 heure
    if ($tempsrestant2 > 3600) {
        $tempsrestant2 = ltrim(gmdate("g", $tempsrestant2), '0') . 'h ' . gmdate("i", $tempsrestant2);
    } else {
        if ($tempsrestant2 < 1) {
            //Afficher si le tram est at stop
            if ($api['Siri']['ServiceDelivery']['StopMonitoringDelivery'][0]['MonitoredStopVisit'][1]['MonitoredVehicleJourney']['MonitoredCall']['VehicleAtStop'] = "true") {
                $tempsrestant2 = "À quai";
            } 
            else {
                //rien
            }
        }
        elseif ($tempsrestant2 < 2) {
                $tempsrestant2 = "Proche";
        } 
        else {
            $tempsrestant2 = ltrim(gmdate("i", $tempsrestant2), '0');
        }
        
    }
} else {
    $tempsrestant2 = '-';
}


//Ajouter ces temps dans un tableau
$tempsrestant = array($tempsrestant, $tempsrestant2);

//afficher la destination
$destination = $api['Siri']['ServiceDelivery']['StopMonitoringDelivery'][0]['MonitoredStopVisit'][0]['MonitoredVehicleJourney']['DirectionName'];


?>