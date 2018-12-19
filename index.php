<?php
include_once 'abstract/squid.conf.php';
echo "Project Squid Manager\n";

$squid = new Squid;
$squid->port = "3128";
$squid->start();

?>
