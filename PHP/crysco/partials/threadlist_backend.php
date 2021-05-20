<?php
require "_db_connect.php";
    if ($_SERVER['REQUEST_METHOD'] == 'POST'){
        $imagename = $_FILES["files"]["name"];
        $catid = $_POST['catid'];
        $user = $_POST['username'];
        $title = $_POST['title'];
        $desc = $_POST['desc'];
        $imagename = $_FILES['files']['name'];
            $sql = "INSERT INTO `threadlist` (`thread_id`, `thread_cat_id`, `thread_title`, `thread_desc`, `thread_by`, `thread_thumbnail_name`, `timestamp`) VALUES (NULL, '$catid', '$title', '$desc', '$user', '$imagename', current_timestamp());";
        $result = mysqli_query($connection,$sql);
        if ($result){
            $result = mysqli_query($connection,"select * from `threadlist` where `thread_desc` = '$desc'");
            while ($row = mysqli_fetch_assoc($result)){
                move_uploaded_file($_FILES['files']["tmp_name"],"../server/images/".$user.$row['thread_id'].$imagename);
            }
            if ($result){
                echo "you did it";
            }
            else{
                echo "let's try again";
            }
        }
        else{
            echo "Query Failed";
            echo mysqli_error($connection);
        }
        }
?>