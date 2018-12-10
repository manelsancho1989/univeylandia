<?php
	class Atraccio {
		private $nom;
		private $tipus;
		private $descripcio;
		private $zona;

		/* CONSTRUCTORS */
		function __construct(){
			$args = func_get_args();
			$num = func_num_args();
			$f='__construct'. $num;
			if (method_exists($this,$f)) {
				call_user_func_array(array($this,$f),$args);
			}
		}

		function __construct4($nom, $tipus, $descripcio, $zona) {
			$this->nom = $nom;
			$this->tipus = $tipus;
			$this->descripcio = $descripcio;
			$this->zona = $zona;
		}

		/* GETTERS */
		public function getNom() {
			return $this->nom;
		}

		public function getTipus() {
			return $this->tipus;
		}

		public function getDescripcio() {
			return $this->descripcio;
		}

		public function getZona() {
			return $this->zona;
		}

		/* SETTERS */
		public function setNom($nom) {
			$this->nom = $nom;
		}

		public function setTipus($tipus) {
			$this->tipus = $tipus;
		}

		public function setDescripcio($descripcio) {
			$this->descripcio =  $descripcio;
		}

		public function setZona($zona) {
			$this->zona = $zona;
		}
	}
?>
