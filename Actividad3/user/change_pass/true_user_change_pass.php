<link rel="stylesheet" href="../../css/loader">
<div class="background">
    <div class="loader"></div>
</div>
<script type="text/javascript">
        $(window).load(function() {
        $(".loader").fadeOut("slow");
    });
</script>
<?php
    include "../../var.inc";
            $mysqli = new mysqli($HOST, $USER, $PASS, $DB);
            $id = $_COOKIE['id'];
            $sql2 = mysqli_query($mysqli,"SELECT * FROM $TABLA WHERE orden = $id " );
            $rows = mysqli_fetch_assoc($sql2);
            if ($rows["confirmacion"] == 2 )
            {
                echo '<script>alert("This user was banned")</script> ';
                echo "<script>window.location.href='../../sign_out.php'</script>";
            }

            $pass = $_POST['contra'];  
            $token = $_COOKIE['token'];
            $email = $_COOKIE['email'];
            
            if($mysqli->query("UPDATE $TABLA SET contra = '$pass' WHERE token = '$token' AND email = '$email' ") === true)
                echo '<script>alert("The pass was changed.")</script> ';
            
            unset($_COOKIE['token']);
            unset($_COOKIE['email']);
            echo "<script>window.location.href='../../sign_in.php'</script>";

?>