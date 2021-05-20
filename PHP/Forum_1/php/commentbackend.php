<?php
include '_dbconnection.php';
if (isset($_POST['commenttitle'])){
    $comm_title = $_POST['commenttitle'];
    $comm_desc = $_POST['commentdesc'];
    session_start();
    $comm_by = $_SESSION['loginemail'];
    session_abort();
    $comm_th_id = $_POST['thread_comment_id'];
    $sql = "INSERT INTO `comments` (`comment_id`, `comment_title`, `comment_desc`, `comment_by`, `comment_thread_id`, `timestamp`) VALUES (NULL, '$comm_title', '$comm_desc', '$comm_by', '$comm_th_id', current_timestamp());";
    $result = mysqli_query($connec, $sql);
    if ($result){
        echo "inserted success ";
        echo "<br> at" . $comm_th_id;
        header("location: /PHP/Forum_1/comments.php?threadid=".$comm_th_id);
    }
    else{
        echo "error while insertion";
        echo mysqli_error($connec);
    }
}
?>