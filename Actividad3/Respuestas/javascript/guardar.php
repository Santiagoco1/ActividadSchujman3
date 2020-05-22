<?php
include "var.inc";

$mysqli = new mysqli($HOST, $USER, $PASS, $DB,$TABLA);


if (mysqli_connect_error()) {
    die("Database connection failed: " . mysqli_connect_error());
}
echo "Connected successfully";


/* Crea la tabla si esta no existe*/ 
$mysqli->query("drop table if exists $TABLA");
$registro = $mysqli->query("create table if not exists $TABLA (
	apellido	    varchar(60),
	nombre		varchar(60),
	telefono	text,
	email		text,
	clave 		text,
	cuando	 	timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP(),
	orden		int not null primary key auto_increment
)");
/* Mete las cosas en la tabla */
$mysqli->query("insert into $TABLA (apellido, nombre, email, telefono, clave)
     values ('".$_POST['apellido']."','".$_POST['nombre']."','".$_POST['email']."','".$_POST['telefono']."','".$_POST['clave']."')");

?>