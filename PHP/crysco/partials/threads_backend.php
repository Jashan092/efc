<?php
require "_db_connect.php";
    if ($_SERVER['REQUEST_METHOD'] == 'POST') {
        $content = $_POST['content'];
        $thread_user = $_POST['thread_user'];
        $thread_id = $_POST['thread_id'];
        $sql = "INSERT INTO `comments` (`comment_id`, `comment_thread_id`, `comment_by`, `comment_content`) VALUES (NULL, '$thread_id', '$thread_user', '$content');";
        $result = mysqli_query($connection , $sql);
        if ($result) {
            echo "Thread Inserted Successfuly";
        } else {
            echo "Thread insertion query failed";
            echo mysqli_error($connection);
        }

    }
?>