<?php
	class Assignacio {
		private $idAssignacio;
		private $treballadorAssignat;
		private $atraccioAssignada;
		private $zonaParcAssign;
		private $dataAssignacio;

		/* CONSTRUCTORS */
		function __construct(){
			$args = func_get_args();
			$num = func_num_args();
			$f='__construct'. $num;
			if (method_exists($this,$f)) {
				call_user_func_array(array($this,$f),$args);
			}
		}

		function __construct4($treballadorAssignat, $atraccioAssignada, $zonaParcAssign, $dataAssignacio) {
			$this->zonaParcAssign = $zonaParcAssign;
			$this->treballadorAssignat = $treballadorAssignat;
			$this->atraccioAssignada = $atraccioAssignada;
			$this->dataAssignacio = $dataAssignacio;
		}

		/* GETTERS */
		public function getIdAssignacio() {
			return $this->idAssignacio;
		}

		public function getTreballadorAssignat() {
			return $this->treballadorAssignat;
		}

		public function getAtraccioAssignada() {
			return $this->atraccioAssignada;
		}

		public function getZonaParcAssign() {
			return $this->zonaParcAssign;
		}

		public function getDataAssignacio() {
			return $this->dataAssignacio;
		}

		/* SETTERS */
		public function setTreballadorAssignat($treballadorAssignat) {
			$this->treballadorAssignat =  $treballadorAssignat;
		}

		public function setAtraccioAssignada($atraccioAssignada) {
			$this->atraccioAssignada = $atraccioAssignada;
		}

		public function setZonaParcAssign($zonaParcAssign) {
			$this->zonaParcAssign = $zonaParcAssign;
		}

		public function setDataAssignacio($dataAssignacio) {
			$this->dataAssignacio = $dataAssignacio;
		}

	}
?>
