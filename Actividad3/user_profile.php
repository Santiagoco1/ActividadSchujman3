<!DOCTYPE html>
<html lang="es">

<?php
	session_start();
	if (@!$_COOKIE['user']) {
		header("Location:iniciar_sesion.php");
	}
?>

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exercise IV</title>
    <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
    <link rel="stylesheet" href="css/var.css">
    <link rel="stylesheet" href="css/general.css">
    <link rel="stylesheet" href="css/header.css">
    <link rel="stylesheet" href="css/footer.css">
    <link rel="stylesheet" href="css/animations.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="Shortcut Icon" href="images/dog.png">
    <script src="https://code.jquery.com/jquery-3.4.0.min.js"></script>
    <script src="scripts.js" type="text/javascript"></script>
</head>
<body>
<header class="fadeInDown">
        <div class="title-container">
            <a href="https://ips.edu.ar/" target="_blank">
                <img src="images/IPS_Logo.png" alt="IPS-logo">
            </a>
            <h1 style="color: white;">Profile</h1>
        </div>
        <div class="links">
            <div class="img-container">
                <a href="user-form.php">   
                    <img src="images/form.png" alt="respuestas">
                    <h6>Form</h6>
                </a>
            </div>
            <div class="img-container">
                <a href="sign.php">
                    <img src="images/logOut.png" alt="actividad1">
                    <h6>Log Out</h6>
                </a>
            </div>
        </div>
    </header>
    <main>
        <div class="cards-container">
            <?php

            include "var.inc";
            $mysqli = new mysqli($HOST, $USER, $PASS, $DB);
            $ID = $_COOKIE["id"];

            $result = mysqli_query($mysqli,  "SELECT * from $TABLA WHERE orden = $ID" );

            if ($f = mysqli_fetch_assoc($result))
            {
            ?>
                    <div class="card">
                        <div class="card-title">
                            <h1>Profile</h1>
                        </div>
                        <div class="card-body">
              
            <?php
                    echo "<h3><b>Name: </b> ". $f["nombre"]."</h3>";
                    echo "<h3><b>Email: </b> ". $f["email"]."</h3>";
            ?>                    
                        </div>
                   </div>
            <?php
            }
            ?>
        </div>
    </main>
    <footer style="position: fixed; bottom: 0;">
        <h3>Santiago C&oacute;</h3>
        <h3>Franco Gozzerino</h3>
        <h3>Juliana Consolati</h3>
    </footer>
</body>
</html>