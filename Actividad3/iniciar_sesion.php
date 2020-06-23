<?php
    //include("connect_db.php");

    //$miconexion = new connect_db;


    session_start();
    include "var.inc";

    $mysqli = new mysqli($HOST, $USER, $PASS, $DB);

        $username = $_POST['email'];
        $pass = $_POST['contra'];


        //la variable  $mysqli viene de connect_db que lo traigo con el require("connect_db.php");
        $sql = mysqli_query($mysqli,"SELECT * FROM Test1 WHERE email ='$username'");
        if($f = mysqli_fetch_assoc($sql2))
            {
                if($pass == $f['pasadmin'])
                    {
                        $_SESSION['id']=$f['id'];
                        $_SESSION['user']=$f['user'];
           
                        echo '<script>alert("BIENVENIDO ADMINISTRADOR")</script> ';
                        echo "<script>location.href='admin.php'</script>";
                    
                    }
                else
                    if($pass == $f['password'])
                        {
                            $_SESSION['id']=$f['id'];
                            $_SESSION['user']=$f['user'];
            
                            header("Location: index2.php");
                        }
                    else
                        {
                            echo '<script>alert("CONTRASEÑA INCORRECTA")</script> ';
                        
                            echo "<script>location.href='index.php'</script>";
                        }
            }
                else
                    {
                        
                        echo '<script>alert("ESTE USUARIO NO EXISTE, PORFAVOR REGISTRESE PARA PODER INGRESAR")</script> ';
                        
                        echo "<script>location.href='index.php'</script>";	

                    }
        
        
        


        $sql = mysqli_query($mysqli,"SELECT * FROM login WHERE email = '$username'");
       
?>