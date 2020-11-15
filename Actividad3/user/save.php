<link rel="stylesheet" href="css/loader">
<div class="background">
    <div class="loader"></div>
</div>
<script type="text/javascript">
        $(window).load(function() {
        $(".loader").fadeOut("slow");
    });
</script>

<?php

session_start();
if (@!$_COOKIE['user']) {
	header("Location:../sign_in.php");
}
include "../var.inc";
	$mysqli = new mysqli($HOST, $USER, $PASS, $DB);
	$ID = $_COOKIE["id"];
	$result = mysqli_query($mysqli,  "SELECT * from $TABLA2 WHERE id = $ID" );

   if($f = mysqli_fetch_assoc($result))
		{
			echo '<script>alert("You have already submitted a form. Only one is allowed per user.")</script> ';
			echo "<script>window.location.href='user_profile.php'</script>";
		}

	
/* Somos conscientes de que se puede poner un valor default en la tabla, pero por como hicimos la funcion que toma los datos, aun cuando estos esten vacios, los llena con "" */
	$apellido="".$_POST['apellido']."";
	if (strcmp($apellido, "") == 0	) 		$apellido="--";
	
	
	$nombre="".$_POST['nombre']."";
	if (strcmp($nombre, "") == 0	) 		$nombre="--";
	
	
	$domicilio="".$_POST['domicilio']."";
	if (strcmp($domicilio, "") == 0	) 		$domicilio="--";
	
	
	$nro_emer="".$_POST['nro_emer']."";
	if (strcmp($nro_emer, "") == 0	) 		$nro_emer="--";
	
	
	$nro_obrasocial="".$_POST['nro_obrasocial']."";
	if (strcmp($nro_obrasocial, "") == 0	) 		$nro_obrasocial="--";
	
	
	$grupo_sanguineo="".$_POST['grupo_sanguineo']."";
	if (strcmp($grupo_sanguineo, "") == 0	) 		$grupo_sanguineo="--";
	
	
	$factor="".$_POST['factor']."";
	if (strcmp($factor, "") == 0	) 		$factor="--";
	
	
	$telefono_celu="".$_POST['telefono_celu']."";
	if (strcmp($telefono_celu, "") == 0	) 		$telefono_celu="--";
	/* Somos  conscientes de que en principio los 3 telefonos siempre van a tener algo, pero nunca esta demas colocarles un valor default*/
	$telefono_fijo="".$_POST['telefono_fijo']."";
	if (strcmp($telefono_fijo, "") == 0	) 		$telefono_fijo="--";
	
	$telefono_altern="".$_POST['telefono_altern']."";
	if (strcmp($telefono_altern, "") == 0	) 		$telefono_altern="--";
	
	$sexo="".$_POST['sexo']."";
	if (strcmp($sexo, "") == 0	) 		$sexo="--";
	
	$medicamentos="".$_POST['medicamentos']."";
	if (strcmp($medicamentos, "") == 0	) 		$medicamentos="--";
	
	$color_fav="".$_POST['color_fav']."";
	if (strcmp($color_fav, "") == 0	) 		$color_fav="--";
	
	$email="".$_POST['email']."";
	if (strcmp($email, "") == 0	) 		$email="--";
	
	$arrayEnfermedades ="".$_POST['enfermedades1']." ".$_POST['enfermedades2']." ".$_POST['enfermedades3']." ".$_POST['enfermedades4']."";
	if(strcmp ($arrayEnfermedades, "   ") == 0)		$arrayEnfermedades="--";
	$mysqli->query("insert into $TABLA2 (id, apellido, nombre, dni, domicilio, fecha_nacimien ,peso,grupo_sanguineo , factor ,altura , email , telefono_fijo, telefono_celu,	telefono_altern , talle_zapato,  medicamentos,  nro_emer, nro_obrasocial , enfermedades, color_fav, sexo ) values ('$ID',  '$apellido', '$nombre', '".$_POST['dni']."','$domicilio','".$_POST['fecha_nacimien']."' ,'".$_POST['peso']."' , '$grupo_sanguineo' , '$factor' , '".$_POST['altura']."' , '$email' , '$telefono_fijo' , '$telefono_celu' , '$telefono_altern' , '".$_POST['talle_zapato']."' , '$medicamentos' , ' $nro_emer','$nro_obrasocial' , '$arrayEnfermedades' , '$color_fav' , '$sexo' )" ); 
	echo "<script>window.location.href='user_profile.php'</script>";
?>
