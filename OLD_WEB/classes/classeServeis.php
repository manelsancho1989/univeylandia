<?php
	class Servei {
		private $nom;
		private $tipus;
		private $data;
		private $descripcio;
		private $clientAssignat;
		private $observacions;

		/* GETTERS */
		public function getNom() {
			return $this->nom;
		}

		public function getTipus() {
			return $this->tipus;
		}

		public function getData() {
			return $this->data;
		}

		public function getDescripcio() {
			return $this->descripcio;
		}

		public function getClientAssignat() {
			return $this->clientAssignat;
		}

		public function getObservacions() {
			return $this->observacions;
		}

		/* SETTERS */
		public function setNom($nom) {
			$this->nom = $nom;
		}

		public function setTipus($tipus) {
			$this->tipus = $tipus;
		}

		public function setData($data) {
			$this->data = $data;
		}

		public function setDescripcio($descripcio) {
			$this->descripcio =  $descripcio;
		}

		public function setClientAssignat($clientAssignat) {
			$this->clientAssignat = $clientAssignat;
		}

		public function setObservacions($observacions) {
			$this->observacions = $observacions;
		}
	}
?>
