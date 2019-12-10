<?php
    $host = 'us-cdbr-iron-east-05.cleardb.net'; //hostname
    $user = 'b0d57e78ea62bd';
    $pw = '2a531a87';
    $schema = 'heroku_c5d53fb1b6a3b70'; //$$db

    $con = mysqli_connect($host, $user, $pw, $schema) or die(mysqli_error($con));
?>
