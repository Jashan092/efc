<?php
session_start();
require 'partials/_db_connect.php';
echo '
<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Document</title>
<style>
body{
    height: 2000px;
}
.cont {
    font-family: arial;
    font-size: 20px;
    height: auto;
    background-color: #eaeaea;
    width: 1417px;
    margin-left: 2.7vw;
    margin-top: 119px;
    border-radius: 11px;
    padding: 20px;
}
.cont h1 {
    font-size: 50px;
    color: #244845;
    padding: 22px;
}
.cont p {
    font-size: 28px;
    font-family: arial;
    font-weight: 900;
    color: #424242;
    padding: 30px;
}
h6 {
    text-align: right;
    font-size: 19px;
    padding: 2px 22px;
}
div.time {
    font-weight: 500;
    font-family: arial;
    text-align: right;
}
div.jumboTron {
    background: #d8d8d8;
    width: 1409.2px;
    margin-left: 3vw;
    border-radius: 3px;
    border-bottom: 1px solid black;
    padding: 17px;
    font-family: arial;
}
div.username {
    display: inline-block;
    position: relative;
    bottom: 12px;
    left: 5px;
    color: blue;
    font-weight: 900;
}
div.username:hover {
    text-decoration: underline;
}
.user_icon img {
    height: 36px;
    display: inline-block;
    background-color: #eaeaea;
    padding: 3px;
    border-radius: 5px;
}
div.user_icon {
    display: inline-block;
}
#container {
    margin-top: 63px;
}
span.time {
    color: red;
    width: 1226px;
    display: inline-block;
    text-align: right;
}
div.desc {
    font-family: arial;
    font-weight: 500;
    font-size: 21px;
    padding-left: 46px;
}
div#write_container {
    width: 90vw;
    height: auto;
    background: #eaeaea;
    padding: 14px;
    display: flex;
    border-radius: 7px;
    flex-direction: column;
    justify-content: center;
    align-items: center;
}
textarea#write_in {
    padding: 10px;
    width: 1231px;
    border: transparent;
    outline: none;
    border-radius: 7px;
    font-family: arial;
    font-weight: 900;
    font-size: 16px;
    transition: all 0.3s linear;
}
div#write_container {
    width: 93vw;
    height: auto;
    background: #cacaca;
    padding: 14px;
    display: flex;
    border-radius: 7px;
    flex-direction: column;
    justify-content: center;
    align-items: center;
    margin-left: 3vw;
    margin-top: 65px;
    border-radius: 7px;
}
div#write_btn {
    display: flex;
    justify-content: flex-end;
    margin-top: 15px;
}
button#write_button {
    color: white;
    outline: none;
    border: 1px solid transparent;
    padding: 11px 14px;
    font-size: 13px;
    background-color: #009688;
    font-weight: 900;
    font-family: arial;
    border-radius: 7px;
    font-size: 17px;
    transition: all 0.3s linear;
}
button#write_button:hover {
    background-color: #25827a;
}
textarea#write_in:focus {
    box-shadow: 0 0 10px 3px #03a9f4;
}
</style>
';
echo '
</head>
<body>';
require "partials/_header.php";
$threadid = $_GET['thread_id'];

$sql = "select * from `threadlist` where `thread_id` = $threadid";
$result = mysqli_query($connection,$sql);
while ($row = mysqli_fetch_assoc($result)){
    echo '
    <div class="cont">
    <h1>'.$row['thread_title'].'</h1>
    <hr>
    <p> '.$row['thread_desc'].'</p>
    <hr>
    <h6> posted by <a href=".">'.$row['thread_by'].'</a></h6>
</div>
<div id="container">
    '; 
    $sql = "select * from `comments` where `comment_thread_id` = '$threadid'";
    $result = mysqli_query($connection,$sql);
    if (!$result){
        echo "WRONG QUERY";
    }
    while ($row = mysqli_fetch_assoc($result)){
    echo '
    <div class="jumboTron">
        <div class="user_icon"><img src="img/logo.png" alt="erorf"></div>
        <div class="username">'.$row['comment_by'].'<span class="time">'.$row['timestamp'].'</span></div>
        <div class="desc">'.$row['comment_content'].'</div>
    </div>
</div>
    '
    ;
}
}
echo '
<div id="write_comment">
    <div id="write_container">
        <div id="write_content">
            <textarea name="write_in" id="write_in"  rows="10" placeholder="Enter The Answer"></textarea>
            <div id="write_btn">
                <button id="write_button">Sumbit</button>
            </div>
        </div>
    </div>
</div>
</body>
<script>
    $(document).ready(() => {
        $("#write_button").click(
            () => {
                console.log("Clicked")
                if ($("#write_in").val() !== "") {
                    console.log("value is not 0")
                    content = $("#write_in").val();
                    fd = new FormData;
                    fd.append("content",content);
                    fd.append("thread_id",'.$_GET['thread_id'].');
                    fd.append("thread_user","'.$_SESSION['username'].'");
                    $.ajax(
                        {
                            url: "partials/threads_backend.php",
                            method: "post",
                            data: fd,
                            contentType: false,
                            processData: false,
                            success: data => {
                                console.log(data);
                                if (data == "Thread Inserted Successfuly") {
                                    
                                }
                            }
                        }
                    )
                }
                else {
                    console.log("Value is 0")
                }
            }
        )
    } )
</script>
</html>';
?>