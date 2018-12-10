<?php
session_start();
if(!isset($_SESSION['username'])) {
  header("location: login.php");
}
if ($_SESSION['profile']!=="treballador") {
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
		<a href="formConsultaAssignacions.php">Consultar Assignacions</a>
		<a href="validarTickets.php">Validar Tickets</a>
		<button class="loginbtn" onclick="window.location.href='logout.php'">Tancar Sessió</a></button>
		<button class="loginbtn" onclick="window.location.href='perfilTreballador.php'"> <i class="fas fa-user"></i> <?php echo $_SESSION['username']; ?></button>
	</div>
  </header>

  <section id="main-content">
    <article>
      <header>
        <h1>Validació de tickets</h1>
      </header>
      <div class="content">
		<form method="post" action="validarTickets.php">
		  <label for="ticket">Introdueix el codi del ticket a validar:
			 <input type="text" name="codiTicket" pattern="[T]{1}[0-9]{4}" title="T+4 digits" maxlength="5" required>
		  </label>
		  <div class="input-group">
			<input type="submit" name="validar" value="Validar">
			<input type="reset" name="cancelar" value="Cancel·lar">
		  </div>
		  <div class="input-group-aux"></div>
		</form>
      </div>
      <div class="content">
      		<?php
      			if(isset($_POST['validar'])) {
      				if($_POST['codiTicket']=="T1234") {
      					echo "<h2>Estat del ticket: VALID</h2>";
      				}
      				if($_POST['codiTicket']=="T2345") {
      					echo "<h2>Estat del ticket: USAT</h2>";
      				}
      				if(($_POST['codiTicket']!=="T2345") && ($_POST['codiTicket']!=="T1234")) {
      					echo "<h2>Estat del ticket: NO VALID</h2>";
      				}
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
