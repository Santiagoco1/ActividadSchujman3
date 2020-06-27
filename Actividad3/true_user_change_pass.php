<?php
    include "var.inc";
            $mysqli = new mysqli($HOST, $USER, $PASS, $DB);
            $pass = $_POST['contra'];  
            $token = $_COOKIE['token'];
            $email = $_COOKIE['email'];
            
            if($mysqli->query("UPDATE $TABLA SET contra = '$pass' WHERE token = '$token' AND email = '$email' ") === true)
                echo '<script>alert("Ya se ha cambiado la contraseña.")</script> ';
            
            unset($_COOKIE['token']);
            unset($_COOKIE['email']);
            echo "<script>location.href='sign_in.php'</script>";

?>