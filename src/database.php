<?php
    $server = '127.0.0.1';
    $database = 'church@sssp_database';
    $user = 'sspp';
    $password = '1234567890@asdfghjkl';
    $port = 3306;

    try {
        $conn = new mysqli($server, $user, $password, $database, $port);

        return $conn;
    } catch(Exception $e) {
        echo $e->getMessage();

        die();
    }