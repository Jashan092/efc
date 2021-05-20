<?php
ob_start();
$showError = false;
include '_db_connect.php';
if ($_SERVER['REQUEST_METHOD'] == "POST"){
    $user_email = $_POST['signupemail'];
    $user_password = $_POST['signuppassword'];
    $user_cpassword = $_POST['signupcpassword'];
    // check wheather this email exists or not 
    $sql = "select * from `users` where user_email = '$user_email'";    
    $result = mysqli_query($conn,$sql);
    $num = mysqli_num_rows($result);
    if ($num > 0){
        $showError = "Email is already in use";
        header("location: /PHP/Project_forum/index.php?err=$showError");
    }
    else{
        if ($user_password == $user_cpassword){
            $hash = password_hash($user_password,PASSWORD_DEFAULT);
            $SQL = "INSERT INTO `users` ( `user_email`, `user_password`) VALUES ( '$user_email', '$hash');";
            $result = mysqli_query($conn,$SQL);
            if ($result){
                $showAlert = True;
                header("location: /PHP/Project_forum/index.php?signupsuccess=true");
            }
        }
        else{
            $showError = "Passwords do not matched";
            header("location: /PHP/Project_forum/index.php?err=$showError");
        }
    }
}
ob_get_flush();
?>