<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        .container{
            margin: auto;
        }
        .container a {
            text-decoration: none;
            color: white;
            background-color: #9c27b0;
            padding: 14px 109px;
            font-size: 42px;
            border-radius: 30px;
            font-family: arial;
            margin-top: 21px;
            transition: all 0.4s linear
            }   
            .container a:hover {
    box-shadow: 0 0 10px 5px #9c27b0;
}
            .container {
    display: flex;
    flex-direction: column;
    justify-content: center;
    align-items: center;
}
.container p {
    color: #1d0a40;
    font-size: 92px;
    font-weight: 900;
    font-family: arial;
    text-align: center;
}
.container a:active {
    background-color: #bd7abd;
    outline: none;
}

    </style>
</head>
<body>
    <div class="container">
        <p>Please Login first</p>
        <a href="/PHP/crysco/">Login</a>
        
    </div>
</body>
</html>