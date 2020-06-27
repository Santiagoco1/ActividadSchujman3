<?php          
    session_start();
    include "var.inc";
        $mysqli = new mysqli($HOST, $USER, $PASS, $DB);

            $username = $_POST['email'];
            $pass = $_POST['contra'];
   
            $sql = mysqli_query($mysqli,"SELECT * FROM $TABLA WHERE email ='$username'");
            
            if( $f = mysqli_fetch_assoc($sql) )
            {

                $user = $f['nombre'];
                $orden = $f['orden'];
                
                /* Seteo las cookies */
                setcookie("user", $user );
                setcookie("id", $orden );
                
                $cuantos_logueos = $f['cuantos_logueos'] + 1 ;
                echo '<script>alert("' . $cuantos_logueos .'")</script> ';
                $mysqli->query("UPDATE $TABLA SET cuantos_logueos = '$cuantos_logueos'  WHERE email = '$orden' ");

                if($pass == $f['passadmin'])
                {
                    echo '<script>alert("BIENVENIDO ADMINISTRADOR")</script> ';
                    echo "<script>location.href='admin_responses.php'</script>";
                }
                else 
                {
                    if($pass == $f['contra'])
                    {
                        echo "<script>location.href='user_form.php'</script>";
                    }
                    else
                    {
                        echo '<script>alert("CONTRASEÑA INCORRECTA")</script> ';
                        echo "<script>location.href='sing_in.php'</script>";
                    }
                }
            }    
            else
            {
                echo '<script>alert("ESTE USUARIO NO EXISTE, PORFAVOR REGISTRESE PARA PODER INGRESAR")</script> ';   
                echo "<script>location.href='sing_in.php'</script>";	
            }
?>