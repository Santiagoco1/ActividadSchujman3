<?php
    include "var.inc";
    $mysqli = new mysqli($HOST, $USER, $PASS, $DB);
    $estado = $_POST['estado'];
    $id = $_POST['estado2'];
    
    $mysqli->query("UPDATE $TABLA SET confirmacion = $estado  WHERE orden = $id ");
    $para       = $_POST['estado3'];
                        
    if($estado == 2)
    {
                $titulo = 'Blocked';
                
                $mensaje = "<html>
                <head>
                </head>
                <body>
                    <h1 style='color:black !important;'> You've been banned.</h1>
                    <div>
                        <h2 style='color:black !important;'> Was that a mistake?</h2>
                        <h2 style='color:black !important;'> Contact us at this e-mail address for any questions you may have grupoUNO@gmail.com</h2>  
                    </div>
                    <div style='color:black !important;'> Regards, Group ONE.</div> 
                </body>
                </html>";
                $cabeceras =   'MIME-Version: 1.0' . "\r\n" .
                'From: grupoUNO@gmail.com' . "\r\n" .
                'Content-type: text/html; charset=iso-8859-1' . "\r\n" .
                'X-Mailer: PHP/' . phpversion();

        mail($para, $titulo, $mensaje, $cabeceras);             
                            
    }
    else
    {
        $titulo = 'Unblocked';
                
        $mensaje = "<html>
        <head>
        </head>
        <body>
            <h1 style='color:black !important;'> You've been Unbanned.</h1>
            <div>
                <h2 style='color:black !important;'> Welcome back to Cute Data Protect!</h2>
                <h2 style='color:black !important;'> Contact us at this e-mail address for any questions you may have grupoUNO@gmail.com</h2>  
            </div>
            <div style='color:black !important;'> Regards, Group ONE.</div> 
        </body>
        </html>";
        $cabeceras =   'MIME-Version: 1.0' . "\r\n" .
        'From: grupoUNO@gmail.com' . "\r\n" .
        'Content-type: text/html; charset=iso-8859-1' . "\r\n" .
        'X-Mailer: PHP/' . phpversion();

        mail($para, $titulo, $mensaje, $cabeceras);         
    }
    echo "<script>location.href='admin_user_control.php'</script>";  
?>