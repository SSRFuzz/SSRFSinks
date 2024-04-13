<?php
    $url      = "http://127.0.0.1";
    $doc = new DOMDocument();
    $doc->load($url);
    $respContent = $doc->saveXML();

?>