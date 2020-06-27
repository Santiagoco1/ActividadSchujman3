<?php
include "var.inc";
        $mysqli = new mysqli($HOST, $USER, $PASS, $DB);
        $sql = mysqli_query($mysqli,"SELECT * FROM $TABLA WHERE email = '".$_POST['email']."' " );
            if($f = mysqli_fetch_assoc($sql))
                {
                    echo '<script>alert("No hay ningun usuario con ese email")</script> ';
                    echo "<script>location.href='change_pass.php'</script>";
                }
                else
                {
                    $para       =    "".$_POST['email']."";
                    $titulo     =    'Confirmación cambio de contraseña';
                    
                    $mensaje    = "<html>
                    <head>
                    </head>
                    <body>
                        <h1 style='color:black !important;'> Confirmación</h1>
                        <div>
                            <h2 style='color:black !important;'> Gracias por registrarse a Cute Data Protect.</h2>
                            <h2 style='color:black !important;'> Confirme su cuenta! </h2>  
                            <a href='https://www.agssoft.ar/UNO/sing-In.php' style='font-size: 20px !important; color:#f6511d !important;'> Haga click aqui para comenzar!</a> 
                        </div>
                        <div style='color:black !important;'> Contacto: grupoUNO@gmail.com - Grupo Uno. </div> 
                    </body>
                    </html>";

                    $cabeceras =   'MIME-Version: 1.0' . "\r\n" .
                                   'From: grupoUNO@gmail.com' . "\r\n" .
                                   'Content-type: text/html; charset=iso-8859-1' . "\r\n" .
                                   'X-Mailer: PHP/' . phpversion();

                    mail($para, $titulo, $mensaje, $cabeceras);             
                    echo '<script>alert("Se te enviara un mail para que confirmes el cambio de contraseña")</script> ';
                    echo "<script>location.href='email_confirmation_pass.html'</script>";                        
                }


?>
