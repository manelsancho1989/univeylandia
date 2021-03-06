<?php
session_start();
if(!isset($_SESSION['username'])) {
  header("location: login.php");
}
if ($_SESSION['profile']!=="admin") {
  header("location: login.php");
}

include_once('classes/Assignacions.php');

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
        <h1>Llistar Assignacions</h1>
      </header>
    <div class="content">
      <table>
        <tr>
          <th>Treballador assignat</th>
          <th>Atracció assignada</th>
          <th>Zona del parc</th>
          <th>Data assignació</th>
        </tr>
        <tr>
          <td><?php echo $as1->getTreballadorAssignat();?></td>
          <td><?php echo $as1->getAtraccioAssignada();?></td>
          <td><?php echo $as1->getZonaParcAssign();?></td>
          <td><?php echo $as1->getDataAssignacio();?></td>
        </tr>
        <tr>
          <td><?php echo $as2->getTreballadorAssignat();?></td>
          <td><?php echo $as2->getAtraccioAssignada();?></td>
          <td><?php echo $as2->getZonaParcAssign();?></td>
          <td><?php echo $as2->getDataAssignacio();?></td>
        </tr>
        <tr>
          <td><?php echo $as3->getTreballadorAssignat();?></td>
          <td><?php echo $as3->getAtraccioAssignada();?></td>
          <td><?php echo $as3->getZonaParcAssign();?></td>
          <td><?php echo $as3->getDataAssignacio();?></td>
        </tr>
        <tr>
          <td><?php echo $as4->getTreballadorAssignat();?></td>
          <td><?php echo $as4->getAtraccioAssignada();?></td>
          <td><?php echo $as4->getZonaParcAssign();?></td>
          <td><?php echo $as4->getDataAssignacio();?></td>
        </tr>
      </table>
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
