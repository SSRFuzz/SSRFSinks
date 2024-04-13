<?php
    $url      = isset($_GET['url']) ? $_GET['url'] : "ftp://127.0.0.1:21/flag";
    $respContent = is_writable($url);
?>