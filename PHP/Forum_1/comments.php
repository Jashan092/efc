<?php
include 'php/_dbconnection.php';
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Comments</title>
    <link rel="stylesheet" href="style.css">
    <style>
    .container h1 {
        font-family: arial;
        font-size: 43px;
    }

    b {
        color: black;
    }
    </style>
</head>

<body>
    <div class="container">
        <?php
        $threadid = $_GET['threadid'];
        $sql = "select * from `threadlist` where `thread_id` = '".$threadid."' ";
        $result = mysqli_query($connec,$sql);
        if (!$result){
            echo "NOR ";
        }
        while ($row = mysqli_fetch_assoc($result)){
            $title = $row['thread_title'];
            $desc = $row['thread_desc'];
            $user = $row['thread_user'];
            echo '
            <h1>Welcome To '.$title.' Forms</h1>
            <p>Welcome To '.$desc.' Forms</p>
            <hr>
            <p>Posted by <b>'.$user.'</b></p>
            <a href="">Learn More</a>
            ';
        }
        ?>
        </div>
        <div class="main">
            <h1>Comments</h1>
            <?php
        $sql = "select * from `comments` where `comment_thread_id` ='".$threadid ."'";
        $result = mysqli_query($connec,$sql);
        if (mysqli_num_rows($result) > 0){
        while ($row = mysqli_fetch_assoc($result)){
            $threadtitle = $row['comment_title'];
            $threaddesc = $row['comment_desc'];
            $threaduser = $row['comment_by'];
            $commentid = $row['comment_id'];
            $timestamp = $row['timestamp'];
        echo '
        <div class="questions" id="question-1">
            <img src="https://source.unsplash.com/50x50/?people,human" alt="">
            <figure>'.$threaduser.'</figure>
            <span>Asked at '.$timestamp.'</span>
            <a>'.$threadtitle.'</a>
            <p>'.$threaddesc.'</p>
        </div>';
    }
    }else{
        echo "<div><h1>Be the First To Ask A Question In This Thread</h1></div>";
    }
    ?>
        <?php
        session_start();
        if ($_SESSION['loggedin']){
        echo '<div class="askquestionh1">
            <h1>Post a comment</h1>
        </div>
        <form action="php/commentbackend.php" method="post">
        <div class="askquest">
            <input type="hidden" name="thread_comment_id" value="'.$threadid.'">
            <!-- User Image by default after login -->
            <input type="text" name="commenttitle" id="title" autocomplete="off" placeholder="Question Title">
            <textarea name="commentdesc" id="desc" cols="30" rows="10" placeholder="Question Description"></textarea>
            <button type="submit" class="btn">Submit</button>
        </div>
        </form>
    </div>';
    }
    else{
    echo '<div class="askquestionh1">
        <h1>Please Sign in to ask a question.</h1>
    </div>
    <form>
        <div class="askquest">
            <!-- User Image by default after login -->
            <input type="text" name="commenttitle" id="title" autocomplete="off" placeholder="Question Title" style="background-color: #a5a5a547;" readonly>
            <textarea style="background-color: #a5a5a547;" name="commentdesc" id="desc" cols="30" rows="10" placeholder="Question Description" readonly></textarea>
            <a class="btn">Submit</a>
        </div>
    </form>
    </div>';
    }
    ?>
        </div>
</body>

</html>