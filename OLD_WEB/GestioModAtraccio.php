<?php
session_start();
if (!isset($_SESSION['username'])) {
    header("location: login.php");
}
if ($_SESSION['profile']!=="admin") {
    header("location: login.php");
}

include_once('classes/Atraccions.php');

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
        <h1>Modificar Atracció</h1>
      </header>
	  <div class="content">
<?php
if ($_POST['atraccio'] == "Tornado") :?>

          <form method="post" action="mensajeModAtraccio.php">
              <div class="input-group">
                  <label><b>Nom de l'atracció</b></label>
                  <input type="text" placeholder="nom de l'atracció" name="nomAtrac" value="<?php echo $a1->getNom();?>" >
				  <label><b>Tipus d'atracció</b></label>
					<select name="tipusAtrac" required>
						<option selected value="Forta"><?php echo $a1->getTipus();?></option>
						<option value="Moderada">Moderada</option>
						<option value="Infantil">Infantil</option>
					</select>
  				<label><b>Data d'inauguració</b></label>
  				<input type="date" placeholder="Introdueix la data d'inauguració" name="dataInaug" value="<?php echo $a1->getDataInauguracio();?>">
				  <label><b>Zona del parc</b></label>
					<select name="zonaParc" required>
						<option selected value="Mediterrania"><?php echo $a1->getZona();?></option>
						<option value="China">China</option>
						<option value="Polynesia">Polynesia</option>
						<option value="Mexico">Mexico</option>
						<option value="Sesamo">Sesamo</option>
						<option value="Farwest">Farwest</option>
					</select>
              </div>
              <div class="input-group">
                  <input type="submit" name="acceptar" value="Acceptar">
                  <input type="reset" value="Cancel·lar">
              </div>
  			<div class="input-group-aux">
  			</div>
          </form>

<?php endif ?>

<?php
if ($_POST['atraccio'] == "Tsunami") :?>

          <form method="post" action="mensajeModAtraccio.php">
              <div class="input-group">
                  <label><b>Nom de l'atracció</b></label>
                  <input type="text" placeholder="nom de l'atracció" name="nomAtrac" value="<?php echo $a2->getNom();?>">
                  <label><b>Tipus d'atracció</b></label>
                  <select name="tipusAtrac" required>
						<option selected value="Forta"><?php echo $a2->getTipus();?></option>
						<option value="Moderada">Moderada</option>
						<option value="Infantil">Infantil</option>
					</select>
  				<label><b>Data d'inauguració</b></label>
  				<input type="date" placeholder="Introdueix la data d'inauguració" name="dataInaug" value="<?php echo $a2->getDataInauguracio();?>">
                  <label><b>Zona del parc</b></label>
                  <select name="zonaParc" required>
					<option value="Mediterrania">Mediterrania</option>
					<option value="China">China</option>
					<option selected value="Polynesia"><?php echo $a2->getZona();?></option>
					<option value="Mexico">Mexico</option>
					<option value="Sesamo">Sesamo</option>
					<option value="Farwest">Farwest</option>
				  </select>
              </div>
              <div class="input-group">
                  <input type="submit" name="acceptar" value="Acceptar">
                  <input type="reset" value="Cancel·lar">
              </div>
  			<div class="input-group-aux">
  			</div>
          </form>

<?php endif ?>

<?php
if ($_POST['atraccio'] == "Vikings") :?>

          <form method="post" action="mensajeModAtraccio.php">
              <div class="input-group">
                  <label><b>Nom de l'atracció</b></label>
                  <input type="text" placeholder="nom de l'atracció" name="nomAtrac" value="<?php echo $a4->getNom();?>" >
                  <label><b>Tipus d'atracció</b></label>
                  <select name="tipusAtrac" required>
					<option value="Forta">Forta</option>
					<option selected value="Moderada"><?php echo $a4->getTipus();?></option>
					<option value="Infantil">Infantil</option>
				  </select>
  				<label><b>Data d'inauguració</b></label>
  				<input type="date" placeholder="Introdueix la data d'inauguració" name="dataInaug" value="<?php echo $a4->getDataInauguracio();?>">
                  <label><b>Zona del parc</b></label>
                  <select name="zonaParc" required>
					<option value="Mediterrania">Mediterrania</option>
					<option value="China">China</option>
					<option value="Polynesia">Polynesia</option>
					<option value="Mexico">Mexico</option>
					<option value="Sesamo">Sesamo</option>
					<option selected value="Farwest"><?php echo $a4->getZona();?></option>
				  </select>
              </div>
              <div class="input-group">
                  <input type="submit" name="acceptar" value="Acceptar">
                  <input type="reset" value="Cancel·lar">
              </div>
  			<div class="input-group-aux">
  			</div>
          </form>

<?php endif ?>

<?php
if ($_POST['atraccio'] == "Tremor") :?>

          <form method="post" action="mensajeModAtraccio.php">
              <div class="input-group">
                  <label><b>Nom de l'atracció</b></label>
                  <input type="text" placeholder="Introdueix el nom de l'atracció" name="nomAtrac" value="<?php echo $a3->getNom();?>" >
                  <label><b>Tipus d'atracció</b></label>
                  <select name="tipusAtrac" required>
					<option selected value="Forta"><?php echo $a3->getTipus();?></option>
					<option value="Moderada">Moderada</option>
					<option value="Infantil">Infantil</option>
				  </select>
  				<label><b>Data d'inauguració</b></label>
  				<input type="date" placeholder="Introdueix la data d'inauguració" name="dataInaug" value="<?php echo $a3->getDataInauguracio();?>">
                  <label><b>Zona del parc</b></label>
                  <select name="zonaParc" required>
					<option value="Mediterrania">Mediterrania</option>
					<option value="China">China</option>
					<option value="Polynesia">Polynesia</option>
					<option selected value="Mexico"><?php echo $a3->getZona();?></option>
					<option value="Sesamo">Sesamo</option>
					<option value="Farwest">Farwest</option>
				  </select>
              </div>
              <div class="input-group">
                  <input type="submit" name="acceptar" value="Acceptar">
                  <input type="reset" value="Cancel·lar">
              </div>
  			<div class="input-group-aux">
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
