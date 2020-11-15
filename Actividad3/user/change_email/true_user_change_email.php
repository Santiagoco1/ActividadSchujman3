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
            $email = $_POST['email'];  
            $token = $_COOKIE['token'];
            $id = $_COOKIE['id'];
            $sql = mysqli_query($mysqli,"SELECT * FROM $TABLA WHERE email = $email " );
                if($f = mysqli_fetch_assoc($sql))
                    {
                        echo '<script>alert("There is already a registered user with that password")</script> ';
                        echo "<script>window.location.href='../../index.html'</script>";
                    }
            if($mysqli->query("UPDATE $TABLA SET email = '$email' WHERE token = '$token' AND orden = '$id' ") === true)
                echo '<script>alert("The email was changed.")</script> ';
            
            unset($_COOKIE['token']);
            unset($_COOKIE['id']);
            unset($_COOKIE['user']);
            echo "<script>window.location.href='../../sign_in.php'</script>";

?>