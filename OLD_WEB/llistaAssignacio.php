<?php
session_start();
if(!isset($_SESSION['username'])) {
  header("location: login.php");
}
if ($_SESSION['profile']!=="treballador") {
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
		<a href="formConsultaAssignacions.php">Consultar Assignacions</a>
		<a href="validarTickets.php">Validar Tickets</a>
		<button class="loginbtn" onclick="window.location.href='logout.php'">Tancar Sessió</a></button>
		<button class="loginbtn" onclick="window.location.href='perfilTreballador.php'"> <i class="fas fa-user"></i> <?php echo $_SESSION['username']; ?></button>
	</div>
  </header>

  <section id="main-content">
    <article>
      <header>
        <h1>Consultar Assignacions</h1>
      </header>
	  <div class="content">

<?php
if($_POST['assignacio'] == "assign01") :?>

          <form method="post" action="#">
              <div class="input-group">
                <label><b>Dades treballador</b></label>
                <input type="text" list="treballadorAssignat" name="treballadorAssignat" value="Ramon Hidalgo 38941674Y" disabled>
                <datalist id="treballadorAssignat">
        				  <option value="Ramon Hidalgo 38941674Y">Ramon Hidalgo 38941674Y</option>
        				  <option value="Pablo Picasso 41131877B">Pablo Picasso 41131877B</option>
        				  <option value="Pablo Hernandez 99982611R">Pablo Hernandez 99982611R</option>
        				  <option value="Andres Villarejo 49083514L">Andres Villarejo 49083514L</option>
        				</datalist>
                <label><b>Atracció</b></label>
                <input type="text" list="atraccioAssignada" name="atraccioAssignada" value="Tornado" disabled>
                <datalist id="atraccioAssignada">
        				  <option value="Tornado">Tornado</option>
        				  <option value="Tsunami">Tsunami</option>
        				  <option value="Tremor">Tremor</option>
        				  <option value="Vikings">Vikings</option>
        				</datalist>
                <label><b>Zona del parc</b></label>
                <select name="zonaParcAssign" disabled>
        					<option value=""></option>
        					<option selected value="Mediterrania">Mediterrania</option>
        					<option value="China">China</option>
        					<option value="Polynesia">Polynesia</option>
        					<option value="Mexico">Mexico</option>
        					<option value="Sesamo">Sesamo</option>
        					<option value="Farwest">Farwest</option>
        				</select>
                <label><b>Data d'assignació</b></label>
        				<input type="date" name="dataAssignacio" value="2018-10-24" disabled>
              </div>
              <div class="input-group">
                <br>
                <a href="formConsultaAssignacions.php" class="contentbtn">Tornar enrere</a>
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
