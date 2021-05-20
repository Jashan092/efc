<?php
    require 'partials/_db_connect.php';
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Crysco</title>
    <style>
        * {
            padding: 0px;
            margin: 0px;
            box-sizing: border-box;
            font-family: Arial, Helvetica, sans-serif;
            font-weight: 900;
        }

        body::before {
            content: '';
            position: absolute;
            top: 0px;
            width: 100%;
            height: 100%;
            background: url('https://images7.alphacoders.com/888/thumb-1920-888098.jpg') no-repeat center;
            filter: brightness(30%);
            z-index: -1;
        }

        aside>button {
            display: inline-block;
            width: 72px;
            height: 43px;
            font-size: 18px;
            border-radius: 5px;
            font-weight: 900;
            outline: none;
            border: transparent;
            position: relative;
            left: 8px;
            background-color: #00bcd4a3;
            color: white;
            top: 0px;
        }

        input:focus {
            box-shadow: 0px 0px 10px 5px #2196f3;
            transition-duration: 0.5s;
            /* outline: none; */
            /* border: none; */
        }

        aside label {
            font-size: 17px;
            margin-bottom: 6px;
            font-size: 18px;
            color: white;
        }

        div>img {
            height: 92px;
            margin-top: 41px;
        }

        aside {
            display: flex;
            flex-direction: column;
            padding-top: 60px;
        }

        input[type=text] {
            margin-bottom: 23px;
        }

        #container {
            display: flex;
            justify-content: center;
            align-items: center;
            flex-direction: column;
        }

        input {
            width: 28em;
            padding: 10px;
            font-size: 1em;
            height: 2.4em;
            box-shadow: 0px 0px 10px 5px transparent;
            outline: none;
            border: none;
            border-radius: 5px;
        }

        aside>button:hover {
            background-color: #067a89a3;
            transition-duration: 0.2s;
        }

        a {
            transition-duration: 0.5s;
            text-decoration: none;
            color: white;
            padding: 13px 13px;
            display: inline-block;
            background-color: #036d63;
            border-radius: 3px;
            position: absolute;
            right: 65px;
            top: 20px;
        }

        a:hover {
            box-shadow: 0 0 10px 5px cyan;
            transition-duration: 0.5s;
        }

        figure div {
            color: red;
            padding-bottom: 14px;
            font-size: 20px;
            margin-left: 6px;
        }
    </style>
</head>

<body>
    <main>
        <nav>
            <a href="/PHP/crysco/signup.php">Create Account</a>
        </nav>
        <div id='container'>
            <img src="img/logo.png" alt="">
            <div id="form">
                <!-- <form> -->
                <aside>
                    <label for="loginemail">e-mail</label>
                    <input type="text" name="loginemail" id="loginemail" autocomplete="off"
                        placeholder="Enter your email">
                    <label for="loginpassword">password</label>
                    <input type="text" name="loginpassword" id="loginpassword" autocomplete="off"
                        placeholder="Enter your password">
                    <figure id="figure"></figure>
                    <button id="lb">Login</button>
                </aside>
                <!-- </form> -->
            </div>
        </div>
    </main>
</body>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
<script>
    $(document).ready(function () {
        document.getElementById('lb').addEventListener('click', (e) => {
            console.log("clicked")
            var d1 = document.getElementById("loginemail").value;
            var d2 = document.getElementById('loginpassword').value;
            console.log(d1, d2)
            $.ajax({
                url: 'partials/hlogin.php',
                method: 'post',
                data: { loginemail: d1, loginpassword: d2 },
                success: data => {
                    if (data == 'Email Does Not Exist') {
                        let dic = document.createElement('div');
                        let textnode = document.createTextNode(data);
                        dic.appendChild(textnode);
                        v = document.getElementById('figure')
                        v.appendChild(dic);
                    }
                    if (data == "Password Does Not Matched") {
                        let dic = document.createElement('div');
                        let textnode = document.createTextNode(data);
                        dic.appendChild(textnode);
                        v = document.getElementById('figure')
                        v.appendChild(dic);
                    }
                    if (data == 'Login Done') {
                        let dic = document.createElement('div');
                        let textnode = document.createTextNode(data);
                        dic.appendChild(textnode);
                        v = document.getElementById('figure')
                        v.appendChild(dic);
                        window.location = '/PHP/crysco/general.php';
                    }
                    console.log(data);
                }
            })
            d1.value = '';
            d2.value = '';
        })
    })
</script>

</html>