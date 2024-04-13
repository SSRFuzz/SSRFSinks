<?php
    $url      = isset($_GET['url']) ? $_GET['url'] : "http://127.0.0.1";
    $respContent = hash_file("md5", $url);

?>