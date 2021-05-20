<?php
// session_start();
echo '
<header id="header">
';
echo '
<style>
*{
    padding: 0px;
    margin: 0px;
    box-sizing: border-box;
}
#search {
    display: flex;
    justify-content: center;
    align-items: center;
}
#logo h5 {
    font-weight: 900;
    font-family: arial;
    font-size: 20px;
    color: #3b2365;
    height: 29px;
    text-align: center;
}
#logo {
    display: flex;
    flex-direction: column;
    justify-content: center;
    align-items: center;
    padding-top: 0px;
}
header {
    background: white;
    width: 100vw;
    position: fixed;
    top: 0px;
    display: flex;
    justify-content: space-between;
    box-shadow: 0 0 8px -1px;
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
i img {
    height: 28px;
    font-weight: 900;
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
}
#profile {
    display: flex;
    justify-content: center;
    align-items: center;
}
#profile h5{
font-size: 22px;
font-family: arial;
color: black;
bottom: 14px;
/* display: inline-block; */
display: none;
}
#profile img {
    height: 44px;
    display: inline-block;
    padding-right: 47px;
}
input[type="file"] {
    width: 37px;
    height: 25px;
    border-radius: 100%;
    display: inline-block;
    opacity: 0;
    position: relative;
    left: -40px;
    border: 1px solid red;
    display: none;
}
div#profile_bar {
    display: block;
    background-color: #ffffff;
    border-radius: 5px;
    padding: 14px 0px;
    width: 269px;
    position: absolute;
    top: 0px;
    border: 1px solid black;
    right: 19px;
    height: 100vh;
    right: -269px;
}
div#upper {
    display: inline-flex;
    justify-content: center;
    align-items: center;
    padding: 9px;
}
#profile img {
    height: 44px;
    display: inline-block;
    padding-right: 20px;
    padding-left: 3px;
}
#upper a {
    text-decoration: none;
    font-family: arial;
    font-weight: 900;
    color: red;
    width: auto;
    text-align: center;
}
div#pb_options {
    display: flex;
    margin-top: 18px;
    flex-direction: column;
    justify-content: center;
    align-items: center;
}
.item {
    list-style: none;
    width: 263px;
    height: 51px;
    display: flex;
    border-bottom: 1px solid #a7a7a7;
    align-items: center;
    font-family: arial;
}
.item a {
    text-decoration: none;
    font-size: 26px;
    font-family: arial;
    padding-left: 7px;
    
}
.item a:hover{
    text-decoration: underline;
}
div#cross {
    display: inline-block;
    position: relative;
    left: 237px;
    bottom: 45px;
}
div#cross:hover{
    opacity: 0.8;
}
div#cross > div:first-child {
    height: 33px;
    width: 9px;
    background: black;
    border-radius: 100px;
    transform: rotate(
45deg
);
}
div#cross > div:last-child {
    background: black;
    height: 31px;
    width: 9px;
    position: relative;
    bottom: 31px;
    transform: rotate(
314deg
);
    border-radius: 100px;
}
#userdes{
    transition: all 0.4s linear;
}
#userdes:hover{
    filter: brightness(50%);
}
</style>
        <div id="logo">
            <img src="img/logo.png" alt="">
            <h5>crysco</h5>
        </div>
        <div id="search" > 
            <form>
                <div id="searchbox">
                    <i><img src="img/search.png"></i>
                    <input type="search" name="search" placeholder="Search">
                </div>
            </form>
        </div>
        <div id="profile"> 
            <img id="userdes"src="'; 
            echo "server/users/".$_SESSION['username']."/user.png";
            echo '" alt="">
            <ul>
                <div id="profile_bar">
                    <div id="cross"><i class="fas fa-times"></i></div>
                    <div id="upper">
                        <img src="'; 
                        echo "server/users/".$_SESSION['username']."/user.png";
                        echo '" alt="">
                        <a href="">'.$_SESSION['username'].'</a>
                    </div>
                    <hr>
                    <div id="pb_options">
                            <li class="item" id="item-1"><a href="/PHP/crysco/profile.php?profile='.$_SESSION['username'].'">Account</a></li>
                            <li class="item" id="item-1"><a href="/PHP/crysco/general.php">Home</a></li>
                        <li class="item" id="item-1"><a href="#">Direct Messages</a></li>
                        <li class="item" id="item-1"><a href="#">Notifications</a></li>
                    </div>
                </div>
            </ul>
        </div>
    </header>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css
    " rel="stylesheet">
<script>
    $(document).ready(() => {
        $("#userdes").click(() => {
            $("#profile_bar").animate({right: "5px"},1000)
        })
        $("#cross").click(() => {
            $("#profile_bar").animate({right: "-269px"},1000)
        })
        setInterval(() => {
            pscro = window.scrollY;
            setTimeout(() => {
                cscro = window.scrollY;
                if (pscro > cscro) {
                    $("#header").fadeOut(300);
                }
                else {
                    $("#header").fadeIn(300);
                }
            }, 200);
        }, 400);
    })
</script>
    ';
?>