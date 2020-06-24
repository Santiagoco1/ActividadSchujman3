<?php

    include "var.inc";

    $mysqli = new mysqli($HOST, $USER, $PASS, $DB);
    $sql = mysqli_query($mysqli,"SELECT * FROM Test1 WHERE email = '".$_POST['email']."' ");
        if($f = mysqli_fetch_assoc($sql))
            {
                       
            }
        else
        {
            $mysqli->query("insert into Test1 (nombre, contra, email ) values ( '".$_POST['nombre']."' , '".$_POST['contra']."' , '".$_POST['email']."' )" ); 
            echo '<script>alert("Se te enviara un mail para que confirmes el usuario")</script> ';
            echo "<script>location.href='registrarme.php'</script>";
            $para      =    "".$_POST['email']."";
            $titulo    =    'ATR rey';
            $mensaje   =    'Hola gato';
            $cabeceras =    'From: grupoUNO@example.com' . "\r\n" .
                            'Reply-To: grupoUNO@example.com' . "\r\n" .
                            'X-Mailer: PHP/' . phpversion();

            mail($para, $titulo, $mensaje, $cabeceras);
            
        }
    
?>
