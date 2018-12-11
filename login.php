<?php

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Admin | Probistek</title>
    <link rel="icon" href="images/UIN.png">
    <script type="text/javascript" src="jquery-3.3.1.js"></script>
    <script type="text/javascript" src="js/bootstrap.js"></script>
    <link rel="stylesheet" type="text/css" href="css/bootstrap.css">
    <link rel="stylesheet" type="text/css" href="css/style.css">
    <style>
        .login {
            background-color: #efeeec;
        }
    </style>
</head>

<body class="login">
    <div>

        <img src="images/probistek3.png">
        <br><br>
        <p class="admin"><b>Login Admin</b></p>
        <br>
        <form action="" method="POST">
            <ul>
                <label for="">Username</label>
                <input type="text">
            </ul>
            <ul>
                <label for="">Password</label>
                <input type="password">
            </ul>
            <a href="admin.php">
                <button class="btn btn-success" type="button">Login!</button>
            </a>
        </form>


    </div>
</body>

</html>