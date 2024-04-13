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
    // $respContent  = fsockopen($url, 80, $errno, $errstr, 3);
    $port = "80";
    $fp = pfsockopen($host, $port, $errno, $errstr, 3);
    if (!$fp) {
        echo "$errstr ($errno)<br />\n";
    } else {
        $out = "GET / HTTP/1.1\r\n";
        $out .= "Host: www.example.com\r\n";
        $out .= "Connection: Close\r\n\r\n";
        fwrite($fp, $out);
        while (!feof($fp)) {
            echo fgets($fp, 128);
        }
        fclose($fp);
    }

?>