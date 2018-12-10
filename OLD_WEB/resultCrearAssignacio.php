<?php
session_start();
if(!isset($_SESSION['username'])) {
  header("location: login.php");
}
if ($_SESSION['profile']!=="admin") {
  header("location: login.php");
}
?>
<html>
<head>
  <meta name="viewport" content="width=device-width, initial-scale=1.0"; charset="utf-8" />
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.3.1/css/all.css"
  integrity="sha384-mzrmE5qonljUremFsqc01SB46JvROS7bZs3IO2EmfFsd15uHvIt+Y8vEf7N7fWAU" crossorigin="anonymous">
  <link href="https://fonts.googleapis.com/css?family=Montserrat|Roboto" rel="stylesheet">
  <link rel="stylesheet" href="css/style.css">
  <link rel="icon" href="img/icon.png" type="image/gif">
  <title>Parc d'Atraccions Univeylandia</title>
</head>
<body>
 <header id="main-header">
	<div class="topnav">
		<img src="img/logo.png">
		<a href="index.php">Inici</a>
		<div class="dropdown">
		  <button class="dropbtn">Gestió Atraccions</button>
		  <div class="dropdown-content">
			  <a href="formCreaAtraccio.php">Crear Atracció</a>
			  <a href="formModAtraccio.php">Modificar Atracció</a>
			  <a href="formElimAtraccio.php">Eliminar Atracció</a>
			  <a href="formLlistaAtraccio.php">Llistar Atraccions</a>
		  </div>
		</div>
		<div class="dropdown">
		<button class="dropbtn">Gestió Assignacions</button>
		  <div class="dropdown-content">
			  <a href="formCreaAssignacio.php">Crear Assignació</a>
			  <a href="formModAssignacio.php">Modificar Assignació</a>
			  <a href="formElimAssignacio.php">Eliminar Assignació</a>
			  <a href="formLlistaAssignacio.php">Llistar Assignacions</a>
		  </div>
		 </div>
		<button class="loginbtn" onclick="window.location.href='logout.php'">Tancar Sessió</a></button>
		<button class="loginbtn" onclick="window.location.href='perfilAdmin.php'"> <i class="fas fa-user"></i> <?php echo $_SESSION['username']; ?></button>
	</div>
  </header>

  <section id="main-content">
    <article>
      <header>
        <h1>Crear Assignació</h1>
      </header>
      <div class="contentPhp">
		<?php
			include ('classes/classeAssignacio.php');
			//Crear Assignacio
			if(isset($_POST['crear'])) {
				$assignacio1 = new Assignacio($_POST['treballadorAssignat'], $_POST['atraccioAssignada'], $_POST['zonaParcAssign'],$_POST['dataAssignacio']);
				echo '<h2>Has afegit una assignació amb les següents dades:</h2>';
				echo '<p><b>ID Assignació: </b>'.$assignacio1->getIdAssignacio().'</p>';
        echo '<p><b>Dades treballador assignat: </b>'.$assignacio1->getTreballadorAssignat().'</p>';
        echo '<p><b>Atracció assignada: </b>'.$assignacio1->getAtraccioAssignada().'</p>';
				echo '<p><b>Zona del parc: </b>'.$assignacio1->getZonaParcAssign().'</p>';
				echo '<p><b>Data assignació: </b>'.$assignacio1->getDataAssignacio().'</p>';
				echo '<a href="formCreaAssignacio.php" class="contentbtn">Tornar enrere</a>';
			}
		?>
      </div>
    </article>
  </section>

  <footer id="main-footer">
    <p id="data">
      <script src="js/scripts.js"></script>
    </p>
      <ul>
        <li>
          <a href="#">Condicions Generals</a>
        </li>
        <li>
          <a href="#">Política de Privacitat</a>
        </li>
        <li>
          <a href="#">Contacte</a>
        </li>
        <li>
          <a href="#">Política de cookies</a>
        </li>
		    <li>
          © Univeylandia. Tots els drets reservats.
        </li>
      </ul>
  </footer>

</body>
</html>
