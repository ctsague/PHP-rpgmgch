<?php
require 'Client.php';

$client1 = new Client("01", "tsaguey@yahoo.fr", date("Ymd"));

$client2 = new Client("02", "dupond@yahoo.fr", date("Ymd"));


$mesClients = [$client1, $client2] ;
return $mesClients;

//var_dump( $client1);
//var_dump( $client2);




?>