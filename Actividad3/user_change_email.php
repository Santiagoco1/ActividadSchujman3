<?php
    include "var.inc";
            $mysqli = new mysqli($HOST, $USER, $PASS, $DB);
            $sql = mysqli_query($mysqli,"SELECT * FROM $TABLA WHERE email = '".$_POST['email']."' " );
                if($f = mysqli_fetch_assoc($sql))
                    {
                        $token = rand (1, 2000000);;
                        $para       =    "".$_POST['email']."";
                        
                        $mysqli->query("UPDATE $TABLA SET token = $token  WHERE email = '$para' ");
                        $titulo     =    'Confirmation';
                        
                        $mensaje    = "<html>
                        <head>
                        </head>
                        <body>
                            <h1 style='color:black !important;'> Confirmation</h1>
                            <div>
                                <h2 style='color:black !important;'> Thank you for registering for Cute Data Protect.</h2>
                                <h2 style='color:black !important;'> Confirm your account! </h2>  
                                <a  style='font-size: 20px !important; color:#f6511d !important;' href='https://www.agssoft.ar/UNO/confirmation.php?email="  . $para . "&token=" . $token .  "&motive=3'> Haga click aqui para comenzar!</a> 
                            </div>
                            <div style='color:black !important;'> Contact: grupoUNO@gmail.com - Group One. </div> 
                        </body>
                        </html>";

                        $cabeceras =   'MIME-Version: 1.0' . "\r\n" .
                                       'From: grupoUNO@gmail.com' . "\r\n" .
                                       'Content-type: text/html; charset=iso-8859-1' . "\r\n" .
                                       'X-Mailer: PHP/' . phpversion();

                        mail($para, $titulo, $mensaje, $cabeceras);             
                        echo "<script>location.href='email_confirmation.html'</script>";                        

                    }
                    else
                    {                        
                        echo '<script>alert("There is not user with this email")</script> ';
                        echo "<script>location.href='change_pass.php'</script>";

                    }


?>
