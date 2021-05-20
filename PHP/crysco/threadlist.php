<?php
session_start();
require 'partials/_db_connect.php';
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
        body {
    background-color: #c1c1c1;
    height: 2000px;
}
main {
    background-color: white;
    width: 97%;
    height: 1000px;
    display: inline-block;
    margin-left: 1%;
    margin-top: 1%;
    padding: 29px;
}
.jumboTron {
    display: grid;
    grid-template-areas: "thumbnail des des";
    background-color: white;
    border: 1px solid transparent;
    border-bottom: 1px solid #846a6a;
    padding: 18px 26px;
}
.jumboTron:hover{
    border-right: 1px solid black;
    border-left: 1px solid black;
    border-top: 1px solid black;
    border-bottom: 1px solid black;
}
p {
    font-family: arial;
    font-weight: 900;
    font-size: 18px;
}
a {
    font-family: arial;
    font-size: 30px;
}
div#mainq {
    background-color: white;
    height: 479px;
    padding: 20px;
    display: grid;
    grid-template-areas: "qtn qd qd qd";
}
.thumbnail{
    grid-area: thumbnail;
    width: 195px;
}
.des{
    grid-area: des;
    width: 1152px;
}
main{
    background: none;
}
.cont h1 {
    font-size: 68px;
    color: #244845;
}
.cont {
    display: flex;
    justify-content: center;
    align-items: center;
    font-family: arial;
    font-size: 20px;
    height: 189px;
    background-color: #eaeaea;
    width: 1417px;
    margin-left: 2.7vw;
    margin-top: 119px;
    border-radius: 11px;
}
.jumboTron img {
    width: 173px;
    height: 99px;
}
#question h1 {
    text-align: center;
    font-family: arial;
    font-weight: 900;
    font-size: 78px;
    margin-top: 75px;
    color: #220e44;
    margin-bottom: 22px;
}
div#qtn {
    display: flex;
    justify-content: center;
    align-items: center;
    width: 319px;
    flex-direction: column;
}
#qtn h5 {
    font-family: arial;
    font-weight: 900;
    font-size: 34px;
    text-align: center;
}

#qtn img {
    background-color: #eaeaea;
    height: 99px;
    width: 173px;
    position: relative;
    margin-bottom: 10px;
}
#qtn button {
    padding: 10px 17px;
    font-family: arial;
    font-size: 19px;
    position: relative;
    border: none;
    outline: none;
    background-color: #673ab7;
    color: white;
    font-weight: 900;
    display: inline-block;
    border-radius: 9px;
    margin-top: 95px;
}
#qtn button:hover {
    box-shadow: 0 0 10px 2px #673ab7;
}
#input#thumbnail {
    display: none;
}
textarea#desc {
    display: block;
    height: 81px;
    padding: 10px;
    border: transparent;
    outline: none;
}
textarea#desc:hover{
    box-shadow: 0 0 10px 5px black;
}
textarea#title {
    display: block;
    height: 188px;
    padding: 10px;
    border: transparent;
    outline: none;
    width: 627px;
    font-family: arial;
    color: #000000e0;
    transition: all 0.4s linear;
    font-size: 22px;
    background: #e6e6e6;
}
textarea#desc {
    display: block;
    transition: all 0.4s ease-out;
    height: 178px;
    padding: 10px;
    border: transparent;
    border-radius: 5px;
    outline: none;
    width: 627px;
    font-family: arial;
    color: #000000e0;
    font-size: 22px;
    margin: 10px 0px;
    background-color: #e6e6e6;
}
textarea#desc:focus{
    box-shadow: 0 0 10px 0px black;
    background: white;
}
textarea#desc:hover {
    box-shadow: 0 0 10px 0px black;
    background: white;
}
textarea#title:hover {
    box-shadow: 0 0 10px 0px black;
    background: white;
}
div#blam {
    display: flex;
    flex-direction: column;
    justify-content: center;
    align-items: center;
}
#both {
    display: flex;
    flex-direction: column;
    height: 392px;
    align-items: center;
    background: #ababab;
    border-radius: 5px;
    width: 648px;
}
span#imagename {
    padding: 0px 0px;
    font-size: 16px;
    font-family: arial;
    font-weight: 900;
    background: #c1c1c1;
    padding: 3px 10px;
}
textarea#title {
    display: block;
    height: 188px;
    padding: 10px;
    border: transparent;
    outline: none;
    width: 627px;
    font-family: arial;
    color: #000000e0;
    transition: box-shadow 0.4s linear;
    font-size: 22px;
    margin-top: 10px;
}
textarea#title:focus {
    box-shadow: 0 0 10px 0px black;
    background: white;
}
button#qdb {
    padding: 10px 10px;
    border: none;
    outline: none;
    border-radius: 5px;
    color: white;
    font-weight: 900;
    font-family: arial;
    background-color: #921c92;
}
div#uki {
    display: flex;
    align-items: center;
    justify-content: flex-end;
    align-items: flex-end;
}
button#qdb:hover {
    background: purple;
}
button#qdb {
    padding: 10px 10px;
    border: none;
    outline: none;
    border-radius: 5px;
    transition: all 0.1s linear;
    color: white;
    font-weight: 900;
    font-family: arial;
    background-color: #921c92;
}
div#warning {
    color: red;
    font-family: arial;
    font-weight: 900;
    font-size: 21px;
    text-align: center;
    padding-top: 19px;
    padding-right: 17px;
}
    </style>
</head>
'; 
require "partials/_header.php";
$sql = "select * from `categories` where `cat_id` = '".$_GET['catid']."'";
$result = mysqli_query($connection,$sql);
if(!$result){
    echo "wrong query";
}
while ($row = mysqli_fetch_assoc($result)){
echo '
<body>
    <figure>
        <div class="cont">
            <h1>Welcome to '.$row['cat_title'].' Forums</h1>
            <hr>
        </div>
    </figure>
<main>
'; 
}
echo '<div class="container">';
$catid = $_GET["catid"];
$sql = "select * from `threadlist` where `thread_cat_id` = '$catid'";
$result = mysqli_query($connection,$sql);
echo mysqli_error($connection);
while ($row = mysqli_fetch_assoc($result)){
    echo '
            <div class="jumboTron">
            <div class="thumbnail">
                <img src="server/images/'.$row['thread_by'].$row['thread_id'].$row['thread_thumbnail_name'].'" alt="">
            </div>
            <div class="des">
            <a href="threads.php?thread_id='.$row['thread_id'].'">'.$row['thread_title'].'</a>
            <p>'.$row['thread_desc'].'</p>
        </div>
        </div>
        ';
    }
    echo '
    </div>
<aside>
    <div id="question">
        <h1>Ask a Question</h1>
        <div id="mainq">
            <div id="qtn">
            <div id="blam">
                <img  id="sqtn">
                <span id="imagename"></span>
                <button id="blamb">Add a Thumbnail</button>
                <script>
                    document.getElementById("blamb").addEventListener("click", () => {
                        document.getElementById("thumbnail").click();
                    })
                </script>
                <input type="file" name="thumbnail" id="thumbnail" accept=".png ,.jpg,.jpeg">
            </div>
                </div>
            <div id="qd">
                <div id="both">
                    <textarea name="title" id="title" cols="30" placeholder="Enter Title"></textarea>
                    <textarea name="desc" id="desc" cols="30" placeholder="Enter Description"></textarea>
                </div>
            <div id="warning"></div>
            </div>
            <div id="uki">
            <button id="qdb">Submit</button>
            </div>
        </div>
    </div>
</aside>
</main>
</body>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
<script>
    let check = false
    let meta = false;
    document.getElementById("thumbnail").addEventListener("change", (e) => {
        document.getElementById("sqtn").src = URL.createObjectURL(e.target.files[0]);
        document.getElementById("imagename").innerText = e.target.files[0].name;
    })
    document.getElementById("qdb").addEventListener("click", () => {
        console.log("qdb clicked")
        warning = document.getElementById("warning")
        warning.innerText = "";
        title = document.getElementById("title").value;
        desc = document.getElementById("desc").value;
        temmpvar = document.getElementById("sqtn").src;
        if (temmpvar == "") {
            warning.innerText = "Please upload a image";
        }
        if (title == "") {
            warning.innerText = "Title value cant be empty";
            check = false;
        }
        if (desc == "") {
            warning.innerText = "Description value cant be empty";
            check = false;
        }
        if (title == "" && desc == "" && temmpvar == "") {
            warning.innerText = "Please Upload a thumbnail,Enter Title and Description";
            check = false;
        }
        if (title == "" && desc == "" && meta && temmpvar == "") {
            warning.innerText = "Pleae Enter Title And Description";
        }
        if (title !== "" && desc !== "" && temmpvar !== "") {
            $(document).ready(() => {
                fd = new FormData;
                files = $("#thumbnail")[0].files[0];
                fd.append("files",files);
                fd.append("catid",'; echo $_GET['catid']; echo ");";
                echo 'fd.append("username","'; echo $_SESSION['username']; echo '");';
                echo '
                fd.append("title",title);
                fd.append("desc",desc);
                $.ajax(
                    {
                        url: "partials/threadlist_backend.php",
                        method: "post",
                        data: fd,
                        contentType: false,
                        processData: false,
                        success: (data) => {
                            console.log(data)
                        }
                    }
                )   
            })
            document.getElementById("title").value = "";
            document.getElementById("desc").value = "";
            // document.getElementById("sqtn").src = "";
        }
    })
</script>
</html>';   
}
else{
    echo "<script> window.location = '/PHP/crysco/request.php'</script>";
}
?>