<?php
	include('classes/classeClient.php');
	$c1 = new Client();

	function llistarClient($c1) {
		echo "Has afegit el client: ".$c1->getNom()." ".$c1->getCognom()." ".$c1->getDescripcio()." ".$a1->getZona();
	}

	if(isset($_POST['save'])) {
		function crearAtraccio($a1) {
			$a1->setNom($_POST['nom']);
			$a1->setTipus($_POST['tipus']);
			$a1->setDescripcio($_POST['desc']);
			$a1->setZona($_POST['zona']);
			return $a1;
		}
		crearClient($c1);
		llistarClient($c1);
	}

	if(isset($_POST['edit'])) {
		function modClient() {
		}
		modAtracció();
	}

	if(isset($_POST['del'])) {
		function delClient() {
			echo "Has eliminat el client.";
		}
	}
?>
