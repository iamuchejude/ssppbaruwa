<?php
    $server = 'localhost';
    $database = 'chu#r@c@h#s$s@ps@ca&th(o#l#ic&af';
    $user = 'root';
    $password = '';
    $port = 3306;

    try {
        $conn = new mysqli($server, $user, $password, $database, $port);
        if(!$conn) {
            return $conn->connection_error;
        } else {
            return $conn;
        }
    } catch(Exception $e) {
        return $e->getMessage();
    }
    print_r($conn);