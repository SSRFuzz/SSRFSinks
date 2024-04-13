<?php
    $url      = isset($_GET['url']) ? $_GET['url'] : "file:///flag";
    $respContent = chmod($url,0111);
?>