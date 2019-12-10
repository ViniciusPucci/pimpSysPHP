<?php
    $host = 'us-cdbr-iron-east-05.cleardb.net'; //hostname
    $user = 'bc1a6f613526a6';
    $pw = 'ef9f50d6';
    $schema = 'heroku_d912bf22704d176'; //$$db

    $con = mysqli_connect($host, $user, $pw, $schema) or die(mysqli_error($con));
?>
