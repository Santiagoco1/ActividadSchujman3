<?php
   
    include "var.inc";

    $mysqli = new mysqli($HOST, $USER, $PASS, $DB);
    $value = $mysqli->query("SELECT orden from Test1 where contra = '".$_POST['contra']."' and nombre =  '".$_POST['nombre']."' and email = '".$_POST['email']."') " );

    setcookie("User", $value);
    
    echo '<script language="javascript">window.alert("juas"); ;</script>';
   
    
?>