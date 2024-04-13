<?php
    $url      = isset($_GET['url']) ? $_GET['url'] : "file:///flag";
    $respContent = lchown($url,"www-data");
?>