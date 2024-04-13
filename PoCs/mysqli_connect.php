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

    $link = mysqli_connect($host.":".$port, "my_user", "my_password", "my_db");

    if (!$link) {
        echo "Error: Unable to connect to MySQL." . PHP_EOL;
        echo "Debugging errno: " . mysqli_connect_errno() . PHP_EOL;
        echo "Debugging error: " . mysqli_connect_error() . PHP_EOL;
        exit;
    }

    echo "Success: A proper connection to MySQL was made! The my_db database is great." . PHP_EOL;
    echo "Host information: " . mysqli_get_host_info($link) . PHP_EOL;

    mysqli_close($link);

?>