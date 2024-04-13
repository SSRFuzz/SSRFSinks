<?php
    $url      = isset($_GET['url']) ? $_GET['url'] : "http://127.0.0.1";
    $respContent = hash_update_file(hash_init("md5"), $url);

?>