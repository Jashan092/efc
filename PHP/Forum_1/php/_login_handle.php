<?php
include '_dbconnection.php';
if ($_SERVER['REQUEST_METHOD'] == 'POST'){
    if ($_POST['loginemail']){
        $loginemail = $_POST['loginemail'];
        $loginpassword = $_POST['loginpassword'];
        // echo $loginemail . $loginpassword;
        $sql = "select * from `users` where `user_email`= '$loginemail'";
        $result = mysqli_query($connec, $sql);
        if (mysqli_num_rows($result) == 0 ){
            echo 'no such a record';
        }
        else{
            $row = mysqli_fetch_assoc($result);
            $passhash = $row['user_password'];
            if (password_verify($loginpassword,$passhash)){
                session_start();
                $_SESSION['loggedin'] = true;
                $_SESSION['loginemail'] = $loginemail;
                echo "DOne";
            }
            else{
                echo "Wrong password". $passhash;
            }
        }

    }
}
?>