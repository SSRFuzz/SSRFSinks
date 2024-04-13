<?php
    $url      = isset($_GET['url']) ? $_GET['url'] : "127.0.0.1";
    
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

    $fp = stream_socket_client($host.":".$port);

    if (!$fp) {
        echo "$errstr ($errno)<br />\n";
    } else {
        fwrite($fp, "GET / HTTP/1.0\r\nHost: www.example.com\r\nAccept: */*\r\n\r\n");
        while (!feof($fp)) {
            echo fgets($fp, 1024);
        }
        fclose($fp);
    }

?>