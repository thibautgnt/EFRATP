<?php
include 'api.php';

$heure_actuelle = time();
$tempsactuel = time();

//PREMIER PASSAGE T7
if (isset($depart_T7['Siri']['ServiceDelivery']['StopMonitoringDelivery'][0]['MonitoredStopVisit'][0]['MonitoredVehicleJourney']['MonitoredCall']['ExpectedDepartureTime'])) {
    $tempsrestant = $depart_T7['Siri']['ServiceDelivery']['StopMonitoringDelivery'][0]['MonitoredStopVisit'][0]['MonitoredVehicleJourney']['MonitoredCall']['ExpectedDepartureTime'];
    $tempsrestant = new DateTime($tempsrestant, new DateTimeZone('UTC'));
    $tempsrestant->setTimezone(new DateTimeZone('Europe/Paris'));
    $tempsrestant = $tempsrestant->getTimestamp();
    $tempsrestant = $tempsrestant - $tempsactuel;
    $tempsrestant = ltrim(gmdate("i", $tempsrestant), '0');
    $depart = $depart_T7['Siri']['ServiceDelivery']['StopMonitoringDelivery'][0]['MonitoredStopVisit'][0]['MonitoredVehicleJourney']['MonitoredCall']['ExpectedDepartureTime'];
    $date = gmdate('Y-m-d\TH:i:s.v\Z');
    $diff = strtotime($depart) - strtotime($date);
    
    if ($diff <= 60) {
        $tempsrestant = '<p class="clignote">Départ</p>';
    }
    else {
        //Afficher le temps en minutes
        $tempsrestant;
    }
        

} else {
    $tempsrestant = '-';
}

//DEUXIEME PASSAGE T7
if (isset($depart_T7['Siri']['ServiceDelivery']['StopMonitoringDelivery'][0]['MonitoredStopVisit'][1]['MonitoredVehicleJourney']['MonitoredCall']['ExpectedDepartureTime'])) {
    $tempsrestant2 = $depart_T7['Siri']['ServiceDelivery']['StopMonitoringDelivery'][0]['MonitoredStopVisit'][1]['MonitoredVehicleJourney']['MonitoredCall']['ExpectedDepartureTime'];
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
            if ($depart_T7['Siri']['ServiceDelivery']['StopMonitoringDelivery'][0]['MonitoredStopVisit'][1]['MonitoredVehicleJourney']['MonitoredCall']['VehicleAtStop'] = "true") {
                $tempsrestant2 = "Départ";
            } 
            else {
                //rien
            }
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
$destination = $depart_T7['Siri']['ServiceDelivery']['StopMonitoringDelivery'][0]['MonitoredStopVisit'][0]['MonitoredVehicleJourney']['DestinationName'];
?>