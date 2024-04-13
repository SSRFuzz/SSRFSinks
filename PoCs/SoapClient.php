<?php
    $url      = "http://127.0.0.1/flag";
    // $respContent = SoapClient($url);
    $a = new SoapClient(null,array('uri'=>'bbb', 'location'=>$url));
    $respContent =  $a->test();
?>