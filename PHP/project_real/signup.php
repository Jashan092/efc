<?php
    // require 'partional/_db_connect.php';
    $servername = 'localhost';
    $username = 'root';
    $password = '';
    $dbname = 'users2006';

    $connection = mysqli_connect($servername,$username,$password,$dbname);
    if (!$connection){
        echo "<br> Error while connecting to the database <br>", mysqli_error($connection);
    }
    $showalert = false;
    $showError = false;
    if ($_SERVER['REQUEST_METHOD'] == 'POST'){
        $username = $_POST['username'];
        $password = $_POST['password'];
        $cpassword = $_POST['cpassword'];
        $existSql = "SELECT * FROM `users` where `username` = '$username'";
        $result = mysqli_query($connection,$existSql);
        $exists = false;
        
        $numExistRow = mysqli_num_rows($result);
        // print($numExistRow);
    if ($numExistRow > 0 ){
        $showError = "Username Already exists, Please select different username";
    }
    else{
        if ($password == $cpassword){
            $hash = password_hash($password,PASSWORD_DEFAULT);
            $sql = "INSERT INTO `users` (`sno`, `username`, `password`, `date`) VALUES (NULL, '$username', '$hash', current_timestamp());";
            $rest = mysqli_query($connection,$sql);
            if ($rest){
                $showalert = true;
            }
        }
        else{
            $showError = "Passwords do not matched ";
        }
    }
    }
?>
<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-eOJMYsd53ii+scO/bJGFsiCZc+5NDVN2yr8+0RDqr0Ql0h+rP48ckxlpbzKgwra6" crossorigin="anonymous">

    <title>Sign Up</title>
</head>

<body>
    <?php  require 'partional/_nav.php' ?>
    <?php
    if ($showalert){
    echo '
    <div class="alert alert-success alert-dismissible fade show" role="alert">
    <strong>Your account is successfuly created now, you can log in</strong> 
    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
    </div>';}
    if ($showError){
    echo '
    <div class="alert alert-danger alert-dismissible fade show" role="alert">
    <strong>'. $showError .'</strong> 
    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
    </div>';}
        ?>
    <div class="container">
        <h1 class='text-center'>Sign Up to our website</h1>
        <form method="POST" action="signup.php"> 
            <div class="mb-3">
                <label for="username" class="form-label">Username</label>
                <input type="text" class="form-control" id="username" aria-describedby="emailHelp" name="username" maxlength=11>
                
            </div>
            <div class="mb-3">
                <label for="password" class="form-label">Password</label>
                <input type="text" class="form-control" id="password" name="password" maxlength=8>
            </div>
            <div class="mb-3">
                <label for="cpassword" class="form-label">Confirm Password</label>
                <input type="text" class="form-control" id="cpassword" name="cpassword" maxlength=8>
                <div id="emailHelp" class="form-text">Make sure to type the same password.</div>
            </div>
            <div class="mb-3 form-check">
                <input type="checkbox" class="form-check-input" id="exampleCheck1">
                <label class="form-check-label" for="exampleCheck1">Check me out</label>
            </div>
            <button type="submit" class="btn btn-primary">Submit</button>
        </form>
    </div>
    <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-JEW9xMcG8R+pH31jmWH6WWP0WintQrMb4s7ZOdauHnUtxwoG2vI5DkLtS3qm9Ekf"
        crossorigin="anonymous"></script>

    <!-- Option 2: Separate Popper and Bootstrap JS -->
    
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.1/dist/umd/popper.min.js" integrity="sha384-SR1sx49pcuLnqZUnnPwx6FCym0wLsk5JZuNx2bPPENzswTNFaQU1RDvt3wT4gWFG" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/js/bootstrap.min.js" integrity="sha384-j0CNLUeiqtyaRmlzUHCPZ+Gy5fQu0dQ6eZ/xAww941Ai1SxSY+0EQqNXNE6DZiVc" crossorigin="anonymous"></script>
   
</body>

</html>