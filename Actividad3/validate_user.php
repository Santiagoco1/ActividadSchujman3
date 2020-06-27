<?php          
    session_start();
    include "var.inc";
        $mysqli = new mysqli($HOST, $USER, $PASS, $DB);

            $username = $_POST['email'];
            $pass = $_POST['contra'];
   
            $sql = mysqli_query($mysqli,"SELECT * FROM $TABLA WHERE email ='$username'");
            if($f = mysqli_fetch_assoc($sql))
                {
                    if($pass == $f['passadmin'])
                        {
                            /* Seteo las cookies 
                            
                             */
                            
                            setcookie("id", $f['orden']);
                            setcookie("user", $f['nombre']);
                            ++ $f['cuantos_logueos'] ;
                            $f['ultimo_logueo'] = new DateTime();
                            $f['ultimo_logueo'] = getTimestamp();
                            $mysqli->query("insert into $TABLA (cuantos_logueos , ultimo_logueo) values ('++ $f['cuantos_logueos']' , '$f['ultimo_logueo']' )" );
                            
                            echo '<script>alert("BIENVENIDO ADMINISTRADOR")</script> ';
                            echo "<script>location.href='admin-responses.php'</script>";
                        
                        }
                    else
                        if($pass == $f['contra'])
                            {

                                /* Seteo las cookies  */
                                setcookie("user", $f['nombre']);
                                setcookie("id", $f['orden']);
                                
                                ++ $f['cuantos_logueos'] ;
                                $f['ultimo_logueo'] = new DateTime();
                                $f['ultimo_logueo'] = getTimestamp();
                                $mysqli->query("insert into $TABLA (cuantos_logueos , ultimo_logueo) values ( '++ $f['cuantos_logueos']' , '$f['ultimo_logueo']' )" );

                                echo "<script>location.href='user-form.php'</script>";
                        
                        /*      header("Location: user-formulario.html");*/
                            }
                        else
                            {
                                echo '<script>alert("CONTRASEÑA INCORRECTA")</script> ';
                                echo "<script>location.href='sign-in.php'</script>";
                            }
                }
                    else
                        {
                            echo '<script>alert("ESTE USUARIO NO EXISTE, PORFAVOR REGISTRESE PARA PODER INGRESAR")</script> ';   
                            echo "<script>location.href='sign-in.php'</script>";	
                        }
?>