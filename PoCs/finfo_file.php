<?php
    $url      = isset($_GET['url']) ? $_GET['url'] : "http://127.0.0.1";
    $finfo = finfo_open(FILEINFO_MIME_TYPE);
    $respContent = finfo_file($finfo, $url);
    finfo_close($finfo);

?>