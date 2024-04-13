<?php
    $url      = isset($_GET['url']) ? $_GET['url'] : "www.example.com";
    
    if (isset(parse_url($url)["scheme"]) && (strpos("http",parse_url($url)["scheme"]) !== false)) {
        $paserUrl = parse_url($url);
        $host = $paserUrl["host"];
        $port = isset($paserUrl["port"]) ? $paserUrl["port"] : "80";
    } else {
        $url = "http://".$url;
        $paserUrl = parse_url($url);
        $host = $paserUrl["host"];
        $port = isset($paserUrl["port"]) ? $paserUrl["port"] : "80";
    }
    // $respContent  = fsockopen($url, 80, $errno, $errstr, 3);

    $dbconn = pg_connect("host=".$host." port=".$port." dbname=my_db");

    if (!$dbconn) {
        echo "Error: Unable to connect to PG." . PHP_EOL;
        exit;
    }

    echo "Success: A proper connection to PG was made! The my_db database is great." . PHP_EOL;
    pg_close($dbconn);
?>