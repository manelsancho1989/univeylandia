<?php
include('classes/classeAtraccions.php');
$a1 = new Atraccio();

	function llistarAtraccio($a1) {
		echo "Has afegit l'atracció: ".$a1->getNom()." ".$a1->getTipus()." ".$a1->getDescripcio()." ".$a1->getZona();
	}

	if(isset($_POST['save'])) {
		function crearAtraccio($a1) {
			$a1->setNom($_POST['nom']);
			$a1->setTipus($_POST['tipus']);
			$a1->setDescripcio($_POST['desc']);
			$a1->setZona($_POST['zona']);
			return $a1;
		}
		crearAtraccio($a1);
		llistarAtraccio($a1);
	}

	/* FUNCIONA
	if(isset($_POST['save'])) {
		$a1 = new Atraccio($_POST['nom'],$_POST['tipus'],$_POST['desc'],$_POST['zona']);
		echo $a1->getNom();
	}
	*/

	if(isset($_POST['edit'])) {
		function modAtraccio() {
		}
		modAtracció();
	}

	if(isset($_POST['del'])) {
		function delAtraccio() {
		}
	}
?>
