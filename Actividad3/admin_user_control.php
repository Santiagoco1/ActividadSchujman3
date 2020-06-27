<!DOCTYPE html>
<html lang="es">
    <?php
	session_start();
	if (@!$_COOKIE['user']  ) {
		header("Location:iniciar_sesion.php");
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
        
        <div class="row">              
            <div class="span12">
                <div class="caption">
                    <h2> Registered User Management</h2>	
                    <div class="well well-small">
                        <hr class="soft"/>
                        <h4>Users Table</h4>
                        <div class="row-fluid">
                    
                            <?php

                                $mysqli = new mysqli($HOST, $USER, $PASS, $DB);
                                $sql=("SELECT * FROM $TABLA");

                                $query=mysqli_query($mysqli,$sql);

                                echo "<table border='1'; class='table table-hover';>";
                                    echo "<tr class='warning'>";
                                        echo "<td>User</td>";
                                        echo "<td>How many times the user log in</td>";
                                        echo "<td>Last log in</td>";
                                        echo "<td>Status</td>";
                                        echo "<td>Blocked/Unblocked</td>";
                                        
                                    echo "</tr>";  
                            
                            
                                while($arreglo=mysqli_fetch_array($query))
                                {
                                    echo "<tr class='success'>";
                                        echo "<td>$arreglo[0]</td>";
                                        echo "<td>$arreglo[1]</td>";
                                        echo "<td>$arreglo[2]</td>";
                                        if( $arreglo[3] == 0 )
                                            echo "<td>"No confirmado"</td>";
                                        else
                                            if( $arreglo[3] == 1)
                                            {
                                                echo "<td>"Desbloqueado"</td>";
                                                /* echo "<td> <button onclick = '  " $mysqli->query("UPDATE $TABLA SET confirmacion = 2  WHERE orden = $arreglo[11] ");
                                                                                " '> <img src='images/CO.jpeg' class='img-rounded'> </td>";
                                                */
                                            }
                                            else
                                            {
                                                echo "<td>"Bloqueado"</td>";
                                                /* echo "<td> <button onclick = '  " $mysqli->query("UPDATE $TABLA SET confirmacion = 1  WHERE orden = $arreglo[11] ");
                                                                                " '> <img src='images/CO.jpeg' class='img-rounded'> </td>";
                                                */
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
    </main>
    
    <footer style="position: fixed; bottom: 0;">
        <h3>Santiago C&oacute;</h3>
        <h3>Franco Gozzerino</h3>
        <h3>Juliana Consolati</h3>
    </footer>
</body>
</html>