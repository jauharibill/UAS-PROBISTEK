<?php
    require 'functions.php';
    $mahasiswa = query("SELECT * FROM mahasiswa");
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
                            <!-- <a class="nav-link <?php if($page=='home'){echo 'active';}?>" href="index.php"></a> -->
                        </li>
                        <li class="nav-item">
                            <!-- <a class="nav-link <?php if($page=='artikel'){echo 'active';}?>" href="artikel.php"></a> -->
                        </li>
                    </ul>
                    <a href="index.php">
                        <button id="adminBtn" class="btn btn-danger" type="button">Logout!</button>
                    </a>
                </div>
            </nav>
        </div>
    </header>

    <br><br><br>

    <center>
        <h1>HALAMAN ADMIN</h1>
        <table border="5" cellpadding="10" spacing="0">
            <tr>
                <th>No.</th>
                <th>Aksi</th>
                <th>Nama</th>
                <th>NIM</th>
                <th>Email</th>
                <th>Jurusan</th>
                <th>Gambar</th>
            </tr>
            <?php $no = 1; ?>
            <?php foreach ($mahasiswa as $row) : ?>
            <tr>
                <td><?= $no; ?></td>
                <td>Edit | Hapus</td>
                <td><?= $row["nama"]; ?></td>
                <td><?= $row["nrp"]; ?></td>
                <td><?= $row["email"]; ?></td>
                <td><?= $row["jurusan"]; ?></td>
                <td><?= $row["gambar"]; ?></td>
            </tr>
            <?php $no++; ?>
            <?php endforeach;?>
        </table>
    </center>

    <script type="text/javascript" src="jquery-3.3.1.js"></script>
    <script type="text/javascript" src="js/bootstrap.js"></script>
</body>

</html>