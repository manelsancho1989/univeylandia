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
	  if (isset( $_POST['user']) && isset( $_POST['pass'])) {
		if(($_POST['user']==$userClient) && ($_POST['pass']==$passClient)) {
		  $_SESSION['username'] = $userClient;
		  $_SESSION['profile'] = $perfil[0];
		  header('Location: ../perfilClient.php');
		}
		if(($_POST['user']==$userAdmin) && ($_POST['pass']==$passAdmin)) {
		  $_SESSION['username'] = $userAdmin;
		  $_SESSION['profile'] = $perfil[1];
		  header('Location: ../perfilAdmin.php');
		}
		if(($_POST['user']==$userWork) && ($_POST['pass']==$passWork)) {
		  $_SESSION['username'] = $userWork;
		  $_SESSION['profile'] = $perfil[2];
		  header('Location: ../perfilTreballador.php');
		}
		else {
		  echo "ERROR: Introdueix un usuari i contrasenya vàlids";
		}
	  }
	}
?>
