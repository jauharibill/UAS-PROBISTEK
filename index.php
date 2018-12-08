<?php
    $page= 'home';
?>

<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>PROBISTEK</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="icon" href="images/UIN.png">
    <script type="text/javascript" src="jquery-3.3.1.js"></script>
    <script type="text/javascript" src="js/bootstrap.js"></script>
    <link rel="stylesheet" type="text/css" href="css/bootstrap.css">
    <style>
        body {
            font-family: helvetica;
        }
        .image {
            padding-top: 25px;
            padding-bottom: 25px;
        }
        .col-6.contact {
            padding-top: 40px;            
            margin-bottom: 0%;
        }
        #contact1 {
            color: #58585A;
            text-align: right;
            font-size: 21px;
            margin-bottom: 0px;
        }   
        table.contact2 {
            float: right;
            margin-top: 0%;
            padding-right: 0px;
            color: #808080;
        }
        .navbar {
            background-color: #0093dd !important;
            font-size: 17px;
            font-weight: bold;
            color: #0093dd;
        }
        .navbar-nav {
            padding-left: 110px;
        }
        #adminBtn {
            margin-right: 110px;
        }
    </style>
</head>

<body>
    <header>
        <div class="container">
            <div class="row">
                <div class="col-6 image">
                    <img id="probistek" src="images/probistek2.png">
                </div>
                <div class="col-6 contact">
                    <p id="contact1"><b>HUBUNGI KAMI</b></p>
                    <table class="contact2">
                        <tr>
                            <td><img src="images/call-answer.png"></td>
                            <td>089-53878-40924</td>
                        </tr>
                    </table>
                </div>
            </div>
        </div>
        <div>
            <nav class="navbar navbar-expand-lg navbar-light bg-light">
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent"
                    aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <ul class="navbar-nav mr-auto">
                        <li class="nav-item active">
                            <a class="nav-link <?php if($page=='home'){echo 'active';}?>" href="index.php">Home</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link <?php if($page=='artikel'){echo 'active';}?>" href="artikel.php">Artikel</a>
                        </li>
                    </ul>
                    <button id="adminBtn" class="btn btn-success my-2 my-sm-0" type="button">Admin?</button>
                </div>
            </nav>
        </div>
    </header>

    <br><br><br><br><br>

    <center>
        <h1>HALAMAN INDEX</h1>
    </center>
    <script type="text/javascript" src="jquery-3.3.1.js"></script>
    <script type="text/javascript" src="js/bootstrap.js"></script>
</body>

</html>