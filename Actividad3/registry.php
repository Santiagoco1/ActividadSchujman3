
<link rel="stylesheet" href="css/loader">
<div class="background">
    <div class="loader"></div>
</div>
<script type="text/javascript">
        $(window).load(function() {
        $(".loader").fadeOut("slow");
    });
</script>

<?php
    include "var.inc";
            $mysqli = new mysqli($HOST, $USER, $PASS, $DB);
            $sql = mysqli_query($mysqli,"SELECT * FROM $TABLA WHERE email = '".$_POST['email']."' " );
                if($f = mysqli_fetch_assoc($sql))
                    {
                        echo '<script>alert("There is already a registered user with that password")</script> ';
                        echo "<script>location.href='sign_up.php'</script>";
                    }
                else 
                {
                    $sql = mysqli_query($mysqli,"SELECT * FROM $TABLA WHERE nombre = '".$_POST['nombre']."' " );
                    if($f = mysqli_fetch_assoc($sql))
                        {
                            echo '<script>alert("There is already a registered user with that name")</script> ';
                            echo "<script>location.href='sign_up.php'</script>";
                        }
                
                    else
                    {
                        
                        $token = rand (1, 2000000);;
                
                        $mysqli->query("insert into $TABLA (nombre, contra, email, token ) values ( '".$_POST['nombre']."' , '".$_POST['contra']."' , '".$_POST['email']."', '$token' )" ); 
                        $para       =    "".$_POST['email']."";
                        $titulo = 'Confirmate your account.';
                
                        $mensaje = "<html>
                        <head>
                        </head>
                        <body>
                            <h1 style='color:black !important;'> Confirmation</h1>
                            <div>
                                <h2 style='color:black !important;'> Thank you for registering for Cute Data Protect.</h2>
                                <h2 style='color:black !important;'> Confirm your account! </h2>  
                                <a  style='font-size: 20px !important; color:#f6511d !important;' href='https://www.agssoft.ar/UNO/user/confirmation.php?email="  . $para . "&token=" . $token .  "&motive=0'> Haga click aqui para comenzar!</a> 
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
                }

?>