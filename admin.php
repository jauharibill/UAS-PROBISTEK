<?php
    require 'functions.php';
    $mahasiswa = query("SELECT * FROM mahasiswa ORDER BY NIM ASC");

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
                            <input class="form-control mr-sm-2" type="search" placeholder="Masukkan keyword" aria-label="Search" name="keyword" autofocus autocomplete="off">
                            <button class="btn btn-success my-2 my-sm-0" type="submit" name="cari">Cari</button>
                        </form>
                    </ul>
                    <a href="index.php">
                        <button id="adminBtn" class="btn btn-danger" type="button">Logout!</button>
                    </a>
                </div>
            </nav>
        </div>
    </header>


    <div id="badan">

        <br><br><br>

        <center>
            <h1>HALAMAN ADMIN</h1>

            <table class="table table-bordered">
                <tr class="table-primary">
                    <th>No.</th>
                    <th colspan="2">Aksi</th>
                    <th>Nama</th>
                    <th>NIM</th>
                    <th>Email</th>
                    <th>Jurusan</th>
                    <th>Gambar</th>
                </tr>
                <?php $no = 1; ?>
                <?php foreach ($mahasiswa as $row) : ?>
                <tr>
                    <td>
                        <?= $no; ?>
                    </td>
                    <td>
                        <a href="adminMhs/edit.php?id=<?= $row["id"];?>">
                            <button type="button" class="btn btn-warning btn-sm">Edit</button>
                        </a>
                    </td>
                    <td>
                        <button type="button" class="btn btn-danger btn-sm" data-toggle="modal" data-target="#modalHapus<?= $row["id"];?>">
                            Hapus
                        </button>
                        <div class="modal fade" id="modalHapus<?= $row["id"];?>" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                            <div class="modal-dialog" role="document">
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <h5 class="modal-title">Hapus Data Mahasiswa</h5>
                                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                            <span aria-hidden="true">&times;</span>
                                        </button>
                                    </div>
                                    <div class="modal-body">
                                        Anda yakin ingin menghapus salah satu data Mahasiswa?</p>
                                    </div>
                                    <div class="modal-footer">
                                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Batal</button>
                                        <!-- <button type="button" class="btn btn-primary">Save changes</button> -->
                                        <a href="adminMhs/hapus.php?id=<?= $row["id"];?>">
                                            <button type="button" class="btn btn-danger">Hapus</button>
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </td>
                    <td>
                        <?= $row["nama"]; ?>
                    </td>
                    <td>
                        <?= $row["NIM"]; ?>
                    </td>
                    <td>
                        <?= $row["email"]; ?>
                    </td>
                    <td>
                        <?= $row["jurusan"]; ?>
                    </td>
                    <td>
                        <?= $row["gambar"]; ?>
                    </td>
                </tr>
                <?php $no++; ?>
                <?php endforeach;?>
                <caption>Tabel Mahasiswa Probistek</caption>
            </table>
            <a href="adminMhs/tambah.php">
                <button id="tambahMhs" class="btn btn-success" type="button">Tambah Data</button>
            </a>

            <br><br>

        </center>
    </div>

    <script type="text/javascript" src="jquery-3.3.1.js"></script>
    <script type="text/javascript" src="js/bootstrap.js"></script>
</body>

</html>