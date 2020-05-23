<?php
include "var.inc";

$mysqli = new mysqli($HOST, $USER, $PASS, $DB);
	/* Crea la tabla si esta no existe. La tabulacion es para que quede mas lindo. En total 24 
	$registro = $mysqli_query("create table if not exists $TABLA (
		agssoft.ar/UNO
		apellido		varchar(60),
		nombre			varchar(60),
		fecha_nacimien	date,
		dni				text,
		domicilio		text,
		nro_emer		text,
		nro_obrasocial	text,
		grupo_sanguineo	text,
		factor			text,
		peso			int,
		altura			int,
		telefono_celu	text,
		telefono_fijo	text,
		telefono_altern	text,
		email			text,
		enfermedades	text,
		medicamentos	text,
		foto_cara		file,
		color_fav		text,
		talle_zapato	int,
		cuando	 		timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP(),
		orden			int not null primary key auto_increment
	)");*/
	/* Mete las cosas en la tabla */
	$mysqli->query("insert into clientes (apellido, nombre, dni, domicilio) values ('".$_POST['apellido']."','".$_POST['nombre']."','".$_POST['dni']."','".$_POST['domicilio']."')");
/*
	$mysqli->query("insert into test1 (apellido, nombre,  dni, domicilio)
				values ('".$_POST['apellido']."','".$_POST['nombre'].',
   '"".$_POST['dni']."','".$_POST['domicilio']."')");
   


   /*foto_cara, nro_emer, nro_obrasocial, medicamentos,color_fav,fecha_nacimien,grupo_sanguineo, factor,altura, enfermedades,peso, email, telefono_fijo, telefono_celu, 
   telefono_altern,     talle_zapato
   '"".$_POST['fecha_nacimien'].', '".$_POST['grupo_sanguineo']."','".$_POST['factor']."',				
   '".$_POST['nro_emer']."','".$_POST['nro_obrasocial']."','".$_POST['enfermedades']."',
   '".$_POST['color_fav']."','".$_POST['foto_cara']."', '".$_POST['medicamentos']."', 
'".$_POST['peso']."','".$_POST['altura']."','
   '".$_POST['email']."','".$_POST['telefono_fijo']."','".$_POST['telefono_celu']."',
   '".$_POST['telefono_altern']."',
   '".$_POST['talle_zapato']."')"
   $_POST['foto_cara']."', '".$_POST['medicamentos']."', */

?>