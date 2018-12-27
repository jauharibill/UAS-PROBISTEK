<?php
    session_start();

    if( isset($_SESSION["login"])) {
        header("Location: admin.php");
        exit;
    }
    require "functions.php";

    if( isset($_POST["login"])) {
       
        $username = $_POST["username"];
        $password = $_POST["password"];

        $result = mysqli_query($conn, "SELECT * FROM admin WHERE username = '$username'");

        //cek username
        if( mysqli_num_rows($result) === 1) {
            
            //cek password
            $row = mysqli_fetch_assoc($result);
            if( password_verify($password, $row["password"]) ) {

                //set session
                $_SESSION["login"] = true;

                header("Location: admin.php");
                exit;
            }
        }

        $error = true;
        if ($error) {
            echo "<script>
                    alert('username atau password salah');
                </script>";
        }
    }
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Login | Probistek</title>
    <link rel="icon" href="images/UIN.png">
    <script type="text/javascript" src="jquery-3.3.1.js"></script>
    <script type="text/javascript" src="js/bootstrap.js"></script>
    <link rel="stylesheet" type="text/css" href="css/bootstrap.css">
    <link rel="stylesheet" type="text/css" href="css/style.css">
    <style>
        body {
            background-color: #efeeec;
        }

        #username {
            margin-left: 12.8cm;
        }

        #password {
            margin-left: 12.8cm;
        }

        .back {
            padding-left: 10px;
            padding-top: 15cm;
        }

    </style>

</head>

<body>
    <a href="index.php" class="back" style="text-align: left;">&larr;Kembali ke awal</a>    
    <div class="login">

        <img src="images/probistek3.png">
        <br><br>
        <p class="admin"><b>Login Admin</b></p>
        <br>
        <form action="" method="POST">
            <ul>
                <input class="form-control col-md-3" type="text" name="username" id="username" placeholder="Masukkan Username" autocomplete="off">
            </ul>
            <ul>
                <input class="form-control col-md-3" type="password" name="password" id="password" placeholder="Masukkan Password">
            </ul>
            <br>
            <button class="btn btn-success" type="submit" name="login">Login!</button>
        </form>


    </div>
</body>

</html>