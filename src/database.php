<?php
    $server = 'localhost';
    $database = 'church@sssp_database';
    $user = 'sspp';
    $password = 'Nairaclone@24680';
    $port = 3306;

    try {
        $conn = new mysqli($server, $user, $password, $database, $port);

        return $conn;
    } catch(Exception $e) {
        echo $e->getMessage();

        die();
    }