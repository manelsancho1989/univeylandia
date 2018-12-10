<?php
session_start();
if(!isset($_SESSION['username'])) {
  header("location: login.php");
}
if ($_SESSION['profile']!=="admin") {
  header("location: login.php");
}

include_once('classes/classeAssignacio.php');
include_once('classes/classeAtraccio.php');
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
        <h1>Modificar Assignació</h1>
      </header>
	  <div class="content">

<?php
if($_POST['assignacio'] == "assign01") :?>

      <form method="post" action="mensajeModAssignacio.php">
          <div class="input-group">
            <label><b>Dades treballador</b></label>
            <input type="text" list="treballadorAssignat" name="treballadorAssignat" value="<?php echo $as1->getTreballadorAssignat();?>" required>
            <datalist id="treballadorAssignat">
              <option value="<?php echo $as1->getTreballadorAssignat();?>"><?php echo $as1->getTreballadorAssignat();?></option>
              <option value="<?php echo $as2->getTreballadorAssignat();?>"><?php echo $as2->getTreballadorAssignat();?></option>
              <option value="<?php echo $as3->getTreballadorAssignat();?>"><?php echo $as3->getTreballadorAssignat();?></option>
              <option value="<?php echo $as4->getTreballadorAssignat();?>"><?php echo $as4->getTreballadorAssignat();?></option>
            </datalist>
            <label><b>Atracció</b></label>
            <input type="text" list="atraccioAssignada" name="atraccioAssignada" value="<?php echo $as1->getAtraccioAssignada();?>">
            <datalist id="atraccioAssignada">
              <option value="Tornado"><?php echo $a1->getNom();?></option>
              <option value="Tsunami"><?php echo $a2->getNom();?></option>
              <option value="Tremor"><?php echo $a3->getNom();?></option>
              <option value="Vikings"><?php echo $a4->getNom();?></option>
            </datalist>
            <label><b>Zona del parc</b></label>
            <select name="zonaParcAssign">
              <option value=""></option>
              <option selected value="Mediterrania"><?php echo $as1->getZonaParcAssign();?></option>
              <option value="China">China</option>
              <option value="Polynesia">Polynesia</option>
              <option value="Mexico">Mexico</option>
              <option value="Sesamo">Sesamo</option>
              <option value="Farwest">Farwest</option>
            </select>
            <label><b>Data d'assignació</b></label>
            <input type="date" name="dataAssignacio" value="<?php echo $as1->getDataAssignacio();?>"required>
          </div>
          <div class="input-group">
              <input type="submit" name="acceptar" value="Acceptar">
              <input type="reset" value="Cancel·lar">
          </div>
      </form>

<?php endif ?>

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
