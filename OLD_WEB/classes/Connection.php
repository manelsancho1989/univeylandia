<?php
$servername = "localhost";
$username = "username";
$password = "password";

  function connectarBD()
  {
      // Crear connexio
      $conn = new mysqli($servername, $username, $password);

      // Comprovar connexio
      if ($conn->connect_error) {
          die("ERROR: " . $conn->connect_error);
      }
      echo "Connectat correctament";
  }

?>
