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

<?php
session_start();
if ($_SESSION['profile']=="client") :?>

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

<?php endif ?>

<?php
if (!isset($_SESSION['username'])) :?>

  <header id="main-header">
  	<div class="topnav">
      <img src="img/logo.png">
      <a href="index.php">Inici</a>
      <a href="http://www.univeylandia-hotel.cat">Hotel</a>
      <a href="atraccions.php">Atraccions</a>
      <a href="contacta.php">Contacta</a>
      <a href="compra.php">Compra Tickets</a>
      <button class="loginbtn" onclick="window.location.href='login.php'"> <i class="fas fa-user"></i> Login</button>
  	</div>
  </header>

<?php endif ?>

  <section id="main-content">
    <article>
      <header>
        <h1>Contacta</h1>
      </header>
      <div class="content">

        <form method="post" action="mailto:evaldascasas3@iesmontsia.org" enctype="text/plain">
            <div class="input-group">
                <label><b>Nom</b></label>
                <input type="text" placeholder="Introdueix el nom" name="nom">
                <label><b>Cognom</b></label>
                <input type="text" placeholder="Introdueix el cognom" name="cognom">
                <label><b>Email</b></label>
                <input type="email" placeholder="Introdueix el email" name="email">
                <label><b>Comenta'ns en que podem ajudar-te</b></label>
                <textarea name="comentari"></textarea>
            </div>
            <div class="input-group">
                <input type="submit" value="Enviar">
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
