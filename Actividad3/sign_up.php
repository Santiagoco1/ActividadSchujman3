<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exercise IV</title>
    <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
    <link rel="stylesheet" href="css/var.css">
    <link rel="stylesheet" href="css/general.css">
    <link rel="stylesheet" href="css/header.css">
    <link rel="stylesheet" href="css/footer.css">
    <link rel="stylesheet" href="css/registro.css">
    <link rel="stylesheet" href="css/animations.css">
    <link rel="Shortcut Icon" href="images/dog.png">
    <script src="https://code.jquery.com/jquery-3.4.0.min.js"></script>
    <script src="check_password.js" type="text/javascript"></script> 
</head>
<body>
    <header class="fadeInDown">
        <div class="title-container">
            <a href="https://ips.edu.ar/" target="_blank">
                <img src="images/IPS_Logo.png" alt="IPS-logo">
            </a>
            <h1 style="color: white;">Exercise IV</h1>
        </div>
        <div class="img-container">
            <a href="index.html">
                <img src="images/home.png" alt="home">
                <h6>Home</h6>
            </a>
        </div>
    </header>
    <main>
        <p class="sign">Sign Up</p>
        <form action="registry.php" method="post" id="register-form"  onSubmit = "return checkPassword(this)">
            <input type="text" name="nombre" placeholder="Username..." required>
            <input type="password" name="contra" id="contra" placeholder="Password..." required>
            <input type="password" name="contra2" id="contra2" placeholder="Repeat Password..." required>
            <input type="email" name="email" placeholder="Email..." required> 
            <button class="submit" type="submit" name="enviar" id="registro_enviar" ><span>Send </span></button>
            <p class="forgot"><a href="sign_in.php">Do you already have an account?</p>          
        </form>
    </main>
    <footer style="position: fixed; bottom: 0;">
        <h3>Santiago C&oacute;</h3>
        <h3>Franco Gozzerino</h3>
        <h3>Juliana Consolati</h3>
    </footer>
    <?php
		if(isset($_POST['submit']))
			require("registry.php");
    ?>
</body>
</html>