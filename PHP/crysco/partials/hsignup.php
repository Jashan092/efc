<?php
require '_db_connect.php';
if ($_SERVER['REQUEST_METHOD'] == 'POST'){
    if (isset($_POST['signupemail'])){
        $signemail = $_POST['signupemail'];
        $signpass = $_POST['signuppassword'];
        $signcpass = $_POST['signupcpassword'];
        $username = $_POST['signupusername'];
        $sql = "select * from `users` where `user_email`='$signemail'";
        $result = mysqli_query($connection,$sql);
        if (mysqli_num_rows($result) == 0){
        if ($signpass == $signcpass){
            session_start();
            $hash = password_hash($signpass,PASSWORD_DEFAULT);
            $sql = "INSERT INTO `users` (`user_id`, `username`, `user_email`, `user_password`, `timestamp`) VALUES (NULL, '$username', '$signemail', '$hash', current_timestamp());
            ";
            $result = mysqli_query($connection,$sql);
            if (!$result){
                echo "error while inserting data";
                echo mysqli_error($connection);
            }
            $_SESSION['signin'] = true; 
            $_SESSION['username'] = $username;
            mkdir("../server/users/".$_SESSION['username'],0777);
            copy('../img/user.png',"../server/users/".$_SESSION['username']."/user.png");
            echo "DON";
        }
        else{
            echo "Passwords do not matched";
        }
        }
        else{
            echo "email already exists";
        }
    }
}
else{
    echo "not permitted";
}
?>