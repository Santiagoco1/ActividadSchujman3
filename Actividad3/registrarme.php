<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Actividad IV</title>
    <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
    <link rel="stylesheet" href="css/var.css">
    <link rel="stylesheet" href="css/general.css">
    <link rel="stylesheet" href="css/header.css">
    <link rel="stylesheet" href="css/footer.css">
    <link rel="stylesheet" href="css/registro.css">
    <link rel="stylesheet" href="css/animations.css">
    <link rel="Shortcut Icon" href="images/dog.png">
    <script src="https://code.jquery.com/jquery-3.4.0.min.js"></script>
    <!--<script src="registro.js" type="text/javascript"></script>    Muy posiblemente lo eliminemos en el futuro-->
</head>
<body>
    <header class="fadeInDown">
        <div class="title-container">
            <a href="https://ips.edu.ar/" target="_blank">
                <img src="images/IPS_Logo.png" alt="IPS-logo">
            </a>
            <h1 style="color: white;">Actividad VI: El formulario contraataca</h1>
        </div>
    </header>
    <main>
        <p class="sign">Registrarse</p>
        <form action="registro.php" method="post" >
            <input type="text" name="nombre" placeholder="Username..." required>
            <input type="password" name="contra" placeholder="Password..." required>
            <input type="password" name="contra" placeholder="Repetir password..." required>
            <input type="email" name="email" placeholder="Email..." required>
            <input type="file" id="img" name="img" accept="image/*" >
            <button class="submit" type="submit" name="enviar" id="registro_enviar" ><span>Enviar </span></button>
            
            <p class="forgot"><a href="iniciar_sesion.html">Ya tienes una cuenta?</p>          
        </form>
    </main>
    <footer style="position: fixed; bottom: 0;">
        <h3>Santiago C&oacute;</h3>
        <h3>Franco Gozzerino</h3>
        <h3>Juliana Consolati</h3>
    </footer>
    <?php
		if(isset($_POST['submit'])){
			require("registro.php");
		}
	?>
</body>
</html>