<?php
include_once('classeEmpleat.php');
include_once('classeAssignacio.php');
include_once('Atraccions.php');
include_once('Empleats.php');

$as1 = new Assignacio($e1->getNom()." ".$e1->getCognom()." ".$e1->getCodiSS(),$a1->getNom(),$a1->getZona(),'2018-10-24');
$as2 = new Assignacio($e2->getNom()." ".$e2->getCognom()." ".$e2->getCodiSS(),$a1->getNom(),$a1->getZona(),'2018-09-15');
$as3 = new Assignacio($e3->getNom()." ".$e3->getCognom()." ".$e3->getCodiSS(),$a3->getNom(),$a3->getZona(),'2018-10-12');
$as4 = new Assignacio($e4->getNom()." ".$e4->getCognom()." ".$e4->getCodiSS(),$a2->getNom(),$a2->getZona(),'2018-09-12');

/*
$as1 = new Assignacio($e1->getNom(),$a1->getNom(),$a1->getZona(),'2018-10-24');
$as2 = new Assignacio('Pablo Hernandez 99982611R',$a1->getNom(),$a1->getZona(),'2018-09-15');
$as3 = new Assignacio('Pablo Picasso 41131877B','Tremor','China','2018-10-12');
$as4 = new Assignacio('Andres Villarejo 49083514L','Tsunami','Polynesia','2018-09-12');
*/
?>
