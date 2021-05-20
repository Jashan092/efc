<?php
session_start();
if ($_SESSION['loggedin'] == true|| $_SESSION['signin'] == true){
    require 'partials/_db_connect.php';
    $username = $_SESSION['username'];
    $sql = "select * from `users` where `username` = '$username'";
    $result = mysqli_query($connection,$sql);
    while ($row = mysqli_fetch_assoc($result)) {
        $email = $row["user_email"];
    }
    require 'partials/_header.php';
    echo '
    <!DOCTYPE html>
    <html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Profile</title>
        <style>
            body{
                background-color: #eaeaea;
            }
            main {
    width: 90vw;
    height: 450px;
    background-color: white;
    margin-left: 5vw;
    margin-top: 6vw;
    box-shadow: 0 0 5px -2px;
    padding: 20px;
}
div#container {
    display: grid;
    grid-template-areas: "profile_icon profile_other profile_other profile_other";
}
div#image_settings {
    padding: 0px 46px;
}
#image_settings img {
    height: 334px;
}
div#profile_icon {
    width: 326px;
}   
div#image_settings {
    padding: 0px 46px;
    width: 325px;
    background: #e1e1e1;
    padding-bottom: 20px;
    border-radius: 9px;
    padding-top: 21px;
}
#image_settings img {
    height: 233px;
    width: 233px;
}
div#image_setting_options {
    display: flex;
    justify-content: space-evenly;
}
div#image_setting_options a {
    color: #1e7ac3;
    text-decoration: none;
    font-family: arial;
    font-weight: 900;
    font-size: 22px;
    align-items: center;
}
div#image_setting_options a {
    color: #1e7ac3;
    text-decoration: none;
    font-family: arial;
    font-weight: 900;
    font-size: 22px;
    align-items: center;
}
div#image_setting_options a:hover {
    color: #245e8c;
}
input[type=file]{
    display: none;
}
div#dusername {
    margin-bottom: 80px;
}
label {
    display: block;
    font-family: arial;
    font-weight: 900;
    font-family: sans-serif;
    font-size: 21px;
}
input {
    padding: 10px;
    outline: none;
    border: none;
    border-bottom: 1px solid black;
    width: 611px;
    font-family: arial;
    font-weight: bolder;
    font-size: 20px;
}
div#profile_other {
    display: flex;
    flex-direction: column;
    justify-content: center;
}
div#saveBtn {
    height: 392px;
    display: flex;
    justify-content: space-between;
    align-items: flex-end;
}
div#saveBtn button {
    padding: 11px 24px;
    background: #45a6e1;
    color: white;
    font-family: arial;
    border: none;
    outline: none;
    border-radius: 4px;
    font-size: 23px;
    transition: all 0.3s linear;
}
div#warning {
    text-align: center;
    font-family: arial;
    font-weight: 900;
    padding: 10px 0px;
}
        </style>
    </head>
    <body>
        <main>
            <div id="container">
                <div id="profile_icon">
                    <div id="image_settings">
                    ';
                    echo '<img id="imageSettingsimg" src="server/users/'.$_SESSION['username'].'/user.png">';
                    echo '
                    <div id="image_setting_options"> 
                        <input type="file" name="change" id="change">
                        <a href="#" id="changebtn">Change</a> <a href="#" id="deletebtn" >Delete</a> </div>
                        <script>
                            document.getElementById("changebtn").addEventListener("click", () => {
                                document.getElementById("change").click();
                            })
                        </script>
                    </div>
                </div>
                <div id="profile_other">
                    <div id="dusername">
                        <label for="username">username</label>
                        <input type="text" name="username" id="username">
                    </div>
                    <div id="demail">
                        <label for="email">email</label>
                        <input type="email" name="email" id="email">
                    </div>
                    <div id="Warning"></div>
                </div>
                <div id="saveBtn">
                    <button id="savebtnn">Save</button>
                </div>
            </div>
        </main>
    </body>
    <script>
        document.getElementById("change").addEventListener("change", () => {
            if (document.getElementById("change").files.length == 1) {
                filesrc = URL.createObjectURL(document.getElementById("change").files[0]);
                document.getElementById("imageSettingsimg").src = filesrc;
            }
        })
        username = "'.$_SESSION['username'].'"
        email = "'.$email.'"
        document.getElementById("username").value = username;
        document.getElementById("email").value = email;
        setInterval(() => {
            usernameChanged = false;
            emailChanged = false;
            imageChanged = false;
            if (document.getElementById("username").value !== username) {
                usernameChanged = true;
                console.log("username changed: true")
                document.getElementById("savebtnn").style.backgroundColor = "#00629e";
            }
            if (document.getElementById("email").value !== email) {
                emailChanged = true;
                console.log("email changed: true")
                document.getElementById("savebtnn").style.backgroundColor = "#00629e";
            }
            if (document.getElementById("imageSettingsimg").src !== "http://localhost/PHP/crysco/server/users/" + username + "/user.png" || document.getElementById("imageSettingsimg").src == "http://localhost/PHP/crysco/img/user.png") {
                imageChanged = true;
                console.log("Image changed: true")
                document.getElementById("savebtnn").style.backgroundColor = "#00629e";
            }
            if (imageChanged == false && usernameChanged == false && emailChanged == false){
                document.getElementById("savebtnn").style.backgroundColor = "#45a6e1";
            }
        }, 100);
        ack = false;
        document.getElementById("deletebtn").addEventListener("click", () => {
            ack = confirm("Are you sure want to delete your profile picture?")
            if (ack == true) {
                document.getElementById("imageSettingsimg").src = "http://localhost/PHP/crysco/img/user.png";
            }

        })

        document.getElementById("savebtnn").addEventListener("click", () => {
            if (document.getElementById("savebtnn").style.backgroundColor = "#00629e") {
                if (document.getElementById("username").value.length == 0) {
                    document.getElementById("Warning").style.color = "red";
                    document.getElementById("Warning").innerText = "Invalid Username Value";
                }
                if (document.getElementById("email").value.length == 0) {
                    document.getElementById("Warning").style.color = "red";
                    document.getElementById("Warning").innerText = "Invalid email Value";
                }
                else {
                    if (emailChanged == true && usernameChanged == false && imageChanged == false) {
                        sendemail = document.getElementById("email").value;
                        formd = new FormData;
                        formd.append("email",sendemail);
                        $.ajax(
                            {
                                url: "partials/profile_backend.php",
                                method: "post",
                                data: formd,
                                contentType: false,
                                processData: false,
                                success: data => {
                                    console.log(data);
                                    location.reload()
                                    console.log("yes")
                                    location.reload();
                                }
                            }
                        )
                    }
                    else if (ack == true) {
                        fd = new FormData;
                        fd.append("delete","image");
                        $.ajax(
                            {
                                url: "partials/profile_backend.php",
                                method: "post",
                                processData: false,
                                contentType: false,
                                data: fd,
                                success: data => {
                                    console.log(data);
                                    location.reload();
                                }
                            }
                        )
                    }
                    else if (usernameChanged == true && imageChanged == false && emailChanged == false) {
                        sendusername = document.getElementById("username").value;
                        fd = new FormData;
                        fd.append("username", sendusername);
                        $.ajax(
                            {
                                url: "partials/profile_backend.php",
                                method: "post",
                                processData: false,
                                contentType: false,
                                data: fd,
                                success: data => {
                                    console.log("we reached on that level")
                                    console.log(data)
                                    window.location = "/PHP/crysco/profile.php?profile=" + data;
                                }
                            }
                        )
                    }
                    else if (imageChanged == true && usernameChanged == false && emailChanged == false) {
                        sendImage = document.getElementById("change").files[0];
                        fd = new FormData;
                        fd.append("image",sendImage);
                        $.ajax(
                            {
                                url: "partials/profile_backend.php",
                                method: "post",
                                data: fd,
                                contentType:false,
                                processData: false,
                                success: data => {
                                    console.log(data);
                                    location.reload();
                                }
                            }
                        )
                    }
                    else if (imageChanged == true && usernameChanged == true && emailChanged == true) {
                        sendImage = document.getElementById("change").files[0];
                        sendusername = document.getElementById("username").value;
                        sendemail = document.getElementById("email").value;
                        fd = new FormData;
                        fd.append("username",sendusername);
                        fd.append("email",sendemail);
                        fd.append("image",sendImage);
                        $.ajax(
                            {
                                url: "partials/profile_backend.php",
                                method: "post",
                                data: fd,
                                contentType:false,
                                processData: false,
                                success: data => {
                                    console.log(data);
                                    window.location = "/PHP/crysco/profile.php?profile=" + data;
                                }
                            }
                        )
                    }
                    else if (imageChanged == true && usernameChanged == true && emailChanged == false) {
                        sendImage = document.getElementById("change").files[0];
                        sendusername = document.getElementById("username").value;
                        fd = new FormData;
                        fd.append("image",sendImage);
                        fd.append("username",sendusername);
                        $.ajax(
                            {
                                url: "partials/profile_backend.php",
                                method: "post",
                                data: fd,
                                contentType:false,
                                processData: false,
                                success: data => {
                                    console.log(data);
                                    window.location = "/PHP/crysco/profile.php?profile=" + data;
                                }
                            }
                        )
                    }
                    else if (imageChanged == false && usernameChanged == true && emailChanged == true) {
                        username = document.getElementById("username").value;
                        email = document.getElementById("email").value
                        fd = new FormData;
                        fd.append("username",username);
                        fd.append("email",email);
                        $.ajax(
                            {
                                url: "partials/profile_backend.php",
                                method: "post",
                                data: fd,
                                contentType: false,
                                processData: false,
                                success: data => {
                                    console.log("You have changed username and email")
                                    console.log(data);
                                    window.location = "/PHP/crysco/profile.php?profile=" + data;
                                }
                            }
                        )
                    }
                    else if (imageChanged == true && emailChanged == true && usernameChanged == false) {
                        sendImage = document.getElementById("change").files[0];
                        sendemail = document.getElementById("email").value;
                        fd = new FormData;
                        fd.append("image",sendImage);
                        fd.append("email",sendemail);
                        $.ajax(
                            {
                                url: "partials/profile_backend.php",
                                method: "post",
                                data: fd,
                                contentType: false,
                                processData: false,
                                success: data => {
                                    console.log(data);
                                    location.reload()
                                }
                            }
                        )
                    }
                }
            }
        })
    </script>
    </html>

    ';
}
else{
    echo "<script>window.location = '/PHP/crysco/request.php'</script>";
}

?>