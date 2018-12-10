<?php
//include_once(class_persona.php);
include_once $_SERVER['DOCUMENT_ROOT']."/php/connection.php";

class Client{
  /*Atributs*/
  private $id;
  private $nom;
  private $cognom;
  private $cognom2;
  private $email;
  private $pass;
  private $data;
  private $adreca;
  private $ciutat;
  private $provincia;
  private $codi_postal;
  private $tipus_doc;
  private $num_doc;
  private $sexe;
  private $tlf;
  private $rol;
  private $actiu;

  /* CONSTRUCTORS */
  function __construct() {
    $args = func_get_args();
    $num = func_num_args();
    $f='__construct'.$num;
    if (method_exists($this,$f)) {
      call_user_func_array(array($this,$f),$args);
    }
  }

  function __construct2($email, $pass)
  {
    $this->email = $email;
    $this->pass = $pass;
  }

  /* CONSTRUCTOR PER A QUAN CREEM UN USUARI DES DE ADMINISTRACIO */
  function __construct12($nom, $cognom, $cognom2, $tipus_doc, $num_doc, $data, $sexe, $tlf, $email, $adreca, $ciutat, $provincia) {
   $this->id = NULL;
   $this->nom = $nom;
   $this->cognom = $cognom;
   $this->cognom2 = $cognom2;
   $this->tipus_doc = $tipus_doc;
   $this->num_doc = $num_doc;
   $this->data = $data;
   $this->sexe = $sexe;
   $this->tlf = $tlf;
   $this->email = $email;
   $this->adreca = $adreca;
   $this->ciutat = $ciutat;
   $this->provincia = $provincia;
   $this->rol = '1';
   $this->actiu = '0';
   $this->pass = password_hash("alumne", PASSWORD_DEFAULT); //ENCRIPTAR CONTRASSENYA PER DEFECTE
   $this->codi_postal = '0';  //NPI de si deixar el codi o no
  }

  /* GETTERS */
  public function getNom()
  {
   return $this->nom;
  }

  public function getCognom()
  {
   return $this->cognom;
  }

  public function getData()
  {
   return $this->data;
  }

  public function getEmail()
  {
   return $this->email;
  }

  public function getPass()
  {
   return $this->pass;
  }


  /* SETTERS */
  public function setNom($nom)
  {
   $this->nom = $nom;
  }

  public function setCognom($cognom)
  {
   $this->cognom = $cognom;
  }

  public function setData($data)
  {
    $this->data = $data;
  }

  public function setEmail ($email)
  {
    $this->email = $email;
  }

  public function setPass($pass)
  {
    $this->pass = $pass;
  }

  /* MÈTODES */

  public function crearClient()
  {
    try
    {
      if (mysqli_connect_errno()) {
          printf("Connect failed: %s\n", mysqli_connect_error());
          exit();
      }

      $conn = createConnection();

      $sql = "INSERT INTO USUARI (id_usuari, nom, cognom1, cognom2, email, password, data_naixement, adreca, ciutat, provincia, codi_postal,
        tipus_document, numero_document, sexe, telefon, id_rol, actiu) VALUES (?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?);";

      $stmt = $conn->prepare($sql);

      $stmt->bind_param("isssssssssisssiii",$this->id, $this->nom, $this->cognom, $this->cognom2, $this->email, $this->pass, $this->data,
      $this->adreca, $this->ciutat, $this->provincia, $this->codi_postal, $this->tipus_doc, $this->num_doc, $this->sexe, $this->tlf, $this->rol, $this->actiu);

      if($stmt->execute())
      {
        //Cerramos la conexión y la sentencia
        $stmt->close();
        $conn->close();
        //Retornamos true, consulta satisfactoria
        return true;
      }
      //Sino surgió algún error y retornamos una cadena de error.
      else
      {
        $stmt->close();
        $conn->close();
        return 'Error en el INSERT';
      }
      //Si surge alguna excepción la capturamos e imprimimos,
      //retornamos false
    }
    catch (Exception $e)
    {
      echo $e;
      $stmt->close();
      $conn->close();
      return false;
    }
  }


  public function validarLogin()
  {
    $conn = createConnection();

    $sql = "SELECT password FROM USUARI WHERE email=?";

    $stmt = $conn->prepare($sql);

    $stmt->bind_param("s",$this->email);

    $stmt->execute();

    $stmt->bind_result($hash);

    $stmt->fetch();

    $isValid = password_verify($this->pass, $hash);

    if ($isValid)
    {
      echo 'VALID';
      session_start();
      $_SESSION['usuari'] = $this->email;
      $_SESSION['id_usuari'] = $this->id_usuari;
      $_SESSION['rol'] = $this->id_rol;

      echo $_SESSION['usuari'], $_SESSION['id_usuari'], $_SESSION['rol'];
    }
    else
    {
      echo 'NO VALID';
    }
    $conn->close();
  }

}

 ?>
