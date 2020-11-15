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
    include "var.inc";
        $mysqli = new mysqli($HOST, $USER, $PASS, $DB);

            $username = $_POST['email'];
            $pass = $_POST['contra'];
   
            $sql = mysqli_query($mysqli,"SELECT * FROM $TABLA WHERE email ='$username' " );
            
            if( $f = mysqli_fetch_assoc($sql) )
            {
                $confirmacion = $f['confirmacion'];
                if( $confirmacion == 0)    
                {
                    echo '<script>alert("This user has not confirmed the email. Please confirm")</script> ';
                    echo "<script>window.location.href='sign_in.php'</script>";
  
                }
                else
                {
                    if ($confirmacion == 2)
                    { 
                        echo '<script>alert("This user has been blocked")</script> ';
                        echo "<script>window.location.href='sign_in.php'</script>";
                    }
                    else
                    {
                        $user = $f['nombre'];
                        $orden = $f['orden'];
                
                        
                        $cuantos_logueos = $f['cuantos_logueos'] + 1 ;
                        $ultimo_logueo = date('Y-m-d H:i:s');
                        
                        $mysqli->query("UPDATE $TABLA SET cuantos_logueos = '$cuantos_logueos' WHERE orden = '$orden' ");
                        $mysqli->query("UPDATE $TABLA SET ultimo_logueo = '$ultimo_logueo' WHERE orden = '$orden' ");
                        if($pass == $f['passadmin'])
                        {
                            /* Seteo las cookies */
                            setcookie("user", $user );
                            setcookie("id", $orden );
                            setcookie("admin", 1);
                            
                            echo '<script>alert("WELCOME ADMINISTRATOR")</script> ';
                            echo "<script>window.location.href='admin/admin_responses.php'</script>";
                        }
                        else 
                        {
                            if($pass == $f['contra'])
                            {
                                /* Seteo las cookies */
                                setcookie("user", $user );
                                setcookie("id", $orden );
                        
                                echo "<script>window.location.href='user/user_form.php'</script>";
                            }
                            else
                            {
                                echo '<script>alert("INCORRECT PASSWORD")</script> ';
                                echo "<script>window.location.href='sign_in.php'</script>";
                            }
                        }
        
                    }
                }
            }    
            else
            {
                echo '<script>alert("THIS USER DOES NOT EXIST, PLEASE REGISTER TO ENTER")</script> ';   
                echo "<script>window.location.href='sign_in.php'</script>";	
            }
?>