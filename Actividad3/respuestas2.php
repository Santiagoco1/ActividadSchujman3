<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Actividad 3</title>
    <link rel ="stylesheet" type = "text/css " href ="Respuestas/css/styles.css" media =" screen ">
    <link rel="stylesheet" href="Respuestas/css/animations.css">
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
                <a href="respuestas2.php">
                    <img src="Respuestas/images/respuestas.png" alt="respuestas">
                    <h6>Respuestas</h6>
                </a>
            </div>
            <div class="img-container">
                <a href="Actividad1/Actividad1.html">
                    <img src="Respuestas/images/tabla.png" alt="actividad1">
                    <h6>Actividad 1</h6>
                </a>
            </div>
        </div>
    </header>
    <main>
        <div class="card-container">
        <?php 
        include "var.inc"               
        $conn = new mysqli($HOST,$USER, $PASS, $DB);

        $sql->query ("SELECT * from test1 ")
        $result =$conn -> query($sql) 

        if ($result-> num_rows > 0) {
            while ($row = $result-> fethc_assoc()) {
                echo "<div class="card"><div class="card-title"><h3>Formulario 1". "</h3></div><div class="card-body"><p>". $row["nombre"] ."</p><p>". $row["apellido"]. "</p><p>". $row["fecha_nacimien"]. "</p><p>". $row["dni"]. "</p><p>". $row["domicilio"]. "</p><p>". $row["nro_emer"]. "</p><p>". $row["nro_obrasocial"]. "</p><p>". $row["grupo_sanguineo"]. "</p><p>". $row["factor"]. "</p><p>". $row["peso"]. "</p><p>". $row["altura"]. "</p><p>". $row["enfermedades"]. "</p><p>". $row["medicamentos"]. "</p><p>". $row["telefono_celu"]. "</p><p>". $row["telefono_fijo"]. "</p><p>". $row["telefono_altern"]. "</p><p>". $row["email"]. "</p><p>". $row["color_fav"]. "</p><p>". $row["talle_zapato"]."</p><p>". $row["sexo"]. "</p></div></div>";
            }
        } else {
            echo 0 "result";
        }

        ?>
        </div>
    </main>
</body>
</html>