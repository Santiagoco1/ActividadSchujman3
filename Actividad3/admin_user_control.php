<!DOCTYPE html>
<html lang="es">
<?php
    session_start();
	if (@!$_COOKIE['admin']  ) {
        header("Location:sign_in.php");
            
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
    <link rel="stylesheet" href="css/footer.css">
    <link rel="stylesheet" href="css/table.css">
    <link rel="stylesheet" href="css/animations.css">
    <link rel="Shortcut Icon" href="images/dog.png">
    <script src="https://code.jquery.com/jquery-3.4.0.min.js"></script>
</head>
<body> 
    <header class="fadeInDown">
        <div class="title-container">
            <a href="https://ips.edu.ar/" target="_blank">
                <img src="images/IPS_Logo.png" alt="IPS-logo">
            </a>
            <h1 style="color: white;">Users Control</h1>
        </div> 
        <div class="links">
            <div class="img-container">
                <a href="admin_responses.php">
                    <img src="images/responses.png" alt="respuestas">
                    <h6>Responses</h6>
                </a>
            </div>
            <div class="img-container">
                <a href="admin_profile.php">
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
        <?php
            include "var.inc";
            $mysqli = new mysqli($HOST, $USER, $PASS, $DB);
            $sql=("SELECT * FROM $TABLA");

            $query=mysqli_query($mysqli,$sql);

            echo "<table border='1'; class='table table-hover tabla_grupo';>";
                echo "<tr class='warning'>";
                    echo "<td>User</td>";
                    echo "<td>logins</td>";
                    echo "<td>Last login</td>";
                    echo "<td>Status</td>";
                    echo "<td>Block</td>";
                    
                echo "</tr>";  
        
        
                            while($arreglo=mysqli_fetch_array($query))
                            {
                                echo "<tr class=' '>";
                                    echo "<td>$arreglo[0]</td>";
                                    echo "<td>$arreglo[1]</td>";
                                    echo "<td>$arreglo[2]</td>";
                                    if( $arreglo[3] == 0 )
                                        echo "<td> No confirmado </td>";
                                    else
                                        if( $arreglo[3] == 1){
                                            echo "<td> Desbloqueado </td>";
                                            echo "<td>   
                                                    <form action='block_unblock.php' method='post' >
                                                        <input type='hidden' name='estado'  value='2' >
                                                        <input type='hidden' name='estado2'  value='$arreglo[10]' >
                                                        <input type='hidden' name='estado3'  value='$arreglo[6]' >

                                                        <button class='submit' type='submit' name='enviar' > <img src='images/bloquear.png' style='height: 30px;' class='img-rounded'> </button>
                                                    </form>
                                                </td>";
                                        }

                                        else{   
                                            echo "<td> Bloqueado </td>";
                                            echo "<td>   
                                                    <form action='block_unblock.php' method='post' >
                                                        <input type='hidden' name='estado'  value='1' >
                                                        <input type='hidden' name='estado2'  value='$arreglo[10]' >
                                                        <input type='hidden' name='estado3'  value='$arreglo[6]' >

                                                        <button class='submit' type='submit' name='enviar' > <img src='images/desbloquear.png' style='height: 30px;' class='img-rounded'> </button>
                                                    </form>
                                                </td>";
                                        }

                                echo "</tr>";
                            }

                            echo "</table>";
               ?>             
                        </div>	
                    </div>	
                </div>
            </div>
        </div>       
        <!-- poner que significa cada cosa del status -->      
    </main>
    
    <footer style="position: fixed; bottom: 0;">
        <h3>Santiago C&oacute;</h3>
        <h3>Franco Gozzerino</h3>
        <h3>Juliana Consolati</h3>
    </footer>
</body>
</html>