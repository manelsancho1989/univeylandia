<?php
include_once $_SERVER['DOCUMENT_ROOT']."/php/classes/class_client.php";

$client = new Client($_POST['email'],$_POST['password']);

$client->validarLogin();

 ?>
