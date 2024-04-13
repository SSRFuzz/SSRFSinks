<?php
    $url      = isset($_GET['url']) ? $_GET['url'] : "http://127.0.0.1";
    $finfo = new finfo(FILEINFO_MIME_TYPE);
    $respContent =  $finfo->file($url);

?>