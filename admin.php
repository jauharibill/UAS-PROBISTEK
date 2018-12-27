<?php
    session_start();

    if( !isset($_SESSION["login"])) {
        header("Location: login.php");
    }
    require 'functions.php';

    //pagination
    $jumlahDataPerHalaman = 5;
    $jumlahData = count(query("SELECT * FROM mahasiswa"));
    $jumlahHalaman = ceil($jumlahData / $jumlahDataPerHalaman);
    $halamanAktif = ( isset($_GET["p"]) ) ? $_GET["p"] : 1; 
    $awalData = ( $jumlahDataPerHalaman * $halamanAktif) - $jumlahDataPerHalaman;
    $hasilHalamanPertama = ($halamanAktif-1)*$jumlahDataPerHalaman;
    $noAwal = 0;
    $no = ($hasilHalamanPertama + 1) - 1;

    $mahasiswa = query("SELECT * FROM mahasiswa ORDER BY NIM ASC LIMIT $awalData, $jumlahDataPerHalaman");

    
    //tombol cari diklik
    if( isset($_POST["cari"])) {
        $mahasiswa = cari($_POST["keyword"]);
    }
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Admin | PROBISTEK</title>
    <link rel="icon" href="images/UIN.png">
    <script type="text/javascript" src="jquery-3.3.1.js"></script>
    <script type="text/javascript" src="js/bootstrap.js"></script>
    <link rel="stylesheet" type="text/css" href="css/bootstrap.css">
    <link rel="stylesheet" type="text/css" href="css/style.css">
    <style>
        body {
            background-color: #EFEEEC;
        }

        header {
            background-color: white;
        }

        #tambahMhs {
            margin-right: -29cm;
        }

        table.table-bordered{
            border:5px solid black;
            background-color: white;
            width: 90%;
        }

        table.table-bordered > thead > tr {
            border:3px solid black;
        }

        table.table-bordered > tbody > tr {
            border:3px solid black;
        }

        table.table-bordered {
            border: 3px solid black;
        }
        
        table > caption {
            color: black;
        }

        #tableRow {
            height: 50px;
        }

        .table > tbody > tr > td {
            vertical-align: middle;
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
            <nav class="navbar navbar-expand-lg navbar-dark">
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent"
                    aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <ul class="navbar-nav mr-auto">
                        <form class="form-inline my-2 my-lg-0" action="" method="post">
                            <!-- <input class="form-control mr-sm-2" type="search" placeholder="Masukkan keyword" aria-label="Search" name="keyword" autofocus autocomplete="off">
                            <button class="btn btn-success my-2 my-sm-0" type="submit" name="cari">Cari</button> -->
                        </form>
                    </ul>
                    <a href="logout.php">
                        <button id="adminBtn" class="btn btn-danger" type="button">Logout!</button>
                    </a>
                </div>
            </nav>
        </div>
    </header>

    <br><br><br><br><br>

    <center>
        <div class="container">
            <div class="row">
                <div class="col-sm-6">
                    <div class="thumbnail">
                        <a href="adminMhs/index.php">
                            <img src="images/mahasiswa.jpg" class="rounded" style="width:90%">
                        </a>
                    </div>
                </div>
                <div class="col-sm-6">
                    <div class="thumbnail">
                        <a href="adminStaf/index.php">
                            <img src="images/staf.jpg" class="rounded" style="width:90%">
                        </a>
                    </div>
                </div>
            </div>
        </div>

        <br><br><br>

        <div class="container">
            <div class="row">
                <div class="col-sm-6">
                    <div class="thumbnail">
                        <a href="adminArtkl/index.php">
                            <img src="images/artikel.jpg" class="rounded" style="width:90%">
                        </a>
                    </div>
                </div>
            </div>
        </div>

        <br><br><br><br><br>
    </center>

    <script type="text/javascript" src="jquery-3.3.1.js"></script>
    <script type="text/javascript" src="js/bootstrap.js"></script>
</body>

</html>