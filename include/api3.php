<?php
    
    /* API URL */
    $url = 'https://prim.iledefrance-mobilites.fr/marketplace/general-message?StopPointRef=STIF%3AStopPoint%3AQ%3A22388%3A&InfoChannelRef=Commercial';
        
    /* Init cURL resource */
    $ch = curl_init($url);
        
    /* Array Parameter Data */
    $data = ['apiKey'=>'vYQBGa822nCnWwQ84CnKFECbJlpGHPgq'];
        
    /* pass encoded JSON string to the POST fields */
    curl_setopt($ch, CURLOPT_POSTFIELDS, $data);
        
    /* set the content type json */
    $headers = [];
    $headers[] = 'Content-Type:application/json';
    $token = "vYQBGa822nCnWwQ84CnKFECbJlpGHPgq";
    $headers[] = "Authorization: apiKey ".$token;
    curl_setopt($ch, CURLOPT_HTTPHEADER, $headers);
        
    /* set return type json */
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
        
    /* execute request */
    $result = curl_exec($ch);
         
    /* close cURL resource */
    curl_close($ch);

    echo $result;

  
?>