<!DOCTYPE html>
<html lang="es">

<?php
	session_start();
	if (@!$_COOKIE['user']  ) {
		header("Location:iniciar_sesion.php");
    }
    include "var.inc";
            $mysqli = new mysqli($HOST, $USER, $PASS, $DB);
            $id = $_COOKIE['id'];
            $sql = mysqli_query($mysqli,"SELECT * FROM $TABLA WHERE orden = $id " );
            $rows3 = mysqli_fetch_assoc($sql);
            if ($rows3["confirmacion"] == 2 )
            {
                echo '<script>alert("This user was banned")</script> ';
                echo "<script>location.href='sign_out.php'</script>";
            }

?>

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exercise IV</title>
    <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
    <link rel="stylesheet" href="css/var.css">
    <link rel="stylesheet" href="css/general.css">
    <link rel="stylesheet" href="css/header.css">
    <link rel="stylesheet" href="css/form.css">
    <link rel="stylesheet" href="css/footer.css">
    <link rel="stylesheet" href="css/animations.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="Shortcut Icon" href="images/dog.png">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.7.2/jquery.min.js"> 
    <script src="scripts.js" type="text/javascript"></script>
</head>

<body>
    <header class="fadeInDown">
        <div class="title-container">
            <a href="https://ips.edu.ar/" target="_blank">
                <img src="images/IPS_Logo.png" alt="IPS-logo">
            </a>
            <h1 style="color: white;">Form</h1>
        </div>
        <div class="links">
            <div class="img-container">
                <a href="user_profile.php">   
                    <img src="images/profile.png" alt="respuestas">
                    <h6>Profile</h6>
                </a>
            </div>
            <div class="img-container">
                <a href="sign_out.php">
                    <img src="images/logOut.png" alt="actividad1">
                    <h6>Log Out</h6>
                </a>
            </div>
        </div>
    </header>
    
    <main>
        <form action="save.php" method="post" id="registro" name="registro">
            <div class="form-title" >
                <h1>Data</h1>
            <div class="form-body"  >
                <!-- Nombre -->
                <div class="nombre">
                    <h3>Name</h3>
                    <input type="text" name="nombre"  style="grid-area: nombre;" placeholder="Your name..." >
                </div>
                <!-- Apellido -->                            
                <div class="apellido" style="grid-area: apell .                                   ido;">
                    <h3>Last-name</h3>
                    <input nametype="text" name="apellido" placeholder="Your last-name...">
                </div>
                <!-- Edad (edad maxima 120 años ) -->
                <div class="fecha" style="grid-area: fecha;">
                    <h3>Birth day</h3>
                    <input type="date" name="fecha_nacimien" id="fecha_nacimien" min="1900-01-01" required>
                </div>
                <!-- DNI -->
                <div class="dni" style="grid-area: dni;">
                    <h3>DNI</h3>
                    <input type="tel" name="dni" pattern="[0-9]{8}" placeholder="Your DNI..">
                </div>
                <!-- Modo sexo --> 
                <div class="cara" style="grid-area: sexo;">
                    <h3>Sex</h3>
                    <div class="select">
                        <select name="sexo">
                            <option value="none" selected disabled hidden> 
                                Select a option 
                            </option> 
                            <option value="Femenino">Female</option> 
                            <option value="Masculino">Male</option> 
                        </select>
                    </div>
                </div> 
                <!-- Domicilio -->
                <div class="domic" style="grid-area: domic;">
                    <h3>Residence</h3>
                    <input type="text" name="domicilio" placeholder="Your address..">
                </div>
                <!-- Emergencia -->
                <div class="nro_emer" style="grid-area: emerg;">
                    <h3>Are you affiliated with an emergency service?</h3>
                    <div class="radio-input">
                        <label for="chkYes" style="grid-area: radio-si;">
                            <input onclick="desbloqueo( 'nro_emerChk' )"  value="Yes" type="radio" id="chkYes" name="nro_emerChk" style="grid-area: radio-input-si;"/>
                            Yes
                            </label>
                        <label for="chkNo" style="grid-area: radio-no;">
                            <input onclick="bloqueo( 'nro_emerChk' )" value="No" type="radio" id="chkNo" name="nro_emerChk"  style="grid-area: radio-input-no;"/>
                            No
                        </label>
                        <input type="text" id="nro_emerChk" name="nro_emer" style="grid-area: radio-input-cual; opacity: 0; overflow: hidden;" placeholder="Which one?"/>
                    </div>
                </div>
                <!-- Obra Social -->
                <div class="obra" style="grid-area: obra;">
                    <h3>Are you affiliated with a social work?</h3>
                    <div class="radio-input"> 
                        <label for="chkYes" style="grid-area: radio-si;">
                            <input onclick="desbloqueo( 'nro_obrasocialChk' )" value="Yes" type="radio" id="chkYes" name="nro_obrasocialChk" style="grid-area: radio-input-si;"/>
                            Yes
                        </label>
                        <label for="chkNo" style="grid-area: radio-no;">
                            <input onclick="bloqueo( 'nro_obrasocialChk' )" value="No" type="radio" id="chkNo" name="nro_obrasocialChk"  style="grid-area: radio-input-no;"/>
                            No
                        </label>
                        <input type="text" id="nro_obrasocialChk" name="nro_obrasocial"  style="grid-area: radio-input-cual; opacity: 0; overflow: hidden;" placeholder="Which one?"/>
                    </div>
                </div>
                <!-- Grupo Sanguinio -->
                <div class="grupo" style="grid-area: grupo;">
                    <h3>Blood type</h3>
                    <div class="select">
                    <select name="grupo_sanguineo">
                        <option value="none" selected disabled hidden> 
                            Select an option 
                        </option> 
                        <option value="A">A </option> 
                        <option value="AB">AB</option> 
                        <option value="0">0</option>
                        <option value="B">B</option>
                    </select>
                    </div>
                </div>
                <!-- Factor Sanguinio -->
                <div class="factor" style="grid-area: factor;">
                    <h3>Blood factor</h3>
                    <div class="select">
                        <select name="factor">
                            <option value="none" selected disabled hidden> 
                                Select an option
                            </option> 
                            <option value="+"> + </option> 
                            <option value="-"> - </option> 
                        </select>
                        </div>
                </div>
                    <!-- Peso Corporal -->
                <div class="peso" style="grid-area: peso;">
                    <h3>Body weight (range between 0kg and 300kg)</h3>
                    <input type="number" id="quantity" name="peso" min="0" max="300" step="1" value="0" style="margin: 0; padding: 4px; color: white;">
                </div>
                <!-- Altura -->
                <div class="altura" style="grid-area: altura;">
                    <h3>Height (range between 0cm and 200cm)</h3>
                    <div class="range-wrap" style="display: flex;">
                        <input type="range" name="altura" class="range" id="vol" name="altura" min="0" max="200" value="100">
                        <output class="bubble"></output>
                    </div>
                </div>
                <!-- Enfermedades -->
                <div class="enfermedades" style="grid-area: enfermedades;">
                    <h3>Which of these diseases have you suffered?</h3>
                    <div class ="checkbox-input" >
                        <input  type="checkbox"  value="Coronavirus" name="enfermedades1">
                        <label  for="coronavirus">Covid-19</label><br>
                        <input  type="checkbox" value="Sida"  name="enfermedades2">
                        <label  for="Sida">Sida</label><br>
                        <input  type="checkbox" value="Otaku" name="enfermedades3">
                        <label  for="Otaku">Otaku</label>
                        <input  type="checkbox" value="Ninguna"  name="enfermedades4">
                        <label  for="ninguna">None</label>
                    </div>
                </div>
                <!--Medicamentos-->
                <div class="meds" style="grid-area: meds;">
                    <h3>Do you take medicine regularly?</h3>
                    <div class="radio-input" > 
                        <label for="medicamentosYes" style="grid-area: radio-si;">
                            <input onclick="desbloqueo( 'medicamentoChk' )" value="Yes" type="radio" id="medicamentosYes" name="medicamentoChk" style="grid-area: radio-input-si;"/>
                            Yes
                        </label>
                        <label for="medicamentosNo" style="grid-area: radio-no;">
                            <input onclick="bloqueo( 'medicamentoChk' )" value="No" type="radio" id="medicamentosNo" name="medicamentoChk"  style="grid-area: radio-input-no;"/>
                            No
                        </label>
                        <input type="text" id="medicamentoChk" name="medicamentos"  style="grid-area: radio-input-cual; opacity: 0; overflow: hidden;" placeholder="Which one?"/>
                    </div>
                </div>
                <!-- Celular Personal-->
                <div class="cel" style="grid-area: cel;">
                    <h3>Cellphone number</h3>
                    <input type="tel" name="telefono_celu" id="phone" name="cel" placeholder="123-456-7890" pattern="[0-9]{3}-[0-9]{3}-[0-9]{4}" required><br><br>
                </div>
                <!-- Telefono Fijo -->
                <div class="tel" style="grid-area: tel;">
                    <h3>Phone number</h3>
                    <input type="tel" name="telefono_fijo" id="phone" name="tel" placeholder="123-456-7890" pattern="[0-9]{3}-[0-9]{3}-[0-9]{4}" required><br><br>
                </div>
                <!-- Email -->
                <div class="email" style="grid-area: email;">
                    <h3>Email</h3>
                    <input type="email" name="email" id="email" name="email" placeholder="Your email...">
                </div>
                <!-- Telefono Alternativo -->
                <div class="tel-alt" style="grid-area: tel-alt;">
                    <h3>Alt. Phone number</h3>
                    <input type="tel" name="telefono_altern" id="phone" name="tel-alt" placeholder="123-456-7890" pattern="[0-9]{3}-[0-9]{3}-[0-9]{4}" required><br><br>
                </div>
                <!-- Color favorito -->
                <div class="color" style="grid-area: color;">
                    <h3>Favourite color</h3>
                    <input type="color" name="color_fav" id="favcolor" name="color_fav" value="#95C923" style="height: 35px; margin-top: 0; padding-top: 0;">
                </div>
                <!-- Talle de Zapato -->
                <div class="zapato" style="grid-area: zapato;">
                    <h3>Shoe size</h3>
                    <input type="number" name="talle_zapato" id="quantity" name="zapato" min="0" max="50" step="1" value="0" style="margin: 0; padding: 4px; color: white;">
                </div>
            </div>
            <div class="form-button" style="background-color: #13315c; text-align: center;">
                <button class="button" class="submit" type="submit" name="enviar" id="registro_enviar" style="vertical-align:middle"><span>Send </span></button>
            </div>
        </form>
    </main>
        
    <footer>
        <h3>Santiago C&oacute;</h3>
        <h3>Franco Gozzerino</h3>
        <h3>Juliana Consolati</h3>
    </footer>
</body>
</html>
