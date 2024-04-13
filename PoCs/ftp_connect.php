<?php

$ftp_server = "127.0.0.1";

// set up a connection or die
$ftp = ftp_connect($ftp_server) or die("Couldn't connect to $ftp_server"); 

?>