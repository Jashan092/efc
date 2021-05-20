<?php
include '_dbconnection.php';
if ($_SERVER["REQUEST_METHOD"] == 'POST'){
    if ($_POST['threadtitle']){
        $catid = $_POST['catid'];
        $threadtitle = $_POST['threadtitle'];
        $threaddesc = $_POST['threaddesc'];
        session_start();
        $sql = "INSERT INTO `threadlist` (`catid`,`thread_id`, `thread_title`, `thread_desc`, `thread_user`, `timestamp`) VALUES ('".$catid."' ,NULL, '".$threadtitle."', '".$threaddesc."', '".$_SESSION['loginemail']."', current_timestamp());";
        $result = mysqli_query($connec,$sql);
        echo $result;
        echo $catid;
        if ($result){
            header('location: /PHP/Forum_1/threadlist.php?catid='.$catid );
        }
        else{
            // echo "Error while inserting";
            // echo mysqli_error($connec);
            // echo 'sdfs'.$catid;
            echo mysqli_error($connec);
        }
    }
}
?>