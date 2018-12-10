<html lang="es">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" href="../../../../favicon.ico">

    <title>Signin Template for Bootstrap</title>

    <!-- Bootstrap core CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css">
    

    <link href="css/login.css" rel="stylesheet">
  </head>

  <body class="text-center">
    <form class="form-signin" method="post" action="php/validateLogin.php">
      <img class="mb-4" src="img/logo.png" alt="" width="220" height="75">
      <h1 class="h3 mb-3 font-weight-normal">Noi fica les teves dades</h1>
      <label for="inputEmail" class="sr-only">Usuari</label>
      <input type="email" id="inputEmail" class="form-control" placeholder="Email" name="email" required autofocus>
      <label for="inputPassword" class="sr-only">Contrasenya</label>
      <input type="password" id="inputPassword" class="form-control" placeholder="Contrasenya" name="password" required>
      <div class="checkbox mb-3">
        <label>
          <input type="checkbox" value="remember-me"> Recordam
        </label>
      </div>
      <button class="btn btn-lg btn-primary btn-block" type="submit">Iniciar sessio</button>
      <p class="mt-5 mb-3 text-muted">&copy; 2017-2018</p>
    </form>
  </body>
</html>
