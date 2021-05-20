<!-- We have 7 types of super variables in php 
1. $_GET
2. $_POST
3. $_REQUEST
4. $_SERVER
5. $_SESSION
6. $_COOKIE
7. $_FILES -->


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>GET POST SERVER REQUEST</title>
</head>
<body>
        <form action="textorm.php" method="GET">
            Name : <input type="text" name="fname" id="fname">
            Age : <input type="text" name="age" id="age">
            <input type="submit" value="Submit">
        </form>
</body>
</html>