<?php
    $host = 'us-cdbr-iron-east-05.cleardb.net'; //hostname
    $user = 'bbcfd3d4ec799a';
    $pw = '01334b68';
    $schema = 'heroku_771ebb9276e8c52'; //$$db

    $con = mysqli_connect($host, $user, $pw, $schema) or die('Falha ao conectar ao banco de dados');
?>
