<?php
    // $url = "http://127.0.0.1/flag";
    $url = "gopher://127.0.0.1:80/1/submit-data%09data-to-send%09";
    $ch = curl_init($url);
    curl_setopt($ch, CURLOPT_FOLLOWLOCATION, true);
    curl_setopt($ch, CURLOPT_NOSIGNAL, 1);
    curl_setopt($ch, CURLOPT_NOBODY, FALSE); 
    curl_setopt($ch, CURLOPT_TIMEOUT_MS, 200);
    $respContent = htmlentities(curl_exec($ch));
?>