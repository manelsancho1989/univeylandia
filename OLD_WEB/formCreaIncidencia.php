<?php
session_start();
if(!isset($_SESSION['username'])) {
  header("location: login.php");
}
if ($_SESSION['profile']!=="client") {
  header("location: index.php");
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
		<a href="http://www.univeylandia-hotel.cat">Hotel</a>
		<a href="atraccions.php">Atraccions</a>
		<a href="contacta.php">Contacta</a>
		<a href="compra.php">Compra Tickets</a>
		<a href="multimedia.php">Multimèdia</a>
		<a href="formCreaIncidencia.php">Crear Incidència</a>
		<button class="loginbtn" onclick="window.location.href='logout.php'">Tancar Sessió</a></button>
		<button class="loginbtn" onclick="window.location.href='perfilClient.php'"> <i class="fas fa-user"></i> <?php echo $_SESSION['username']; ?></button>
	</div>
  </header>

  <section id="main-content">
    <article>
      <header>
        <h1>Crear Incidència</h1>
      </header>
      <div class="content">

        <form method="post" action="mensajeCrearIncidencia.php">
            <div class="input-group">
				<label><b>Tipus d'incidència</b></label>
				<select name="tipusIncidencia" required>
					<option selected value=""></option>
					<option value="Neteja">Neteja</option>
					<option value="Manteniment">Manteniment</option>
				</select>

				<label><b>Zona del parc</b></label>
                <select name="zonaParcIncidencia">
					<option selected value=""></option>
					<option value="Mediterrania">Mediterrania</option>
					<option value="China">China</option>
					<option value="Polynesia">Polynesia</option>
					<option value="Mexico">Mexico</option>
					<option value="Sesamo">Sesamo</option>
					<option value="Farwest">Farwest</option>
				</select>

                <label><b>Atracció en la que s'ha trobat la incidència</b></label>
				<input type="text" list="atraccioIncidencia" name="atraccioIncidencia">
                <datalist id="atraccioIncidencia">
				  <option value="Tornado">Tornado</option>
				  <option value="Tsunami">Tsunami</option>
				  <option value="Tremor">Tremor</option>
				  <option value="Vikings">Vikings</option>
				</datalist>

				<label><b>Data de la incidència</b></label>
				<input type="date" name="dataIncidencia" required>

				<label><b>Descripció de la incidència</b></label>
				<textarea name="descripcioIncidencia"></textarea>

            </div>
            <div class="input-group">
                <input type="submit" name="crear" value="Crear">
                <input type="reset" value="Cancel·lar">
            </div>
        </form>

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
