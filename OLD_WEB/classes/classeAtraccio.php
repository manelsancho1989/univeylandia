<?php
class Atraccio{
  /*Atributs*/ //Faltaran mes Atributs
  private $nom;
  private $tipus;
  private $dataInauguracio;
  private $zona;

  /*Constructor*/
  function __construct(){
   $args = func_get_args();
   $num = func_num_args();
   $f='__construct'.$num;
   if (method_exists($this,$f)){
     call_user_func_array(array($this,$f),$args);
   }
  }
  
  function __construct4($nom,$tipus,$dataInauguracio,$zona){
    $this->nom=$nom;
    $this->tipus=$tipus;
    $this->dataInauguracio=$dataInauguracio;
    $this->zona=$zona;
  }

  /*Getters*/
  public function getNom(){
	return $this->nom;
  }

  public function getTipus(){
	return $this->tipus;
  }

  public function getDataInauguracio(){
	return $this->dataInauguracio;
  }

  public function getZona(){
	return $this->zona;
  }

  /*Setters*/
  public function setNom($nom){
   $this->nom=$nom;
  }
   
  public function setTipus($tipus){
    $this->tipus=$tipus;
  }
	
  public function setDataInauguracio($dataInauguracio){
    $this->dataInauguracio=$dataInauguracio;
  }
	
  public function setZona($zona){
    $this->zona=$zona;
  }
	
}
?>
