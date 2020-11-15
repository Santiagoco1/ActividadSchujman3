<link rel="stylesheet" href="../../css/loader">
<div class="background">
    <div class="loader"></div>
</div>
<script type="text/javascript">
        $(window).load(function() {
        $(".loader").fadeOut("slow");
    });
</script>
<?php


    include "../../var.inc";
            $mysqli = new mysqli($HOST, $USER, $PASS, $DB);
            
            if($_COOKIE['email'])
            {   
                $para = $_COOKIE['email'];
                setcookie('email');
                unset($_COOKIE['email']);
            }
            else            $para = $_POST['email'];
                
            $sql = mysqli_query($mysqli,"SELECT * FROM $TABLA WHERE email = '$para' " );
                if($f = mysqli_fetch_assoc($sql))
                    {
                        $token = rand (1, 2000000);;
                        
                        
                        $mysqli->query("UPDATE $TABLA SET token = $token  WHERE email = '$para' ");
                        $titulo     =    'Change password';
                    
                        $mensaje = "<html>
                        <head>
                        </head>
                        <body>
                            <h1 style='color:black !important;'> Confirmation change pass</h1>
                            <div>
                                <h2 style='color:black !important;'> Confirm hte change of the password! </h2>  
                                <a  style='font-size: 20px !important; color:#f6511d !important;' href='https://www.agssoft.ar/UNO/user/confirmation.php?email="  . $para . "&token=" . $token .  "&motive=1'> Haga click aqui para comenzar!</a> 
                            </div>
                            <div style='color:black !important;'> Contact: grupoUNO@gmail.com - Group One. </div> 
                        </body>
                        </html>";
                        $cabeceras =   'MIME-Version: 1.0' . "\r\n" .
                        'From: grupoUNO@gmail.com' . "\r\n" .
                        'Content-type: text/html; charset=iso-8859-1' . "\r\n" .
                        'X-Mailer: PHP/' . phpversion();
        
                        mail($para, $titulo, $mensaje, $cabeceras);             
                        echo "<script>window.location.href='../../email_confirmation.html'</script>";                        

                    }
                    else
                    {                        
                        echo '<script>alert("There is not user with this email")</script> ';
                        echo "<script>window.location.href='change_pass.php'</script>";

                    }


?>
