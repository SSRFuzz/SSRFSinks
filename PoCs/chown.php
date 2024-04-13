<?php
    $url      = isset($_GET['url']) ? $_GET['url'] : "file:///flag";
    $respContent = chown($url,"www-data");
?>