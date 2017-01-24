<?php
require_once 'Cloth.php';
require_once 'Vegetable.php';

$legume1 = new Vegetable('01','Orange', '3€','France','20170130');
$legume2 = new Vegetable('02','Tomate','5€', 'Espagne', '20170128');

$cloth1 = new Cloth('10','Jupe','25€','ZARA');
$cloth2 = new Cloth('11','Robe','45€','ZARA');
$cloth3 = new Cloth('10','Pull','30€','ZARA');

//var_dump($cloth1);

$tabLegumeVtement = [
	$legume1,
	$legume2,
	$cloth1,
	$cloth2,
	$cloth3
];

return $tabLegumeVtement;



?>