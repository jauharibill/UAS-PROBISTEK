<?php
    require 'functions.php';
    if ( isset($_POST["register"])) {
        
        if( registrasi($_POST) > 0 ) {
            echo "<script>
                    alert ('User baru berhasil ditambahkan');
                </script>";
        } else {
            echo mysqli_error($conn);
        }
    
    }
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Register | Probistek</title>
    <link rel="icon" href="images/UIN.png">
    <script type="text/javascript" src="jquery-3.3.1.js"></script>
    <script type="text/javascript" src="js/bootstrap.js"></script>
    <link rel="stylesheet" type="text/css" href="css/bootstrap.css">
    <link rel="stylesheet" type="text/css" href="css/style.css">
    <style>
        .login {
            background-color: #efeeec;
        }

        #username {
            margin-left: 13cm;
        }

        #password {
            margin-left: 13cm;
        }

        #password2 {
            margin-left: 13cm;
        }
    </style>
</head>

<body class="login">
    <div>

        <img src="images/probistek3.png">
        <br><br>
        <p class="admin"><b>Registrasi</b></p>
        <br>
        <form action="" method="POST">
            <ul>
                <input class="form-control col-md-3" type="text" name="username" id="username" placeholder="Masukkan Username" autocomplete="off">
            </ul>
            <ul>      
                <input class="form-control col-md-3" type="password" name="password" id="password" placeholder="Masukkan Password">
            </ul>
            <ul>
                <input class="form-control col-md-3" type="password" name="password2" id="password2" placeholder="Konfirmasi Password">
            </ul>    
            <a href="login.php">
                <button class="btn btn-success" type="submit" name="register">Register!</button>
            </a>
        </form>


    </div>
</body>

</html>