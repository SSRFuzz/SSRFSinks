<?php
    $url      = isset($_GET['url']) ? $_GET['url'] : "file:///flag";
    $respContent = chgrp($url, 33);
    clearstatcache();
?>