<?php
include('classeAtraccio_EV.php');

$atraccio = new Atraccio();

  // Funcio per afegir una Atraccio a la BD
  function crearAtraccio()
  {
    // Crear connexio
    $conn = new mysqli($servername, $username, $password);

    // Comprovar connexio
    if ($conn->connect_error) {
        die("ERROR: " . $conn->connect_error);
    }

    // Insertar Valors del Formulari
    $sql = "INSERT INTO Atraccions (nom, tipus, descripcio, zona) VALUES ('$_POST['nom']','$_POST['tipus']','$_POST['desc']','$_POST['zona']')";

    // Comprovar INSERT
    if ($conn->query($sql) === TRUE) {
      echo "S'ha creat l'atracció correctament";
    } else {
      echo "ERROR: ". $sql . "<br>" . $conn->error;
    }

    // Tancar connexio
    $conn->close();
  }

  // Funcio per modificar una Atraccio existent a la BD
  function modificarAtraccio()
  {
    // Crear connexio
    $conn = new mysqli($servername, $username, $password);

    // Comprovar connexio
    if ($conn->connect_error) {
        die("ERROR: " . $conn->connect_error);
    }

    $sql = "UPDATE Atraccions SET nom='$_POST['nom']', tipus='$_POST['tipus']', descripcio='$_POST['descripcio']', zona='$_POST['zona']' WHERE id=$_POST['id']";

    // Comprovar el UPDATE
    if ($conn->query($sql) === TRUE) {
      echo "S'han actualitzat correctament les dades";
    } else {
      echo "ERROR: " . $conn->error;
    }

    // Tancar connexio
    $conn->close();
  }

  // Funcio per llistar les Atraccions que hi ha a la BD
  function llistarAtraccio()
  {
    // Crear connexio
    $conn = new mysqli($servername, $username, $password);

    // Comprovar connexio
    if ($conn->connect_error) {
        die("ERROR: " . $conn->connect_error);
    }

    // Select de les dades
    $sql = "SELECT id, nom, tipus, descripcio, zona FROM Atraccions";
    $result = $conn->query($sql);

    // Comprovar si hi ha dades i imprimir-les
    if ($result->num_rows > 0) {
      // Imprimir dades de cada fila
      while ($row = $result->fetch_assoc()) {
        echo "ID: " . $row['id'] . " - Nom: " . $row['nom'] . " - Tipus: " . $row['tipus'] . " - Descripcio: " . $row['descripcio'] . " - Zona: " . $row['zona'] . "<br>";
      }
    } else {
      echo "No hi ha dades";
    }

    // Tancar connexio
    $conn->close();
  }

  // Funcio per eliminar una Atraccio existent a la BD
  function eliminarAtraccio()
  {
    // Crear connexio
    $conn = new mysqli($servername, $username, $password);

    // Comprovar connexio
    if ($conn->connect_error) {
        die("ERROR: " . $conn->connect_error);
    }

    // Delete d'un registre
    $sql = "DELETE FROM Atraccions WHERE nom=$_POST['nom']";

    // Comprovar el DELETE
    if ($conn->query($sql) === TRUE) {
      echo "El registre s'ha eliminat correctament";
    } else {
      echo "ERROR: " . $conn->error;
    }

    // Tancar connexio
    $conn->close();
  }

?>
