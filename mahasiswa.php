<?php
    $page = 'mahasiswa';
    require 'functions.php';
    $mahasiswa = query("SELECT * FROM mahasiswa ORDER BY NIM ASC");

    //Mesin Pencari Mahasiswa
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
    <title>Mahasiswa | PROBISTEK</title>
    <link rel="icon" href="images/UIN.png">
    <script type="text/javascript" src="jquery-3.3.1.js"></script>
    <script type="text/javascript" src="js/bootstrap.js"></script>
    <link rel="stylesheet" type="text/css" href="css/bootstrap.css">
    <link rel="stylesheet" type="text/css" href="css/style.css">
    <style>
        #cari {
            margin-right: 2.7cm;
        }

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
                        <li>
                            <a class="nav-link <?php if($page=='home'){echo 'active';}?>" href="index.php">Home</a>
                        </li>
                        <li>
                            <a class="nav-link <?php if($page=='artikel'){echo 'active';}?>" href="artikel.php">Artikel</a>
                        </li>
                        <li>
                            <a class="nav-link <?php if($page=='mahasiswa'){echo 'active';}?>" href="mahasiswa.php">Mahasiswa</a>
                        </li>
                    </ul>
                    <form class="form-inline my-2 my-lg-0" action="" method="post">
                        <input class="form-control mr-sm-2" type="search" placeholder="Masukkan keyword" aria-label="Search" name="keyword" autofocus autocomplete="off">
                        <button class="btn btn-success my-2 my-sm-0" type="submit" name="cari"  id="cari">Cari</button>
                    </form>
                </div>
            </nav>
        </div>
    </header>
    <div id="badan">
        <br><br><br>
        <center>
            <h1>HALAMAN MAHASISWA</h1>
            <table class="table table-bordered">
                <tr class="table-primary">
                    <th>No.</th>
                    <th>Nama</th>
                    <th>NIM</th>
                    <th>Email</th>
                    <th>Jurusan</th>
                    <th>Gambar</th>
                </tr>
                <?php $no = 1; ?>
                <?php foreach ($mahasiswa as $row) : ?>
                <tr id="tableRow">
                    <td><?= $no; ?></td>
                    <td><?= $row["nama"]; ?></td>
                    <td><?= $row["NIM"]; ?></td>
                    <td><?= $row["email"]; ?></td>
                    <td><?= $row["jurusan"]; ?></td>
                    <td>
                        <img src="images/<?= $row['gambar']; ?>" alt="" width="50">
                    </td>
                </tr>
                <?php $no++; ?>
            <?php endforeach;?>
            </table>

            <br><br><br>

        </center>
    </div>
    <script type="text/javascript" src="jquery-3.3.1.js"></script>
    <script type="text/javascript" src="js/bootstrap.js"></script>
</body>

</html>