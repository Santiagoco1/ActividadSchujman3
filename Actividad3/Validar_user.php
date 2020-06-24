<?php
                       
    session_start();
    include "var.inc";

    $mysqli = new mysqli($HOST, $USER, $PASS, $DB);

        $username = $_POST['email'];
        $pass = $_POST['contra'];

        $sql = mysqli_query($mysqli,"SELECT * FROM Test1 WHERE email ='$username'");
        if($f = mysqli_fetch_assoc($sql))
            {
                if($pass == $f['passadmin'])
                    {
                        /* Seteo las cookies  */
                        
                        setcookie("id", $f['orden']);
                        setcookie("user", $f['nombre']);
                        
                        
                        echo '<script>alert("BIENVENIDO ADMINISTRADOR")</script> ';
                        echo "<script>location.href='admin-respuestas.php'</script>";
                    
                    }
                else
                    if($pass == $f['contra'])
                        {
                            /* Seteo las cookies  */
                        
                            setcookie("id", $f['orden']);
                            setcookie("user", $f['nombre']);
                        
                            echo '<script>alert("BIENVENIDO USER")</script> ';
                            echo "<script>location.href='user-formulario.php'</script>";
                    
                    /*        header("Location: user-formulario.html");*/
                        }
                    else
                        {
                            echo '<script>alert("CONTRASEÑA INCORRECTA")</script> ';
                        
                            echo "<script>location.href='index.html'</script>";
                        }
            }
                else
                    {
                        
                        echo '<script>alert("ESTE USUARIO NO EXISTE, PORFAVOR REGISTRESE PARA PODER INGRESAR")</script> ';
                        
                        echo "<script>location.href='index.html'</script>";	

                    }
        
        
        

     
?>