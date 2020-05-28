<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Actividad 3</title>
    <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
    <link rel="stylesheet" href="css/var.css">
    <link rel="stylesheet" href="css/general.css">
    <link rel="stylesheet" href="css/header.css">
    <link rel="stylesheet" href="css/respuestas.css">
    <link rel="stylesheet" href="css/footer.css">
    <link rel="stylesheet" href="css/animations.css">
    <link rel="Shortcut Icon" href="Respuestas/images/dog.svg">
</head>
<body>
    <header class="fadeInDown">
        <div class="title-container">
            <a href="https://ips.edu.ar/" target="_blank">
                <img src="Respuestas/images/IPS_Logo.png" alt="IPS-logo">
            </a>
            <h1 style="color: white;">Actividad 3</h1>
        </div> 
        <div class="links">
            <div class="img-container">
                <a href="index.html">
                    <img src="Respuestas/images/form.png" alt="">                
                    <h6>Formulario</h6>
                </a>
            </div>
            <div class="img-container">
                <a href="respuestas.php">
                    <img src="Respuestas/images/respuestas.png" alt="respuestas">
                    <h6>Respuestas</h6>
                </a>
            </div>
            <div class="img-container">
                <a href="Actividad1.html">
                    <img src="Respuestas/images/tabla.png" alt="actividad1">
                    <h6>Actividad 1</h6>
                </a>
            </div>
        </div>
    </header>
    <main>
        <div class="cards-container">
            <?php
            /*  subi la pag gato */
            include "var.inc";
            $conn = new mysqli($HOST, $USER, $PASS, $DB); 
            $result = $conn -> query( "SELECT * from $TABLA" );
            /* que responsa  */ 
            if ($result ->num_rows > 0) {
                while ( $rows = mysqli_fetch_assoc($result) ) {

                    ?>
                    <div class="card">
                        <div class="card-title">
                            <h1>Formulario 1</h1>
                        </div>
                        <div class="card-body">
                    <?php

                    echo "<h3><b>Nombre:</b> ". $rows["nombre"]."</h3>";
                    echo "<h3><b>Apellido:</b> ". $rows["apellido"]."</h3>";
                    echo "<h3><b>DNI:</b> ". $rows["dni"]."</h3>";
                    echo "<h3><b>Domicilio:</b> ". $rows["domicilio"]."</h3>";
                    echo "<h3><b>Fecha de Nacimiento:</b> ". $rows["fecha_nacimien"]."</h3>";
                    echo "<h3><b>Peso:</b> ". $rows["peso"]."</h3>";
                    echo "<h3><b>Altura:</b> ". $rows["altura"]."</h3>";
                    echo "<h3><b>Nro Emergerncia:</b> ". $rows["nro_emer"]."</h3>";
                    echo "<h3><b>Obra Social:</b> ". $rows["nro_obrasocial"]."</h3>";
                    echo "<h3><b>Grupo Sanguineo:</b> ". $rows["grupo_sanguineo"]."</h3>";
                    echo "<h3><b>Factor Sanguineo:</b> ". $rows["factor"]."</h3>";
                    echo "<h3><b>Cel:</b> ". $rows["telefono_celu"]."</h3>";
                    echo "<h3><b>Tel Fijo:</b> ". $rows["telefono_fijo"]."</h3>";
                    echo "<h3><b>Tel Alt:</b> ". $rows["telefono_altern"]."</h3>";
                    echo "<h3><b>Email:</b> ". $rows["email"]."</h3>";
                    echo "<h3><b>Enfermedades:</b> <br>". $rows["enfermedades"]."</h3>";
                    echo "<h3><b>Medicamentos:</b> ". $rows["medicamentos"]."</h3>";
                    echo "<h3><b>Color:</b> ". $rows["color_fav"]."</h3>";
                    echo "<h3><b>Zapato:</b> ". $rows["talle_zapato"]."</h3>";
                    echo "<h3><b>Sexo:</b> ". $rows["sexo"]."</h3>";

                    ?>
                        </div>
                    </div>
                    <?php
                }
            }
            else {
                echo "0 result";
            }
            ?>
        </div>
              
    </main>
    <footer>
        <h3>Santiago C&oacute;</h3>
        <h3>Franco Gozzerino</h3>
        <h3>Juliana Consolati</h3>
    </footer>
</body>
</html>