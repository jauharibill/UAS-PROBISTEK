<?php
    session_start();

    if( !isset($_SESSION["login"])) {
        header("Location: ../login.php");
    }
    require '../functions.php';

    //pagination
    $jumlahDataPerHalaman = 5;
    $jumlahData = count(query("SELECT * FROM staf"));
    $jumlahHalaman = ceil($jumlahData / $jumlahDataPerHalaman);
    $halamanAktif = ( isset($_GET["p"]) ) ? $_GET["p"] : 1; 
    $awalData = ( $jumlahDataPerHalaman * $halamanAktif) - $jumlahDataPerHalaman;
    $hasilHalamanPertama = ($halamanAktif-1)*$jumlahDataPerHalaman;
    $noAwal = 0;
    $no = ($hasilHalamanPertama + 1) - 1;

    $artikel = query("SELECT * FROM artikel LIMIT $awalData, $jumlahDataPerHalaman");

    
    //tombol cari diklik
    if( isset($_POST["cari3"])) {
        $staf = cari3($_POST["keyword"]);
    }
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Admin Artikel | PROBISTEK</title>
    <link rel="icon" href="../images/UIN.png">
    <script type="text/javascript" src="jquery-3.3.1.js"></script>
    <script type="text/javascript" src="js/bootstrap.js"></script>
    <link rel="stylesheet" type="text/css" href="../css/bootstrap.css">
    <link rel="stylesheet" type="text/css" href="../css/style.css">
    <style>
        body {
            background-color: #EFEEEC;
        }

        header {
            background-color: white;
        }

        #tambahMhs {
            margin-right: -22.7cm;
        }

        #kembali {
            margin-right: 0.3cm;
        }

        table.table-bordered{
            border:5px solid black;
            background-color: white;
            width: 80%;
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
                    <img id="probistek" src="../images/probistek2.png">
                </div>
                <div class="col-6 contact">
                    <p id="contact1"><b>HUBUNGI KAMI</b></p>
                    <table class="contact2">
                        <tr>
                            <td><img src="../images/call-answer.png"></td>
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
                            <button class="btn btn-success my-2 my-sm-0" type="submit" name="cari2">Cari</button>
                        </form>
                    </ul>
                    <a href="../logout.php">
                        <button id="adminBtn" class="btn btn-danger" type="button">Logout!</button>
                    </a>
                </div>
            </nav>
        </div>
    </header>


    <div id="badan">

        <br><br><br>

        <center>
            <h1>TABEL ARTIKEL</h1>

            <table class="table table-bordered">
                <tr class="table-primary">
                    <th>No.</th>
                    <th colspan="2">Aksi</th>
                    <th>Judul</th>
                    <th>Isi</th>
                    <th>Gambar</th>
                </tr>
                
                <?php foreach ($artikel as $row): $no++; ?>
                <tr id="tableRow">
                    <td>
                        <?= $no; ?>
                    </td>
                    <td>
                        <a href="edit3.php?id=<?= $row["id"];?>">
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
                                        <h5 class="modal-title">Hapus Artikel</h5>
                                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                            <span aria-hidden="true">&times;</span>
                                        </button>
                                    </div>
                                    <div class="modal-body">
                                        Anda yakin ingin menghapus salah satu Artikel?</p>
                                    </div>
                                    <div class="modal-footer">
                                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Batal</button>
                                        <!-- <button type="button" class="btn btn-primary">Save changes</button> -->
                                        <a href="hapus3.php?id=<?= $row["id"];?>">
                                            <button type="button" class="btn btn-danger">Hapus</button>
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </td>
                    <td>
                        <?= $row["judul"]; ?>
                    </td>
                    <td>
                        <?= $row["isi"]; ?>
                    </td>
                    <td>
                        <img src="../images/<?= $row["gambar"]; ?>" alt="" width="50">
                    </td>
                </tr>
                <?php endforeach;?>

            </table>

            <!-- navigasi -->
            <?php if( $halamanAktif > 1) : ?>
                <a href="?p=<?= $halamanAktif - 1; ?>">&larr;</a>
            <?php endif; ?>
                
            <?php for( $i = 1; $i <= $jumlahHalaman; $i++) : ?>
                <?php if( $i == $halamanAktif) : ?>
                    <a href="?p=<?= $i; ?>" style="font-weight: bold; color: red;"><?= $i; ?></a>
                <?php else : ?>
                    <a href="?p=<?= $i; ?>"><?= $i; ?></a>
                <?php endif; ?>
            <?php endfor; ?>

            <?php if( $halamanAktif < $jumlahHalaman ) : ?>
                <a href="?p=<?= $halamanAktif + 1; ?>">&rarr;</a>
            <?php endif; ?>

            <br>

            <a href="../admin.php">
                <button id="kembali" class="btn btn-warning" type="button">Kembali</button>
            </a>
            <a href="tambah3.php">
                <button id="tambahMhs" class="btn btn-success" type="button">Tambah Data</button>
            </a>
            
            <br><br><br><br>

        </center>
    </div>

    <script type="text/javascript" src="jquery-3.3.1.js"></script>
    <script type="text/javascript" src="js/bootstrap.js"></script>
</body>

</html>