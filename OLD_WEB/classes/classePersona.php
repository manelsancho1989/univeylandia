<?php
class Persona {
	private $id;
	private $nom;
	private $cognom;
	private $data;
	private $sexe;
	private $email;

	/* CONSTRUCTORS */
	function __construct(){
		$args = func_get_args();
		$num = func_num_args();
		$f='__construct'. $num;
		if (method_exists($this,$f)) {
			call_user_func_array(array($this,$f),$args);
		}
	}

	function __construct5($nom, $cognom, $data, $sexe, $email) {
		$this->nom = $nom;
		$this->cognom = $cognom;
		$this->data = $data;
		$this->sexe = $sexe;
		$this->email = $email;
	}

	/* GETTERS */
	public function getNom() {
		return $this->nom;
	}

	public function getCognom() {
		return $this->cognom;
	}

	public function getData() {
		return $this->data;
	}

	public function getSexe() {
		return $this->sexe;
	}

	public function getEmail() {
		return $this->email;
	}

	/* SETTERS */
	public function setNom($nom) {
		$this->nom = $nom;
	}

	public function setCognom($cognom) {
		$this->cognom = $cognom;
	}

	public function setData($data) {
		$this->data = $data;
	}

	public function setSexe($sexe) {
		$this->sexe = $sexe;
	}

	public function setEmail($email) {
		$this->email = $email;
	}

}
