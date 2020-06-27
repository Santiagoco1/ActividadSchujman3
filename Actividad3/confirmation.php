<?php
    include "var.inc";
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
        if(!empty($email) && !empty($token))
        {   
            echo '<script>alert("' . $email . ' ")</script> ';
            
            if($mysqli->query("UPDATE $TABLA SET confirmacion = 1  WHERE email = '$email' ") === true){ 
                echo '<script>alert("Funco")</script> ';
                     
            } else { 
                echo '<script>alert("No funco")</script> ';
                     
            }  
            echo "<script>location.href='sing_in.php'</script>";
        }
    }
    
?> 