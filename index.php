<?php
    $page= 'home';
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>PROBISTEK</title>
    <link rel="icon" href="images/UIN.png">

    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js"></script>
    <script type="text/javascript" src="jquery-3.3.1.js"></script>
    <script type="text/javascript" src="js/bootstrap.js"></script>
    
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css">
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
                            <a class="nav-link <?php if($page=='home'){echo 'active';}?>" href="index.php">Home</a>
                        </li>
                        <li>
                            <a class="nav-link <?php if($page=='artikel'){echo 'active';}?>" href="artikel.php">Artikel</a>
                        </li>
                        <li>
                            <a class="nav-link <?php if($page=='mahasiswa'){echo 'active';}?>" href="mahasiswa.php">Mahasiswa</a>
                        </li>
                    </ul>
                </div>
            </nav>
        </div>
    </header>
    <!--------Slideshow Image--------->
        <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
  <ol class="carousel-indicators">
    <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
    <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
    <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
  </ol>
  <div class="carousel-inner">
    <div class="carousel-item active">
      <img class="d-block w-100" src="images/gambar1.jpg" alt="First slide">
    </div>
    <div class="carousel-item">
      <img class="d-block w-100" src="images/gambar2.jpg" alt="Second slide">
    </div>
    <div class="carousel-item">
      <img class="d-block w-100" src="images/gambar3.jpg" alt="Third slide">
    </div>
  </div>
  <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="sr-only">Previous</span>
  </a>
  <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="sr-only">Next</span>
  </a>
</div>
    <!-- Halaman Index -->

    <!-- <div class="pimg1">
        <div class="ptext">
            <span class="border">
                HALAMAN INDEX
            </span>
        </div>
        <p class="tes">INI HANYA CONTOH</p>
    </div>


    <section class="section section-dark">
        <h2>DOSEN</h2>
        <div class="row">
            <div class="col-md-4 col- ">
                <img class="img-fluid" src="images/masayom.jpg" style="height: 150px;">
                <p>Ayyom Muharrom</p>
            </div>
            <div class="col-md-4 col-sm-6 ">
                <img class="img-fluid" src="images/masbill.jpg" style="height: 150px;">
                <p>Bill Tanthowi Jauhari</p>
            </div>
            <div class="col-md-4 col-sm-6 ">
                <img class="img-fluid" src="images/mbkeni.jpg" style="height: 150px;">
                <p>Nur Aini</p>
            </div>
    </section>
    <div class="pimg2">
        <div class="ptext">
            <span class="border trans">
                PROBISTEK
            </span>
        </div>
    </div>


    <section class="section section-dark">
        <h2>Title Second Text </h2>
        <p>
            Lorem Ipsum adalah contoh teks atau dummy dalam industri percetakan dan penataan huruf atau typesetting.
            Lorem Ipsum telah menjadi standar contoh teks sejak tahun 1500an, saat seorang tukang cetak yang tidak
            dikenal mengambil sebuah kumpulan teks dan mengacaknya untuk menjadi sebuah buku contoh huruf. Ia tidak
            hanya bertahan selama 5 abad, tapi juga telah beralih ke penataan huruf elektronik, tanpa ada perubahan
            apapun. Ia mulai dipopulerkan pada tahun 1960 dengan diluncurkannya lembaran-lembaran Letraset yang
            menggunakan kalimat-kalimat dari Lorem Ipsum, dan seiring munculnya perangkat lunak Desktop Publishing
            seperti Aldus PageMaker juga memiliki versi Lorem Ipsum.
            Mengapa kita menggunakannya?
        </p>
    </section>
    <div class="pimg3">
        <div class="ptext">
            <span class="border trans">
                UAS RPOBISTEK
            </span>
        </div>
    </div>

    <section class="section section-dark">
        <h2>Title Third Text </h2>
        <p>
            Lorem Ipsum adalah contoh teks atau dummy dalam industri percetakan dan penataan huruf atau typesetting.
            Lorem Ipsum telah menjadi standar contoh teks sejak tahun 1500an, saat seorang tukang cetak yang tidak
            dikenal mengambil sebuah kumpulan teks dan mengacaknya untuk menjadi sebuah buku contoh huruf. Ia tidak
            hanya bertahan selama 5 abad, tapi juga telah beralih ke penataan huruf elektronik, tanpa ada perubahan
            apapun. Ia mulai dipopulerkan pada tahun 1960 dengan diluncurkannya lembaran-lembaran Letraset yang
            menggunakan kalimat-kalimat dari Lorem Ipsum, dan seiring munculnya perangkat lunak Desktop Publishing
            seperti Aldus PageMaker juga memiliki versi Lorem Ipsum.
            Mengapa kita menggunakannya?
        </p>
    </section> -->

    <br><br><br><br><br>

    <center>
        <h1>HALAMAN INDEX</h1>
    </center>
    <script type="text/javascript" src="jquery-3.3.1.js"></script>
    <script type="text/javascript" src="js/bootstrap.js"></script>
</body>

</html>