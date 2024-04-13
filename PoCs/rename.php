<?php
    $url      = isset($_GET['url']) ? $_GET['url'] : "file:///flag";
    $respContent = rename($url,"/tmp/123");
?>