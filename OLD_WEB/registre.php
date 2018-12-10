<?php
session_start();
if(isset($_SESSION['username'])) {
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
      <button class="loginbtn" onclick="window.location.href='login.php'"> <i class="fas fa-user"></i> Login</button>
    </div>
  </header>

  <section id="main-content">
    <article>
      <header>
        <h1>Registre</h1>
      </header>
      <div class="content">

        <form method="post" action="GestioClients.php">
            <div class="input-group">
                <label><b>Nom</b></label>
                <input type="text" placeholder="Introdueix el nom" name="nom" required>
                <label><b>Cognom</b></label>
                <input type="text" placeholder="Introdueix el cognom" name="cognom" required>
				<label><b>Data de naixement</b></label>
				<input type="date" placeholder="Introdueix la data de naixement" name="data" required>
                <label><b>Email</b></label>
                <input type="email" placeholder="Introdueix el email" name="email" required>
                <label for="pass"><b>Contrasenya</b></label>
				<input type="password" placeholder="Introdueix una contrasenya" name="pass" required>
				<label for="passrep"><b>Repeteix la contrasenya</b></label>
				<input type="password" placeholder="Repeteix la contrasenya" name="passrep" required>
			   <hr>
				<p>Registrant-te acceptes els nostres <a href="#">Termes i Condicions de Privacitat</a>.</p>
            </div>
            <div class="input-group">
                <input type="submit" name ="submit" value="Registra't">
                <input type="reset" value="Cancel·lar">
            </div>
			<div class="input-group-aux">
				<span>Ja tens un compte? Ves a <a href="login.php"> Login</a></span>
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
