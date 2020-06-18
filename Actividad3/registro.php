<?php

    include "var.inc";

    $mysqli = new mysqli($HOST, $USER, $PASS, $DB);
    
    $mysqli->query("insert into Test1 ( contra, nombre, email) values ( '".$_POST['contra']."' , '".$_POST['nombre']."' , '".$_POST['email']."')" );

    $para = '".$_POST['email']."'
    $titulo    = 'Validacion de registro';
    $mensaje   = 'Hola gato';
    $cabeceras = 'From: grupoUNO@example.com' . "\r\n" .
    'Reply-To: grupoUNO@example.com' . "\r\n" .
    'X-Mailer: PHP/' . phpversion();

    mail($para, $titulo, $mensaje, $cabeceras);
?>
