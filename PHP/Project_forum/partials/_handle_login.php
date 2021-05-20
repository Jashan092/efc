<?php
ob_start();
    $showError = false;
    if ($_SERVER['REQUEST_METHOD'] == 'POST'){
        include '_db_connect.php';
        $email = $_POST['loginemail'];
        $password = $_POST['loginpassword'];
        $sql = "select * from `users` where user_email = '$email'";
        $result = mysqli_query($conn,$sql);
        $num = mysqli_num_rows($result);
        if ($num > 0){
            $row = mysqli_fetch_assoc($result);
            if(password_verify($password,$row['user_password'])){
                session_start();
                $_SESSION['loggedin'] = true;
                $_SESSION['email'] = $email;
            }
            // header('Location: /PHP/Project_forum/index.php');
        }
    }
ob_get_flush();
?>