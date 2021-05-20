<?php
include 'php/_dbconnection.php';
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ThreadList</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <div class="container">
        <?php
        $catid = $_GET['catid'];
        $sql = "select * from `categories` where catid = '".$catid."' ";
        $result = mysqli_query($connec,$sql);
        while ($row = mysqli_fetch_assoc($result)){
            $title = $row['cat_title'];
            $desc = $row['cat_desc'];
        }
        echo '
        <h1>Welcome To '.$title.' Forms</h1>
        <p>Welcome To '.$desc.' Forms</p>
        <hr>
        <p>This is peer to peer form for sharing knowledge with each other.</p>
        <a href="">Learn More</a>
        ';
        ?>
    </div>
    <div class="main">
        <h1>Questions</h1>
        <?php
        $sql = "select * from `threadlist` where `catid` ='".$catid."'";
        $result = mysqli_query($connec,$sql);
        if ($_SESSION['loggedin'] == true){
        if (mysqli_num_rows($result) > 0){
        while ($row = mysqli_fetch_assoc($result)){
            $threadtitle = $row['thread_title'];
            $threaddesc = $row['thread_desc'];
            $threaduser = $row['thread_user'];
            $threadid = $row['thread_id'];
            $timestamp = $row['timestamp'];
        echo '
        <div class="questions" id="question-1">
            <img src="https://source.unsplash.com/50x50/?people,human" alt="">
            <figure>'.$threaduser.'</figure>
            <span>Asked at '.$timestamp.'</span>
            <a href="/PHP/Forum_1/comments.php?threadid='.$threadid.'">'.$threadtitle.'</a>
            <p>'.$threaddesc.'</p>
        </div>';
    }
    }
    else{
        echo "<div><h1>Be the First To Ask A Question In This Thread</h1></div>";
    }
}
else{
    if (mysqli_num_rows($result) > 0){
        while ($row = mysqli_fetch_assoc($result)){
            $threadtitle = $row['thread_title'];
            $threaddesc = $row['thread_desc'];
            $threaduser = $row['thread_user'];
            $threadid = $row['thread_id'];
            $timestamp = $row['timestamp'];
        echo '
        <div class="questions" id="question-1">
            <img src="https://source.unsplash.com/50x50/?people,human" alt="">
            <figure>'.$threaduser.'</figure>
            <span>Asked at '.$timestamp.'</span>
            <a href="/PHP/Forum_1/comments.php?threadid='.$threadid.'">'.$threadtitle.'</a>
            <p>'.$threaddesc.'</p>
        </div>';
    }
    }
    else{
        echo "<div><h1>Be the first person to ask a question by logging in</h1></div>";
    }
}
        ?>
        <?php
        session_start();
        if ($_SESSION['loggedin']){
        echo '<div class="askquestionh1">
            <h1>Ask a Question</h1>
        </div>
        <form action="php/threadlistbackend.php?catid=<?php echo $catid?>" method="post">
        <div class="askquest">
            <input type="hidden" name="catid" value="'.$catid.'">
            <!-- User Image by default after login -->
            <input type="text" name="threadtitle" id="title" autocomplete="off" placeholder="Question Title">
            <textarea name="threaddesc" id="desc" cols="30" rows="10" placeholder="Question Description"></textarea>
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
            <input type="hidden" name="catid" value="'.$catid.'">
            <!-- User Image by default after login -->
            <input type="text" name="threadtitle" id="title" autocomplete="off" placeholder="Question Title" style="background-color: #a5a5a547;" readonly>
            <textarea style="background-color: #a5a5a547;" name="threaddesc" id="desc" cols="30" rows="10" placeholder="Question Description" readonly></textarea>
            <a class="btn">Submit</a>
        </div>
    </form>
    </div>';
    }
    ?>
</body>

</html>