<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Actividad 3</title>
    <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
    <link rel ="stylesheet" type = "text/css " href ="css/styles.css" media =" screen ">
    <link rel="Shortcut Icon" href="images/dog.svg">
    <link rel="stylesheet" href="css/animations.css">
    <link rel="Shortcut Icon" href="images/dog.svg">
</head>
<body>
    <header class="fadeInDown">
        <div class="title-container">
            <a href="https://ips.edu.ar/" target="_blank">
                <img src="images/IPS_Logo.png" alt="IPS-logo">
            </a>
            <h1 style="color: white;">Actividad 3</h1>
        </div> 
        <div class="links">
            <div class="img-container">
                <a href="../index.html">
                    <img src="images/form.png" alt="">                
                    <h6>Formulario</h6>
                </a>
            </div>
            <div class="img-container">
                <a href="respuestas.html">
                    <img src="images/respuestas.png" alt="respuestas">
                    <h6>Respuestas</h6>
                </a>
            </div>
            <div class="img-container">
                <a href="../Actividad1/Actividad1.html">
                    <img src="images/tabla.png" alt="actividad1">
                    <h6>Actividad 1</h6>
                </a>
            </div>
        </div>
    </header>
    <main>
        <div style="overflow-x:auto;">
            <table>
                <tr>
                    <th>Nombre</th>
                    <th>Apellido</th>
                    <th>Fecha Nac</th>
                    <th>DNI</th>
                    <th>Domicilio</th>
                    <th>Emergencias</th>
                    <th>Obra social</th>
                    <th>Grupo</th>
                    <th>Factor</th>
                    <th>Peso</th>
                    <th>Altura</th>
                    <th>Enfermedades</th>
                    <th>Meds.</th>
                    <th>Cel.</th>
                    <th>Fijo</th>
                    <th>Cel. Alt</th>
                    <th>Email</th>
                    <th>Sexo</th> -->
                    <th>Color</th>
                    <th>Talle</th>
                </tr> 

                <?php
                                
                $conn = mysqli_connect($HOST,$USER, $PASS, $DB);

                $sql = "SELECT nombre, apellido, fecha_nacimien, dni, domicilio, nro_emer, nro_obrasocial, grupo_sanguineo, factor, peso, altura, enfermedades, medicamentos, telefono_celu, telefono_fijo, telefono_altern, email, color_fav, talle_zapato from test1"
                $result =$conn -> query($sql) 

                if ($result-> num_rows > 0) {
                    while ($row = $result-> fethc_assoc()) {
                        echo "<tr><td>". $row["nombre"] ."</td><td>". $row["apellido"]. "</td><td>". $row["fecha_nacimien"]. "</td><td>". $row["dni"]. "</td><td>". $row["domicilio"]. "</td><td>". $row["nro_emer"]. "</td><td>". $row["nro_obrasocial"]. "</td><td>". $row["grupo_sanguineo"]. "</td><td>". $row["factor"]. "</td><td>". $row["peso"]. "</td><td>". $row["altura"]. "</td><td>". $row["enfermedades"]. "</td><td>". $row["medicamentos"]. "</td><td>". $row["telefono_celu"]. "</td><td>". $row["telefono_fijo"]. "</td><td>". $row["telefono_altern"]. "</td><td>". $row["email"]. "</td><td>". $row["color_fav"]. "</td><td>". $row["talle_zapato"]."</td></tr>";
                    }
                    echo "</table>";
                } else {
                    echo 0 "result";
                }
                $conn-> close();
                ?>
                
            </table>
        </div>
    </main>
</body>
</html>
