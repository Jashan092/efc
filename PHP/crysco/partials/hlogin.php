<?php
require '_db_connect.php';
if ($_SERVER['REQUEST_METHOD'] == 'POST'){
    if (isset($_POST['loginemail'])){
        $loginemail = $_POST['loginemail'];
        $result = mysqli_query($connection,"select * from `users` where `user_email` = '$loginemail'");
        if (!$result){
            echo "Error query";
        }
        if (mysqli_num_rows($result) > 0){
            $loginpass = $_POST['loginpassword'];
            while ($row = mysqli_fetch_assoc($result)){
                if (password_verify($loginpass,$row['user_password'])){
                    session_start();              
                    $_SESSION['loggedin'] = true;
                    $_SESSION['username'] = $row['username'];
                    echo "Login Done";
                }
                else{
                    echo "Password Does Not Matched";
                }
            }
        }
        else{
            echo "Email Does Not Exist";
        }
    }
}
else{
    echo "not permitted";
}
?>