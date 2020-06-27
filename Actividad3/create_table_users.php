<?php
include "var.inc";

$mysqli = new mysqli($HOST, $USER, $PASS, $DB);
	/*Crea la tabla si esta no existe. La tabulacion es para que quede mas lindo. En total 24 */
    $mysqli->query("drop table if exists $TABLA");
    $registro = $mysqli->query("create table if not exists $TABLA (	
		nombre			varchar(60) ,
		cuantos_logueos	int			,
		ultimo_logueo	DATE		,
        confirmacion	int		,
		contra  		varchar(60) ,
		passadmin		varchar(60)	,
		email			text        ,
		token			int			,
        foto            text        ,
        
        cuando	 		timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP(),
		orden			int not null primary key auto_increment
    )");
    
    /* Crea la tabla si esta no existe */
    $mysqli->query("drop table if exists $TABLA2");
    $registro = $mysqli->query("create table if not exists $TABLA2 (	
		id				  int,
    	apellido		varchar(60) ,
		nombre			varchar(60)  ,
		fecha_nacimien	date ,
		dni				  int  ,
		domicilio		text ,
		nro_emer		text ,
		nro_obrasocial	text ,
		grupo_sanguineo	text ,
		factor			text ,
		peso			  int ,
		altura			int ,
		telefono_celu	text ,
		telefono_fijo	text ,
		telefono_altern	text ,
		email			  text ,
		enfermedades	varchar(100) ,
		medicamentos	text ,
		sexo			text ,
		color_fav		text ,
		talle_zapato	int ,
		cuando	 		timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP(),
		orden			int not null primary key auto_increment
    )");
  
?>