<?php
include '_dbconnection.php';
if ($_SERVER['REQUEST_METHOD'] == 'POST'){
    if ($_POST['signupemail']){
        $signupemail = $_POST['signupemail'];
        $signuppassword= $_POST['signuppassword'];
        $signupcpassword= $_POST['signupcpassword'];
        $sql = "select * from `users` where `user_email`= '$signupemail'";
        $result = mysqli_query($connec,$sql);
        $num = mysqli_num_rows($result);
        if ($num > 0){
            echo "E-mail Already Exists";
        }
        else{
            if ($signuppassword == $signupcpassword){
                $password = password_hash($signuppassword,PASSWORD_DEFAULT);
                $sql = "INSERT INTO `users` (`used_id`, `user_email`, `user_password`, `timestamp`) VALUES (NULL, '".$signupemail."', '".$password."', current_timestamp());";              
            $result = mysqli_query($connec,$sql);
            if (!$result){
                echo "Query dummo";
            }
            else{
                    session_start();
                    $_SESSION['signup'] = true;
                    $_SESSION['loginemail'] = $signupemail;;
                    echo "EIGO";
            }
            }
            else{
                echo 'Passwords do not matched.';
            }
        }
    }
}
?>