<?php
    $host = 'us-cdbr-iron-east-05.cleardb.net'; //hostname
    $user = 'b3d4630c313aa3';
    $pw = 'e28fba69';
    $schema = 'heroku_771ebb9276e8c52'; //$$db

    $con = mysqli_connect($host, $user, $pw, $schema) or die(mysqli_error($con));
?>
