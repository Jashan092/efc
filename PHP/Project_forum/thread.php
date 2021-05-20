<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-eOJMYsd53ii+scO/bJGFsiCZc+5NDVN2yr8+0RDqr0Ql0h+rP48ckxlpbzKgwra6" crossorigin="anonymous">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css"
        integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <title>Welcome to Idiscuss - Coding-form</title>
</head>

<body>
    <?php include 'partials/_header.php'; ?>
    <?php include 'partials/_db_connect.php'; ?>
    <?php
        $id = $_GET['threadid'];
        $sql = "SELECT * FROM `threads` WHERE `threads`.`thread_id` = $id";
        $result = mysqli_query($conn,$sql);
        if (!$result){
            echo "<br> this is burnt <br>";
        }
        while($row = mysqli_fetch_assoc($result)){
            $title = $row['thread_title'];
            $description = $row['thread_desc'];
        }
    ?>
    <?php
            $method = $_SERVER['REQUEST_METHOD'];
            if ($method == 'POST'){
                // INSERT THREAD INTO DATABASE 
                $comment = $_POST['comment'];
                $sql = "INSERT INTO `comments` ( `comment_content`, `thread_id`, `comment_by`, `comment_time`) VALUES ('$comment', '$id', '0', current_timestamp());";
                mysqli_query($conn,$sql);
                $showalert = true;
                if ($showalert){
                    echo '<div class="alert alert-success alert-dismissible fade show" role="alert">
                    <strong>Your Comment has been added. </strong>
                    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                      <span aria-hidden="true">&times;</span>
                    </button>
                  </div>';
                }
            }
        ?>  
    <div class="container my-4">
        <div class="jumbotron">
            <h1 class="display-4"><?php echo $title ?></h1>
            <p class="lead"><?php echo $description?></p>
            <hr class="my-4">
            <p>This is a peer to peer forum for sharing knowledge with each other.</p>
            <p class="lead">
            <p><b>Posted by Jashan</b></p>
            </p>
        </div>
    </div>    <div class="container">
        <form action="<?php echo $_SERVER['REQUEST_URI'] ?>" method="POST">
            <div class="form-group">
                <label for="desc">Type Your Comment</label>
                <div class="form-group">
                    <textarea class="form-control" id="desc" rows="3" name="comment"
                        placeholder="Enter your problem descritpion"></textarea>
                </div>
            </div>
            <button type="submit" class="btn btn-success">Post Comment</button>
        </form>
    </div>
    <div class="container">
        <h1 class='py-4 ' style="font-weight:900;">Discussions</h1>
    </div>
    <div class="container">
         <?php
        $id = $_GET['threadid'];
        $sql = "SELECT * FROM `comments` WHERE `thread_id` = $id";
        $result = mysqli_query($conn,$sql);
        while($row = mysqli_fetch_assoc($result)){
            $comment_time = $row['comment_time'];
            $id = $row['comment_id'];
            $content = $row['comment_content'];
            echo '
            <div class="media my-4">
            <img class="mr-3" src="https://source.unsplash.com/50x50/?anonymous,anonymous"
            alt="Generic placeholder image">
            <div class="media-body">
            <p class="font-weight-bold">Anonymous User at '.$comment_time.'</p>
            '.$content.'
            </div>
            </div>';
        }
        ?> 
    </div>
    <?php include 'partials/_footer.php'; ?>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-JEW9xMcG8R+pH31jmWH6WWP0WintQrMb4s7ZOdauHnUtxwoG2vI5DkLtS3qm9Ekf" crossorigin="anonymous">
    </script>
</body>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-JEW9xMcG8R+pH31jmWH6WWP0WintQrMb4s7ZOdauHnUtxwoG2vI5DkLtS3qm9Ekf" crossorigin="anonymous">
</script>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.1/dist/umd/popper.min.js"
    integrity="sha384-SR1sx49pcuLnqZUnnPwx6FCym0wLsk5JZuNx2bPPENzswTNFaQU1RDvt3wT4gWFG" crossorigin="anonymous">
</script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/js/bootstrap.min.js"
    integrity="sha384-j0CNLUeiqtyaRmlzUHCPZ+Gy5fQu0dQ6eZ/xAww941Ai1SxSY+0EQqNXNE6DZiVc" crossorigin="anonymous">
</script>
<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js"
    integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous">
</script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"
    integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous">
</script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"
    integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous">
</script>

</html>