<?php
    include "../var.inc";
    $mysqli = new mysqli($HOST, $USER, $PASS, $DB);
    if($_GET)
    {
        if(isset($_GET['email']))
        {
            $email = $_GET['email'];
            if($email == '')
            {
                unset($email);
            }
        }
        if(isset($_GET['token']))
        {
            $token = $_GET['token'];
            if($token == '')
            {
                unset($token);
            }
        }
        if(isset($_GET['motive']))
        {
            $motive = $_GET['motive'];
            if($motive == '')
            {
                unset($motive);
            }
        }
        
        if(!empty($email) && !empty($token))
        {   
            if($motive == 0 )
            {
                $mysqli->query("UPDATE $TABLA SET confirmacion = 1  WHERE email = '$email' ");
                echo "<script>location.href='../sign_in.php'</script>";
            }
            if ($motive == 1)
            {
                setcookie("token", $token);
                setcookie("email", $email);
                echo "<script>location.href='change_pass/new_pass.php'</script>";
            }
            /* Dejo el motive 2 por si en algun momento agregamos la funcion para cambiar la contra de admin*/
            if ( $motive == 3)
            {
                setcookie("token", $token);
                echo "<script>location.href='change_email/new_email.php'</script>";
            }
        }
    }
    
?> 