<?php
    session_start();

    if( !isset($_SESSION["login"])) {
        header("Location: ../login.php");
    }

    require "../functions.php";

    $id = $_GET["id"];

    //query berdasarkan ID

    $mahasiswa = query("SELECT * FROM mahasiswa WHERE id = $id")[0];

    if( isset($_POST["submit"])) {
        
        //cek keberhasilan
        if (edit($_POST) >= 0) {
            // echo "
            //     <script>
            //         alert('data berhasil diubah');
            //         document.location.href= '../admin.php';
            //     </script>
            // ";
        } header('Location: ../admin.php');
    }
?>

<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Edit Data Mahasiswa | PROBISTEK</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="icon" href="../images/UIN.png">
    <script type="text/javascript" src="../jquery-3.3.1.js"></script>
    <script type="text/javascript" src="../js/bootstrap.js"></script>
    <link rel="stylesheet" type="text/css" href="../css/bootstrap.css">
    <link rel="stylesheet" type="text/css" href="../css/style.css">
    <style>
        body {
            background-color: #EFEEEC;
        }
        
        header {
            background-color: #FFF;
        }

        form {
            background-color: #EFEEEC;
            padding-left: 3cm;
            padding-top: 0.5cm;
            padding-right: 10cm;
        }

        #gambar {
            padding-left: 0cm;
        }

        h1 {
            padding-top: 2cm;
            text-align: center;
        }

        #kembali {
            margin-left: 0.5cm;
        }

        #labelGambar {
            padding-right: 149px;
        }

        #gambarUbah {
            padding-left: 4.5cm;
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
                        <li>
                            <!-- <a class="nav-link <?php if($page=='home'){echo 'active';}?>" href="index.php"></a> -->
                        </li>
                        <li class="nav-item">
                            <!-- <a class="nav-link <?php if($page=='artikel'){echo 'active';}?>" href="artikel.php"></a> -->
                        </li>
                    </ul>
                    <a href="../index.php">
                        <button id="adminBtn" class="btn btn-danger" type="button">Logout!</button>
                    </a>
                </div>
            </nav>
        </div>
    </header>
    <h1>EDIT DATA MAHASISWA</h1>
    <form method="post" action="" enctype="multipart/form-data">
        <input type="hidden" name="id" value="<?= $mahasiswa["id"];?>">
        <input type="hidden" name="gambarLama" value="<?= $mahasiswa["gambar"];?>">
        <div class="form-group row">
            <label for="nama" class="col-sm-2 col-form-label">Nama</label>
            <div class="col-sm-10">
                <input type="text" class="form-control" id="nama" name="nama" placeholder="Masukkan Nama Mahasiswa"
                    required value="<?= $mahasiswa["nama"];?>">
            </div>
        </div>
        <div class="form-group row">
            <label for="nrp" class="col-sm-2 col-form-label">NIM</label>
            <div class="col-sm-10">
                <input type="text" class="form-control" id="nrp" name="NIM" placeholder="Masukkan NIM Mahasiswa"
                    required value="<?= $mahasiswa["NIM"];?>">
            </div>
        </div>
        <div class="form-group row">
            <label for="email" class="col-sm-2 col-form-label">Email</label>
            <div class="col-sm-10">
                <input type="email" class="form-control" id="email" name="email" placeholder="Masukkan Email Mahasiswa"
                    required value="<?= $mahasiswa["email"];?>">
            </div>
        </div>
        <div class="form-group row">
            <label for="jurusan" class="col-sm-2 col-form-label">Jurusan</label>
            <div class="col-sm-10">
                <input type="text" class="form-control" id="jurusan" name="jurusan" placeholder="Masukkan Jurusan Mahasiswa"
                    required value="<?= $mahasiswa["jurusan"];?>">
            </div>
        </div>
        <div class="form-group row">
            <label for="gambar" class="col-sm-2 col-form-label" id="labelGambar">Gambar</label>
            <div class="col-sm-9 custom-file">
                <label class="custom-file-label" for="gambar"><?= $mahasiswa["gambar"]?></label><br>
                <input type="file" class="custom-file-input" id="gambar" name="gambar">
            </div>
            <div class="col-sm-3" id="gambarUbah">
                <img src="../images/<?= $mahasiswa['gambar'];?>" alt="" width="80">
            </div>
        </div>
        <div class="form-group row">
            <!-- Button trigger modal -->
            <button type="button" class="btn btn-success" data-toggle="modal" data-target="#modalSimpan">
            Simpan
            </button>

            <!-- Modal -->
            <div class="modal fade" id="modalSimpan" tabindex="-1" role="dialog" aria-labelledby="exampleModalLongTitle" aria-hidden="true">
                <div class="modal-dialog" role="document">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title" id="exampleModalLongTitle">Simpan Data?</h5>
                        </div>
                        <div class="modal-body">
                            Simpan perubahan data terbaru?
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-danger" data-dismiss="modal">Batal</button>
                            <button type="submit"  name="submit" class="btn btn-success">Simpan</button>
                        </div>
                    </div>
                </div>
            </div>
            
             <!-- Button trigger modal -->
            <button type="button" class="btn btn-danger" data-toggle="modal" data-target="#modalBatal" id="kembali">
            Kembali
            </button>

            <!-- Modal -->
            <div class="modal fade" id="modalBatal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLongTitle" aria-hidden="true">
                <div class="modal-dialog" role="document">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title" id="exampleModalLongTitle">Kembali?</h5>
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                            </button>
                        </div>
                        <div class="modal-body">
                            Tidak ada data yang ingin diubah?                            
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-warning" data-dismiss="modal">Tidak</button>
                            <a href="../admin.php">
                                <button type="button" class="btn btn-danger">Ya</button>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </form>

    <br><br>

    <script type="text/javascript" src="jquery-3.3.1.js"></script>
    <script type="text/javascript" src="js/bootstrap.js"></script>
</body>

</html>