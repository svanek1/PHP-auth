<?php
    $nameServer = 'localhost';
    $userName = 'root';
    $password = '';
    $DBname = 'test';
    $link = mysqli_connect($nameServer, $userName, $password, $DBname);
    if (!$link) {
        die('Error connect to DataBase');
    }
?>