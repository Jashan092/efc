<?php
include 'php/_dbconnection.php';
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>XOR</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.13.0/css/all.min.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-eOJMYsd53ii+scO/bJGFsiCZc+5NDVN2yr8+0RDqr0Ql0h+rP48ckxlpbzKgwra6" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-JEW9xMcG8R+pH31jmWH6WWP0WintQrMb4s7ZOdauHnUtxwoG2vI5DkLtS3qm9Ekf" crossorigin="anonymous">
    </script>

    <link rel="stylesheet" href="index.css?v=<?php echo time();?>">
</head>

<body>
    <section id="modal-1" class="modal-active">
        <main>
            <div id="mh">Login</div>
            <hr>
            <div id="mb">
                <label for="email">e-mail </label>
                <input type="text" name="loginemail" id="loginemail">
                <label for="password">Password</label>
                <input type="password" name="loginpassword" id="loginpassword" autocomplete="off
                ">
                <span>
                    <i class="far fa-eye fa-eye-slash" id="togglePassword" onclick="togglep()"></i>
                </span>
                <button class="btn" id="mbsub">Submit</button>
                <hr>
            </div>
            <div id="mbt">
                <button id="mbcls">Close</button>
            </div>
        </main>
    </section>

    <section id="modal-2">
        <main>
            <div id="mh2">Sign Up</div>
            <hr>
            <div id="mb2">
                <label for="email">e-mail </label>
                <input type="text" name="signupemail" id="signupemail">
                <label for="password">Password</label>
                <input type="password" name="signuppassword" id="password2" autocomplete="off">
                <span>
                    <i class="far fa-eye fa-eye-slash" id="togglePassword1" onclick="togglecp1()"></i>
                </span>
                <label for="cpassword">Confirm password</label>
                <input type="password" name="signupcpassword" id="cpassword" autocomplete="off">
                <div id="response" style="color: red;"></div>
                <span>
                    <i class="far fa-eye fa-eye-slash" id="togglePassword2" onclick="togglecp2()"></i>
                </span>
                <button type="submit" class="btn" id="mbsub2">Submit</button>
                <hr>
            </div>
            <div id="mbt2">
                <button id="mbcls2">Close</button>
            </div>
        </main>
    </section>

    <header>
        <nav>
            <section id="n1s1">
                <ul>
                    <li class="item" id="item-1"><a href="#">Home</a></li>
                    <li class="item" id="item-2"><a href="#">About</a></li>
                    <li class="item" id="item-3"><a href="#" id="n1s13a">Profile</a>
                        <ul id="n1s1-dropbox">
                            <a href="#" id="a1">Avatar</a>
                            <a href="#">Emotes</a>
                            <a href="#">Private Messages</a>
                        </ul>
                    </li>
                </ul>
            </section>
            <section id="n1s2">
                <div class="search">
                    <form action="index.php">
                        <input type="search" name="search" id="search" placeholder="Search here">
                        <button type="submit" id="nava" href="/PHP/Forum_1/index.php?">Search</button>
                    </form>
                </div>
                <?php
                session_start();
                if (isset($_GET['signup']) && $_GET['signup'] == true){
                    if ($_SESSION['signup'] == true){
                        echo '<button class="btn" id="n1s2-btn" style="margin-right: 44px;background-color: #682db7; padding: 7px 15px;
                        margin-right: 41px;" onclick="web">Login</button>';
                    }
                    else{
                        echo '<button class="btn" id="n2s2-btn2">Sign Up</button>';
                        echo '<button class="btn" id="n1s2-btn">Login</button>';
                    }
                }
                elseif (isset($_SESSION['loggedin']) && $_SESSION['loggedin'] == true){
                    echo '<div id="afterlogin">
                    <a>'.$_SESSION['loginemail'].'</a>
                    <img src="avatar.png" alt="" id="afterimg">
                    <input type="file" name="dp" id="dp" onchange="getImage(this.value);">
                </div>';
                }
                elseif (isset($_GET['login']) && $_GET['login'] == true){ 
                    if ($_SESSION['loggedin'] == true){
                        // echo "hi".$_SESSION['loginemail'];
                        echo '<div id="afterlogin">
                        <a>'.$_SESSION['loginemail'].'</a>
                        <input type="file" name="" id="">
                        <img src="avatar.png" alt="" id="afterimg">
                    </div>';
                    }
                    else{
                        echo '<button class="btn" id="n2s2-btn2">Sign Up</button>';
                        echo '<button class="btn" id="n1s2-btn">Login</button>';
                    }
                }
                else{
                    echo '<button class="btn" id="n2s2-btn2">Sign Up</button>';
                    echo '<button class="btn" id="n1s2-btn">Login</button>';
                }
                ?>
                <script>
                function web() {
                    window.location = '/PHP/Forum_1/index.php'
                }
                </script>
                <!-- <button class="btn" id="n2s2-btn2">Sign Up</button>
                <button class="btn" id="n1s2-btn">Login</button> -->
            </section>
        </nav>
    </header>
    <?php
        if(isset($_GET['search']) == true){
            $query = $_GET['search'];
    echo '<link rel="stylesheet" href="main.css">';
    echo '<div id="search-results">
        <dic class="container" style="display: flex; justify-content: center; align-items: center; padding-top: 40px;" >
            <h1>Search results for '.$query.'</h1>
            </dic>
            </div>';
        $sql = "select * from threadlist where match (thread_title) against ('".$_GET['search']."')";
        $result = mysqli_query($connec, $sql);  
        while ($row = mysqli_fetch_assoc($result)){
            $stitle = $row['thread_title'];
            $sdesc = $row['thread_desc'];
            echo "<h1> $stitle</h>";
        }
        if (!$result){
            echo "Hot";
            echo mysqli_error($connec);
        }
    }
    ?>
    <figure>
    </figure>
    <main>
        <h1 id="mainh1">iForms</h1>
        <div class="container1">
            <?php
            $sql = 'select * from `categories`';
            $result = mysqli_query($connec,$sql);
            $gt  = mysqli_num_rows($result);
            while ($row = mysqli_fetch_assoc($result)){
                $catid = $row['catid'];
                $title = $row['cat_title'];
                $desc = $row['cat_desc'];
            
            echo '
            <div class="card" id="card-1">
                <img src="https://source.unsplash.com/1600x900/?code,'.$title.'" alt="">
                <h1>'.$title.'</h1>
                <p>'.$desc.'</p>
                <a href="/PHP/Forum_1/threadlist.php?catid='.$catid.'"><button class="cardbtn">View Threads</button></a>
            </div>';
            }
                ?>
        </div>
    </main>
</body>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-JEW9xMcG8R+pH31jmWH6WWP0WintQrMb4s7ZOdauHnUtxwoG2vI5DkLtS3qm9Ekf" crossorigin="anonymous">
</script>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
<script src="index.js"></script>
<script>
$(document).ready(function() {
    $("#mbsub2").on('click', () => {
        let signupemail = $('#signupemail').val();
        let signuppassword = $('#password2').val();
        let signupcpassword = $('#cpassword').val();
        $('#signupemail').val('');
        $('#password2').val('');
        $('#cpassword').val('');
        console.log(signuppassword + signupemail + signupcpassword)
        $.ajax({
            url: 'php/_signup_handle.php',
            type: 'post',
            data: {
                'signupemail': signupemail,
                'signuppassword': signuppassword,
                'signupcpassword': signupcpassword
            },
            success: (data) => {
                if (data == 'E-mail Already Exists') {
                    $('#response').text('email already exists.');
                }
                if (data == 'Passwords do not matched.') {
                    $('#response').text('Passwords Do Not Matched.')
                }
                if (data == "EIGO") {
                    console.log("EIGO");
                    window.location = '/PHP/Forum_1/index.php?signup=true';
                }
            }
        })
    })
    $("#mbsub").on('click', () => {
        let loginemail = $('#loginemail').val();
        let loginpassword = $('#loginpassword').val();
        $.ajax({
            url: "php/_login_handle.php",
            type: 'post',
            data: {
                'loginemail': loginemail,
                'loginpassword': loginpassword
            },
            success: (data) => {
                console.log(data);
                if (data=='DOne') {
                    window.location = '/PHP/Forum_1/index.php?login=true';
                }
            }

        })
    })
})
</script>
</html>