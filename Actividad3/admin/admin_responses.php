<!DOCTYPE html>
<html lang="es">
<?php
	session_start();
	if (@!$_COOKIE['admin']  ) {
        header("Location:../sign_in.php");
            
    }
    include "../var.inc";
            $mysqli = new mysqli($HOST, $USER, $PASS, $DB);
            $id = $_COOKIE['id'];
            $sql = mysqli_query($mysqli,"SELECT * FROM $TABLA WHERE orden = $id " );
            $rows3 = mysqli_fetch_assoc($sql);
            if ($rows3["confirmacion"] == 2 )
            {
                echo '<script>alert("This user was banned")</script> ';
                echo "<script>window.location.href='../sign_out.php'</script>";
            }
?>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exercise IV</title>
    <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
    <link rel="stylesheet" href="../css/var.css">
    <link rel="stylesheet" href="../css/general.css">
    <link rel="stylesheet" href="../css/header.css">
    <link rel="stylesheet" href="../css/respuestas.css">
    <link rel="stylesheet" href="../css/footer.css">
    <link rel="stylesheet" href="../css/animations.css">
    <link rel="Shortcut Icon" href="../images/dog.png">
</head>
<body>
    <header class="fadeInDown">
        <div class="title-container">
            <a href="https://ips.edu.ar/" target="_blank">
                <img src="../images/IPS_Logo.png" alt="IPS-logo">
            </a>
            <h1 style="color: white;">Users Responses</h1>
        </div> 
        <div class="links">
            <div class="img-container">
                <a href="admin_profile.php">
                    <img src="../images/profile.png" alt="respuestas">
                    <h6>Profile</h6>
                </a>
            </div>
            <div class="img-container">
                <a href="admin_user_control.php">
                    <img src="../images/userControl.png" alt="">                
                    <h6>Control</h6>
                </a>
            </div>
            <div class="img-container">
                <a href="../sign_out.php">
                    <img src="../images/logOut.png" alt="actividad1">
                    <h6>Log Out</h6>
                </a>
            </div>
        </div>
    </header>
    <main>
        <div class="cards-container">
            <?php

            include "../var.inc";
            $conn = new mysqli($HOST, $USER, $PASS, $DB); 
            $conn2 = new mysqli($HOST, $USER, $PASS, $DB); 
            
            $result = $conn -> query( "SELECT *  from $TABLA2" );
                   
            if ($result ->num_rows > 0) {
                while ( $rows = mysqli_fetch_assoc($result) ) {
                    ?>
                        <div class="card">
                            <div class="card-title">
                                <?php
                                    $id =$rows['id']
                                    $result2 = $conn2 -> query( "SELECT nombre from $TABLA WHERE orden = $id" );
                                    if($rows2 = mysqli_fetch_assoc($result2))
                                        echo "<h1>User ". $rows2['nombre']."</h1>";
                                ?>
                            </div>
                            <div class="card-body">
                                <?php
                                echo "<h3><b>Name: </b> ". $rows["nombre"]."</h3>";
                                echo "<h3><b>Last-name: </b> ". $rows["apellido"]."</h3>";
                                echo "<h3><b>DNI: </b> ". $rows["dni"]."</h3>";
                                echo "<h3><b>Sex: </b> ". $rows["sexo"]."</h3>";
                                echo "<h3><b>Residence: </b> ". $rows["domicilio"]."</h3>";
                                echo "<h3><b>Birth name: </b> ". $rows["fecha_nacimien"]."</h3>";
                                echo "<h3><b>Weight: </b> ". $rows["peso"]."kg </h3>";
                                echo "<h3><b>Height: </b> ". $rows["altura"]."cm</h3>";
                                echo "<h3><b>Emergency service: </b> ". $rows["nro_emer"]."</h3>";
                                echo "<h3><b>Social work: </b> ". $rows["nro_obrasocial"]."</h3>";
                                echo "<h3><b>Blood type: </b> ". $rows["grupo_sanguineo"]."</h3>";
                                echo "<h3><b>Blood factor: </b> ". $rows["factor"]."</h3>";
                                echo "<h3><b>Cellphone: </b> ". $rows["telefono_celu"]."</h3>";
                                echo "<h3><b>Landline: </b> ". $rows["telefono_fijo"]."</h3>";
                                echo "<h3><b>Landline alt: </b> ". $rows["telefono_altern"]."</h3>";
                                echo "<h3><b>Email: </b> ". $rows["email"]."</h3>";
                                echo "<h3><b>Diseases: </b> <br>". $rows["enfermedades"]."</h3>";
                                echo "<h3><b>Medicines: </b> ". $rows["medicamentos"]."</h3>";
                                echo "<h3><b>Favourite Color: </b> ". $rows["color_fav"]."</h3>";
                                echo "<h3><b>Shoe size: </b> ". $rows["talle_zapato"]."</h3>";
                                ?>
                            </div>
                        </div>
                    <?php
                }
            }
            else {
                echo "<h3> No answers yet ;(( </h3>";
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