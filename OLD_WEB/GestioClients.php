<?php
	include ('classes/classeClient.php');

	//Registrar client.
	if(isset($_POST['submit']) && ($_POST['pass']==$_POST['passrep']) ){
		$client1 = new Client($_POST['nom'], $_POST['cognom'], $_POST['data'],$_POST['email'],$_POST['pass'],$_POST['passrep']);
	}
 ?>


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
       <div class="contentPhp">
				 <?php
				 echo "<h2>T'has registrat amb les següents dades</h2>";
				 echo "<p><b>Nom: </b>".$client1->getNom()."</p>";
				 echo "<p><b>Cognom: </b>".$client1->getCognom()."</p>";
				 echo "<p><b>Data: </b>".$client1->getData()."</p>";
				 echo "<p><b>Email: </b>".$client1->getEmail()."</p>";
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
