<?php
    include "var.inc";
            $mysqli = new mysqli($HOST, $USER, $PASS, $DB);
            $email = $_POST['email'];  
            $token = $_COOKIE['token'];
            $id = $_COOKIE['id'];
            
            if($mysqli->query("UPDATE $TABLA SET email = '$email' WHERE token = '$token' AND orden = '$id' ") === true)
                echo '<script>alert("Ya se ha cambiado su email.")</script> ';
            
            unset($_COOKIE['token']);
            unset($_COOKIE['id']);
            unset($_COOKIE['user']);
            echo "<script>location.href='sign_in.php'</script>";

?>