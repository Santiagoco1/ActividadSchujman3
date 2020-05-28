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
		enfermedades	varchar(100),
		medicamentos	text,
		sexo			text,
		color_fav		text,
		talle_zapato	int,
		cuando	 		timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP(),
		orden			int not null primary key auto_increment
	)");*/
	/* Mete las cosas en la tabla */
    if(" ".$_POST['nro_obrasocialChk']." " == 'Yes' )	{
        $obrasocial=" ".$_POST['nro_obrasocial']." ";}
    else {$obrasocial="No";}
    if(" ".$_POST['nro_emerChk']." " == 'Yes' )	{
        $emergencia=" ".$_POST['nro_emer']." ";}
	else {$emergencia="No";}
	if(" ".$_POST['medicamentoChk']." " == 'Yes' )	{
        $medicamentos=" ".$_POST['medicamentos']." ";}
    else {$medicamentos="No";}
    
$arrayEnfermedades =" ".$_POST['enfermedades4']." ,".$_POST['enfermedades3']." , ".$_POST['enfermedades2']." , ".$_POST['enfermedades1']." ";

$mysqli->query("insert into test1 (apellido, nombre, dni, domicilio, fecha_nacimien ,peso,grupo_sanguineo , factor ,altura , email , telefono_fijo, telefono_celu,	telefono_altern , talle_zapato,  medicamentos,  nro_emer, nro_obrasocial , enfermedades, color_fav, sexo ) values ('".$_POST['apellido']."','".$_POST['nombre']."','".$_POST['dni']."','".$_POST['domicilio']."','".$_POST['fecha_nacimien']."' ,'".$_POST['peso']."' , '".$_POST['grupo_sanguineo']."' , '".$_POST['factor']."' , '".$_POST['altura']."' , '".$_POST['email']."' , '".$_POST['telefono_fijo']."' , '".$_POST['telefono_celu']."' , '".$_POST['telefono_altern']."' , '".$_POST['talle_zapato']."' , '$medicamentos' , '$emergencia','$obrasocial' , '$arrayEnfermedades' , '".$_POST['color_fav']."' , '".$_POST['sexo']."' )" ); 
/*
       
 ,
,
	

$mysqli->query("insert into test1 (apellido, nombre,  dni, domicilio)
				values ('".$_POST['apellido']."','".$_POST['nombre'].',
   '"".$_POST['dni']."','".$_POST['domicilio']."')");
   


   /*foto_cara, nro_emer, nro_obrasocial, medicamentos,color_fav,fecha_nacimien,grupo_sanguineo, factor,altura, enfermedades,peso, email, telefono_fijo, telefono_celu, 
   telefono_altern,     talle_zapato
   '"".$_POST['fecha_nacimien'].', '".$_POST['grupo_sanguineo']."','".$_POST['factor']."',				
   ,
   '".$_POST['foto_cara']."', '".$_POST['medicamentos']."', 
'
   
   )"
      $_POST['foto_cara']."',*/

?>