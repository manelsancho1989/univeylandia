<?php
include_once('classePersona.php');

class Empleat extends Persona {
	private $codiSS;
	private $numNomina;

	/* CONSTRUCTORS */
	function __construct(){
		$args = func_get_args();
		$num = func_num_args();
		$f='__construct'. $num;
		if (method_exists($this,$f)) {
			call_user_func_array(array($this,$f),$args);
		}
	}

	function __construct7($nom, $cognom, $data, $sexe, $email, $codiSS, $numNomina) {
		parent::__construct5($nom, $cognom, $data, $sexe, $email);
		$this->codiSS = $codiSS;
		$this->numNomina = $numNomina;
	}

	/* GETTERS */
	public function getCodiSS() {
		return $this->codiSS;
	}

	public function getNumNomina() {
		return $this->numNomina;
	}

	/* SETTERS */
	public function setCodiSS($codiSS) {
		$this->codiSS = $codiSS;
	}

	public function setNumNomina($numNomina) {
		$this->numNomina = $numNomina;
	}

}
?>
