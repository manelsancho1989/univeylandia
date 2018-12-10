<?php
  class Client{
    /*Atributs*/
    private $nom;
    private $cognom;
    private $data;
    private $email;
    private $pass;
    private $passrep;

	/* CONSTRUCTORS */
	function __construct() {
	   $args = func_get_args();
	   $num = func_num_args();
	   $f='__construct'.$num;
	   if (method_exists($this,$f)) {
		   call_user_func_array(array($this,$f),$args);
	   }
	}
	
	function __construct6($nom, $cognom, $data, $email, $pass, $passrep) {
	  $this->nom = $nom;
	  $this->cognom = $cognom;
	  $this->data = $data;
	  $this->email = $email;
	  $this->pass = $pass;
	  $this->passrep = $passrep;
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
	
	public function getEmail() {
	  return $this->email;
	}
	
	public function getPass() {
	  return $this->pass;
	}
	
	public function getPassRep() {
	  return $this->passrep;
	}
	
	/* SETTERS */
	function setNom($nom) {
		$this->nom = $nom;
	}
	
	function setCognom($cognom) {
		$this->cognom = $cognom;
	}
	
	function setData($data) {
	   $this->data = $data;
	}
	
	function setEmail ($email) {
	   $this->email = $email;
	}
	
	function setPass($pass) {
	   $this->pass = $pass;
	}
	
	function setPassRep($passrep) {
	   $this->passrep = $passrep;
	}
	
}
 ?>
