<?php
require 'partials/_db_connect.php';
session_start();
if ($_SESSION['signin'] == true || $_SESSION['loggedin'] == true){
    echo '
    <!DOCTYPE html>
    <html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Document</title>
        <style>
            *{
                padding: 0px;
                margin: 0px;
                box-sizing: border-box;
            }
            #slider{
                overflow: hidden;
            }
            .inner{
                width: 400%;
                display: flex;
                flex-direction: row;
                overflow: hidden;
                position: relative;
            }
            header{
                background-color: white;
                position: fixed;
                top: 0px;
                z-index: 4;
                width: 100vw;
            }
            .slide{
                position: relative;
                width: 100%;
                height: 470px;
                background-color: red;
                margin: 0px 1px;
                margin-top: 1px;
            }           
            .lrsli {
                display: inline-block;
                border-radius: 100%;
                height: 13px;
                width: 13px;
                background-color: black;
                margin: 0px 3px;
                opacity: .4;
            }
            .irsli {
                display: inline-block;
                border-radius: 100%;
                height: 13px;
                width: 13px;
                margin: 0px 3px;
                opacity: .4;
            }
            div#bullets {
                display: inline-block;
                position: relative;
                top: -25px;
                left: 46vw;
            }
            #slide1{
                background: url("code.jpg") no-repeat center center/cover;
            }
            #slide2{
                background: url("code2.jpg") no-repeat center center/cover;
            }
            #slide3{
                background: url("code3.jpeg") no-repeat center center/cover;
            }
            #slide4{
                background: url("code4.jpg") no-repeat center center/cover;
            }
            #inner {
                margin-top: 67px;
            }
            #rsli1:checked + #inner{
                margin-left: 0px;
            }
            #rsli2:checked + #inner{
                margin-left: -100%;
            }
            body{
                height: 1000px;
            }
            #cat1 img {
                height: 190px;
                width: 328px;
            }
            #catti {
                text-decoration: none;
                color: #2196f3;
                font-weight: 900;
                font-family: arial;
                font-size: 30px;
            }
            #cat1 {
                display: inline-block;
            }
            #catti{
                text-align: center;
            }
            #catti:hover{
                text-decoration: underline;
            }
            #catdes {
                width: auto;
                padding: 15px 18px;
            }
            #catb {
                padding: 10px 10px;
                border: none;
                outline: none;
                border: 1 px solid white;
                background-color: #009688;
                color: white;
                font-family: ar;
                font-size: 17px;
                font-weight: 900;
                font-family: arial;
            }           
            #catbtn {
                display: flex;
                justify-content: center;
                align-items: center;
            }
            #catb:hover {
                transition-duration: 0.5s;
                box-shadow: 0 0 10px 5px #009688;
            }
            #categories{
                display: flex;
                flex-flow: wrap;
                justify-content: center;
                align-items: center;
            }
            #cat1 {
                display: inline-block;  
                margin-left: 48px;
                margin-top: 10px;
                background-color: #f0f0f0d9;
                padding: 10px;
                box-shadow: 0 0 10px 0px black;
                width: 348px;
                height: auto;
            }
            #cat1{
                margin-bottom: 40px;
            }
            #logo h5 {
                font-weight: 900;
                font-family: arial;
                font-size: 20px;
                color: #3b2365;
                height: 29px;
                text-align: center;
                padding-left: 24px;
            }
body{
    background-color: #bdbcbc;
}
header {
    background-color: white;
}
#search{
    display: inline-block;
}
#logo {
    display: flex;
    flex-direction: column;
    justify-content: center;
    align-items: center;
    padding-top: 0px;
}
input[type="search"] {
    padding: 10px 10px;
    border-radius: 5px;
    width: 686.1px;
    background-color: #e8e8e8;
    font-family: arial;
    font-weight: 900;
    color: #000000d1;
    font-size: 18px;
    padding-left: 47px;
    transition: all 0.2s linear;
    border: none;
    outline: none;
    border: 1px solid transparent;
}
i img {
    height: 28px;
    font-weight: 900;
    position: relative;
    top: 8px;
    left: 42px;
    opacity: 0.8;
}
input[type="search"]:hover {
    background: white;
    border: 1px solid blue;
}
input[type="search"]:focus {
    background: white;
    border: 1px solid blue;
}
#logo img{
height: 32px;
    margin-left: 21px;
    margin-top: 6px;
}
#profile h5{
font-size: 22px;
font-family: arial;
color: black;
display: none;
}
#profile img {
    height: 44px;
    display: inline-block;
}
input[type="file"] {
    position: relative;
    right: 45px;
    width: 37px;
    top: -18px;
    height: 22px;
    border-radius: 100%;
    display: inline-block;
    opacity: 0;
}
        </style>
    </head>
    <body>
    '; 
        require 'partials/_header.php';
    echo '
      <main>
        <div id="slider">
            <div class="inner" id="inner">
                <div class="slide" id="slide1">
                    <div class="content">
                        This is content 1
                    </div>
                </div>
                <div class="slide" id="slide2">
                    <div class="content">
                        This is content 2 
                    </div>
                </div>
                <div class="slide" id="slide3">
                    <div class="content">
                        This is content 3
                    </div>
                </div>
                <div class="slide" id="slide4">
                    <div class="content">
                        This is content 4
                    </div>
                </div>
            </div>
            <div id="bullets">
                <input type="radio" name="rsli" id="rsli1" class="irsli" checked>
                <input type="radio" name="rsli" id="rsli2" class="irsli">
                <input type="radio" name="rsli" id="rsli3" class="irsli">
                <input type="radio" name="rsli" id="rsli4" class="irsli">
            </div>
        </div>
    </main>
    <section id="categories">';
    $sql = 'select * from `categories`';
    $result = mysqli_query($connection,$sql);
    while ($row = mysqli_fetch_assoc($result)){
        echo '
            <div class="cat" id="cat1">
            <img src="https://source.unsplash.com/250x150/?code,'.$row['cat_title'].'" alt="">
            <a href="" id="catti"><h4>'.$row['cat_title'].'</h4></a>
            <p id="catdes">
                '.$row['cat_desc'].'
            </p>
            <div id="catbtn">
                <a id="catb" href="/PHP/crysco/threadlist.php?catid='.$row['cat_id'].'">View Thread</a>
            </div>
            </div>
            ';
    }
    echo '
    </section>
</body>
    <script src="genindex.js"></script>
    <script>
      document.getElementById("file").addEventListener("change" , (e) => {
          file = e.target.files[0]
          srcc = URL.createObjectURL(file)
          document.getElementById("user").src = srcc;
      })
    </script>
    </html>
    ';
}
    else{
        echo '
        <!DOCTYPE html>
        <html lang="en">
        <head>
            <meta charset="UTF-8">
            <meta http-equiv="X-UA-Compatible" content="IE=edge">
            <meta name="viewport" content="width=`device-width`, initial-scale=1.0">
            <title>Sign in</title>
        </head>
        <body>
        <div class="container" style="font-family: arial;font-weight: 900;text-align: center;font-size: 36px;">
            <h1>Please sign in first.</h1>
        </div>
        </body>
header("Content-Type: application/javascript");
        <script src="genindex.js"></script>
        </html>;';
    }
?>