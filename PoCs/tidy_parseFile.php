<?php
    $url      = isset($_GET['url']) ? $_GET['url'] : "http://127.0.0.1";
    $respContent = tidy_parse_file($url);

?>