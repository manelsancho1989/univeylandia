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
      <div class="contentPhp">

<?php
session_start();

    $userClient = "paco";
    $passClient = "paco123";

    $userAdmin = "admin";
    $passAdmin = "secret";

    $userWork = "ramon";
    $passWork = "ramon123";

    $perfil = array("client","admin","treballador");

    if (!empty($_POST)) {
        if (isset($_POST['username']) && isset($_POST['password'])) {
            if (($_POST['username']==$userClient) && ($_POST['password']==$passClient)) {
                //usuari client validat correctament
                if (array_key_exists('remember', $_POST)) {
                    // Crear una nova cookie de sessió que expira en 7 dies
                    setcookie('username', $userClient, time() + 7 * 24 * 60 * 60);
                    //Reemplaçar el ID de la sessio actual amb una nova i mantenir la informació de la sessio actual
                    session_regenerate_id(true);
                } elseif (!$_POST['remember']) {
                    //Si hi ha una COOKIE creada, atrassar-la en el temps per a que la elimine
                    if (isset($_COOKIE['username'])) {
                        $past = time() - 100;
                        setcookie(username, gone, $past);
                    }
                }
                //Posar en sessió i enviar a la pàgina del client
                $_SESSION['username'] = $userClient;
                $_SESSION['profile'] = $perfil[0];
                header('Location: ../perfilClient.php');
            }
            if (($_POST['username']==$userAdmin) && ($_POST['password']==$passAdmin)) {
                //usuari admin validat correctament
                if (array_key_exists('remember', $_POST)) {
                    // Crear una nova cookie de sessió que expira en 7 dies
                    setcookie('username', $userAdmin, time() + 7 * 24 * 60 * 60);
                    //Reemplaçar el ID de la sessio actual amb una nova i mantenir la informació de la sessio actual
                    session_regenerate_id(true);
                } elseif (!$_POST['remember']) {
                    //Si hi ha una COOKIE creada, atrassar-la en el temps per a que la elimine
                    if (isset($_COOKIE['username'])) {
                        $past = time() - 100;
                        setcookie(username, gone, $past);
                    }
                }
                //Posar en sessió i enviar a la pàgina del admin
                $_SESSION['username'] = $userAdmin;
                $_SESSION['profile'] = $perfil[1];
                header('Location: ../perfilAdmin.php');
            }
            if (($_POST['username']==$userWork) && ($_POST['password']==$passWork)) {
                //usuari treballador validat correctament
                if (array_key_exists('remember', $_POST)) {
                    // Crear una nova cookie de sessió que expira en 7 dies
                    setcookie('username', $userWork, time() + 7 * 24 * 60 * 60);
                    //Reemplaçar el ID de la sessio actual amb una nova i mantenir la informació de la sessio actual
                    session_regenerate_id(true);
                } elseif (!$_POST['remember']) {
                    //Si hi ha una COOKIE creada, atrassar-la en el temps per a que la elimine
                    if (isset($_COOKIE['username'])) {
                        $past = time() - 100;
                        setcookie(username, gone, $past);
                    }
                }
                //Posar en sessió i enviar a la pàgina del treballador
                $_SESSION['username'] = $userWork;
                $_SESSION['profile'] = $perfil[2];
                header('Location: ../perfilTreballador.php');
            } else {
                echo "<h2>ERROR: Introdueix un usuari i contrasenya vàlids</h2>";
            }
        }
    }
?>
      <a href="login.php" class="contentbtn">Tornar a intentar</a>
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
