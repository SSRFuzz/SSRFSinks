<?php
    $url      = isset($_GET['url']) ? $_GET['url'] : "uri:http://www.example.com";

    // $respContent = touch($url);
    // $dsn = 'uri:file:///flag';
    $dsn = $url;
    $user = 'dbuser';
    $password = 'dbpass';

    try {
        $dbh = new PDO($dsn, $user, $password);
    } catch (PDOException $e) {
        echo 'Connection failed: ' . $e->getMessage();
    }

?>