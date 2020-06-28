<!DOCTYPE html>
<html lang="es">
<?php
	session_start();
	if ($_COOKIE['user']  ) {
        if($_COOKIE['admin'])
            header("Location:admin_responses.php");
        else
            header("Location:user_profile.php");
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
    <link rel="stylesheet" href="css/registro.css">
    <link rel="Shortcut Icon" href="images/dog.png">
    <script src="https://code.jquery.com/jquery-3.4.0.min.js"></script>
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
        <p class="sign">Sign In</p>
        <form action="validate_user.php" method="post" >
            <input type="email" name="email" placeholder="email..." required>
            <input type="password" name="contra" placeholder="Password..." required>
            <button class="submit" type="submit" name="enviar" id="registro_enviar" ><span>Send </span></button>
            <p class="forgot"><a href="change_pass.php">Forgot your password?</p>  
            <p class="forgot" style="padding-top: 0px"><a href="sign_up.php">You don't have an account?</p>          
        </form>
    </main>
    <footer style="position: fixed; bottom: 0;">
        <h3>Santiago C&oacute;</h3>
        <h3>Franco Gozzerino</h3>
        <h3>Juliana Consolati</h3>
    </footer>
</body>
</html>