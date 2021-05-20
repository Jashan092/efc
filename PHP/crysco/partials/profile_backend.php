<?php
session_start();
require "_db_connect.php";
if ($_SERVER['REQUEST_METHOD'] == "POST"){
  if (isset($_POST['email'])){
      $new_email = $_POST['email'];
      $sql = "UPDATE `users` SET `user_email` = '$new_email' WHERE `users`.`username` = '".$_SESSION['username']."'";
      $result = mysqli_query($connection, $sql);
      if (!$result) {
          echo "Email query failed";
          echo "<br>". mysqli_error($connection);
      }
  }
  if (isset($_POST['username'])) {
    $old_username = $_SESSION['username'];
    $new_username = $_POST['username'];
    $sql = "UPDATE `users` SET `username` = '$new_username' WHERE `users`.`username` = '".$_SESSION['username']."'";
    $result = mysqli_query($connection, $sql);
    if (!$result) {
        echo "Username query failed";
        echo mysqli_error($connection);
    } 
    elseif ($result) {
        session_unset();
        $_SESSION['loggedin'] = true;
        $_SESSION['username'] = $new_username;
        echo $new_username;
        rename("../server/users/".$old_username,"../server/users/".$new_username);
    }
  }
  if (isset($_POST['delete'])) {
      copy("../img/user.png","../server/users/".$_SESSION['username']."/user.png");
  }
  if ($_FILES['image']){
    $fileg = $_FILES['image']['tmp_name'];
    if (file_exists("../server/users/".$_SESSION['username']."/user.png")) {
        unlink("../server/users/".$_SESSION['username']."/user.png");
        $_FILES['image']['name'] = 'user.png';
        move_uploaded_file($fileg,"../server/users/".$_SESSION['username']."/user.png");
    }
    else {
        $_FILES['image']['name'] = 'user.png';
        move_uploaded_file($fileg,"../server/users/".$_SESSION['username']."/user.png");
    }
}
}
?>