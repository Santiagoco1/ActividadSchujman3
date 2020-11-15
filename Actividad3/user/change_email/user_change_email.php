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
    session_start();
    if (@!$_COOKIE['user']) {
        header("Location:../../sing_in.php");
    }
    include "../../var.inc";
    
        $mysqli = new mysqli($HOST, $USER, $PASS, $DB);
        $id = $_COOKIE['id'];
        $sql2 = mysqli_query($mysqli,"SELECT * FROM $TABLA WHERE orden = $id " );
        $rows = mysqli_fetch_assoc($sql2);
        if ($rows["confirmacion"] == 2 )
        {
            echo '<script>alert("This user was banned")</script> ';
            echo "<script>window.location.href='../../sign_out.php'</script>";
        }


                $para       =    $_COOKIE['email'];
                echo '<script> alert("'. $para. '")</script>';
            $sql = mysqli_query($mysqli,"SELECT * FROM $TABLA WHERE email = '$para' " );
                if($f = mysqli_fetch_assoc($sql))
                    {
                        $token = rand (1, 2000000);;
                        
                        
                        $mysqli->query("UPDATE $TABLA SET token = $token  WHERE email = '$para' ");
                        $titulo     =    'Change email ';
                    
                        $mensaje = "<html>
                        <head>
                        </head>
                        <body>
                            <h1 style='color:black !important;'> Confirmation change email</h1>
                            <div>
                                <h2 style='color:black !important;'> Confirm hte change of the email! </h2>  
                                <a  style='font-size: 20px !important; color:#f6511d !important;' href='https://www.agssoft.ar/UNO/user/confirmation.php?email="  . $para . "&token=" . $token .  "&motive=3'> Haga click aqui para comenzar!</a> 
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
                        echo "<script>window.location.href='../change_pass/change_pass.php'</script>";

                    }

?>
