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
        <h1>Multimèdia</h1>
      </header>
      <div class="content">
		    <div class="gallery">
          <a target="_blank" href="img/imatgeUser3.jpg">
            <img src="img/imatgeUser3.jpg">
          </a>
		      <div class="desc"><a href="img/imatgeUser3.jpg" download>Descarregar</a></div>
        </div>
        <div class="gallery">
          <a target="_blank" href="img/imatgeUser3.jpg">
            <img src="img/imatgeUser3.jpg">
          </a>
		      <div class="desc"><a href="img/imatgeUser3.jpg" download>Descarregar</a></div>
        </div>
        <div class="gallery">
          <a target="_blank" href="img/imatgeUser3.jpg">
            <img src="img/imatgeUser3.jpg">
          </a>
		      <div class="desc"><a href="img/imatgeUser3.jpg" download>Descarregar</a></div>
        </div>
        <div class="gallery">
          <a target="_blank" href="img/imatgeUser3.jpg">
            <img src="img/imatgeUser3.jpg">
          </a>
		      <div class="desc"><a href="img/imatgeUser3.jpg" download>Descarregar</a></div>
        </div>
        <div class="gallery">
          <a target="_blank" href="img/imatgeUser3.jpg">
            <img src="img/imatgeUser3.jpg">
          </a>
		      <div class="desc"><a href="img/imatgeUser3.jpg" download>Descarregar</a></div>
        </div>
        <div class="gallery">
          <a target="_blank" href="img/imatgeUser3.jpg">
            <img src="img/imatgeUser3.jpg">
          </a>
		      <div class="desc"><a href="img/imatgeUser3.jpg" download>Descarregar</a></div>
        </div>
        <div class="paginacio">
          <a href="#">&laquo;</a>
          <a href="multimedia.php" class="active">1</a>
      		<a href="#/multimedia/p/2">2</a>
      		<a href="#/multimedia/p/3">3</a>
      		<a href="#">&raquo;</a>
        </div>
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