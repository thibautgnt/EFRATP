<?php
include 'passages.php';

?>

<html>
    <head>
        <meta charset="utf-8">
        <title>Prochains passages</title>



    </head>
    <body>
        <h1>Destination : <?php echo $destination[0]['value']; ?></h1>
        <p id="temps">- <?php echo $tempsrestant[0]; ?></p>
        <p id="temps">- <?php echo $tempsrestant[1]; ?></p>
    </body>


</html>