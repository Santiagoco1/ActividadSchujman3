<?php
include "var.inc";

$mysqli = new mysqli($HOST, $USER, $PASS, $DB,$TABLA);




	/* Crea la tabla si esta no existe. La tabulacion es para que quede mas lindo. En total 24*/ 
	$registro = $mysqli_query("create table if not exists $TABLA (
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
	)");
	/* Mete las cosas en la tabla */
	$mysqli->query("insert into $TABLA (apellido, nombre, fecha_nacimien, dni, domicilio, nro_emer, nro_obrasocial,
							grupo_sanguineo, factor, peso, altura, email, telefono_fijo, telefono_celu, 
							telefono_altern, enfermedades, medicamentos, foto_cara, color_fav, talle_zapato)
					values ('".$_POST['apellido']."','".$_POST['nombre'].','"".$_POST['fecha_nacimien'].','"
							".$_POST['dni']."','".$_POST['domicilio']."','".$_POST['nro_emer']."','
							".$_POST['nro_obrasocial']."','".$_POST['grupo_sanguineo']."','".$_POST['factor']."','
							".$_POST['peso']."','".$_POST['altura']."','
							".$_POST['email']."','".$_POST['telefono_fijo']."','".$_POST['telefono_celu']."','
							".$_POST['telefono_altern']."','".$_POST['enfermedades']."','".$_POST['medicamentos']."','
							".$_POST['foto_cara']."','".$_POST['color_fav']."','".$_POST['talle_zapato']."')");


mysqli_close($conn);
?>