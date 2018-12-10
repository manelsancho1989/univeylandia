<?php
session_start();
if (isset($_SESSION['username'])) {
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
        <h1>Login</h1>
      </header>
      <div class="content">

        <form method="post" action="validate.php">
          <div class="input-group">
           <label for="username"><b>Usuari</b></label>
           <input type="text" placeholder="Introdueix el nom d'usuari" name="username" value="<?php echo $_COOKIE['username'];?>" required>
           <label for="password"><b>Contrasenya</b></label>
           <input type="password" placeholder="Introdueix la contrasenya" name="password" required>
           <label for="remember"><b>Recordar usuari</b></label>
           <input type="checkbox" name="remember" <?php if (isset($_COOKIE['username'])) {
             echo 'checked="checked"';
           } else {
               echo '';
           }
           ?>>
          </div>
          <div class="input-group">
            <input type="submit" name="submit" value="Login">
            <input type="reset" value="Cancel·lar">
          </div>
    		  <div class="input-group-aux">
      			<span><a href="#">Has oblidat la contrasenya?</a></span>
      			<br>
      			<span>No tens un compte? <a href="registre.php">Registra't</a></span>
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
