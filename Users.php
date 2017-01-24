<?php
require 'Client.php';

$client1 = new Client("01", "dupond@yahoo.fr", date("Ymd"));
$client2 = new Client("02", "dupuis@yahoo.fr", date("Ymd"));

//var_dump($client1);

$tabClients = [$client1, $client2] ;

return $tabClients; 


?>