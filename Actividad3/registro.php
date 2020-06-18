<?php

    include "var.inc";

    $mysqli = new mysqli($HOST, $USER, $PASS, $DB);
    
    $mysqli->query("insert into Test1 ( contra, nombre, email) values ( '".$_POST['contra']."' , '".$_POST['nombre']."' , '".$_POST['email']."')" );


?>
