<?php
session_start();
$_SESSION['signin'] = false;
    require 'partials/_db_connect.php';
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sign up</title>
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

        button {
            display: inline-block;
            width: 91px;
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

        figure label {
            font-size: 17px;
            margin-bottom: 6px;
            font-size: 18px;
            color: white;
        }

        div>img {
            height: 92px;
            margin-top: 16px;
        }

        figure {
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
            height: 2.4em;
            width: 28em;
            padding: 10px;
            font-size: 1em;
            box-shadow: 0px 0px 10px 5px transparent;
            outline: none;
            border: none;
            border-radius: 5px;
        }

        figure>button:hover {
            background-color: #067a89a3;
            transition-duration: 0.2s;
        }

        figure div {
            color: red;
            padding-bottom: 11px;
            font-size: 20px;
        }
    </style>
</head>

<body>
    <main>
        <div id='container'>
            <img src="img/logo.png" alt="">
            <div id="form">
                <figure id="figure">
                    <label for="signupemail">e-mail</label>
                    <input type="text" name="signupemail" id="signupemail" autocomplete="off"
                        placeholder="Enter your email">
                    <label for="signupusername">Username</label>
                    <input type="text" name="signupusername" id="signupusername" autocomplete="off"
                        placeholder="Enter your username">
                    <label for="signuppassword">password</label>
                    <input type="text" name="signuppassword" id="signuppassword" autocomplete="off"
                        placeholder="Enter your password">
                    <label for="signupcpassword">confirm password</label>
                    <input type="text" name="signupcpassword" id="signupcpassword" autocomplete="off"
                        placeholder="Confirm your password">
                </figure>
                <button id="fb">Sign up</button>
            </div>
        </div>
    </main>
</body>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>

<script>
    $(document).ready(function () {
        document.getElementById('fb').addEventListener('click', () => {
            var s1 = document.getElementById("signupemail").value;
            var s2 = document.getElementById('signupusername').value;
            var s3 = document.getElementById('signuppassword').value;
            var s4 = document.getElementById('signupcpassword').value;
            $.ajax({
                url: 'partials/hsignup.php',
                method: 'POST',
                data: { signupemail: s1, signupusername: s2, signuppassword: s3, signupcpassword: s4 },
                success: function (data) {
                    if (data == 'Passwords do not matched') {
                        document.getElementById('signupcpassword').style.marginBottom = '10px';
                        console.log('ribit')
                        let dic = document.createElement('div');
                        let textnode = document.createTextNode(data);
                        dic.appendChild(textnode);
                        v = document.getElementById('figure')
                        v.appendChild(dic);
                    };
                    if (data == 'email already exists') {
                        document.getElementById('signupcpassword').style.marginBottom = '10px';
                        console.log('ribit')
                        let dic = document.createElement('div');
                        let textnode = document.createTextNode(data);
                        dic.appendChild(textnode);
                        v = document.getElementById('figure')
                        v.appendChild(dic);
                    };
                    if (data == 'DON') {
                        window.location = '/PHP/crysco/general.php';
                    }
                    console.log(data)
                }
            })
            var s1 = document.getElementById("signupemail").value = '';
            var s2 = document.getElementById('signupusername').value = '';
            var s3 = document.getElementById('signuppassword').value = '';
            var s4 = document.getElementById('signupcpassword').value = '';
        })
    })
</script>

</html>