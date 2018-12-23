<?php
    $page= 'home';
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">

    <title>PROBISTEK || Program Inovasi Bisnis Teknologi</title>
    <link rel="icon" href="images/UIN.png">


    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js"> 
    </script>

    <script type="text/javascript" src="jquery-3.3.1.js"></script>
    <script type="text/javascript" src="js/bootstrap.js"></script>
    
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css">

    <!--link icon-->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="path/to/font-awesome/css/font-awesome.min.css">

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
                        <li>
                            <a class="nav-link <?php if($page=='about'){echo 'active';}?>" href="about.php">About</a>
                        </li>
                    </ul>
                </div>
            </nav>
        </div>
    </header>
    <!--------Slideshow Image--------->
<div id="slider">
    <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
        <ol class="carousel-indicators">
            <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
            <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
            <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
            <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
        </ol>
        <div class="carousel-inner">
            <div class="carousel-item active">
                <img class="d-block img-fluid" src="images/slide1.jpg" alt="First slide">
            </div>
            <div class="carousel-item">
                <img class="d-block img-fluid" src="images/slide2.jpg" alt="Second slide">
            </div>
            <div class="carousel-item">
                <img class="d-block img-fluid" src="images/slide3.jpg" alt="Third slide">
            </div>
            <div class="carousel-item">
                <img class="d-block img-fluid" src="images/slide4.jpg" alt="Third slide">
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
</div>
    <!----------Visi Dan Misi------->
<section id="visimisi">
    <div class="container">
        <h2>VISI & MISI</h2>
        <div class="row">
            <div class="col-md-6 visi">
                <h3>Visi</h3>
                <div class="about-content">
                    Lorem Ipsum adalah contoh teks atau dummy dalam industri percetakan dan penataan huruf atau typesetting. Lorem Ipsum telah menjadi standar contoh teks sejak tahun 1500an, saat seorang tukang cetak yang tidak dikenal mengambil sebuah kumpulan teks dan mengacaknya untuk menjadi sebuah buku contoh huruf. 
                </div>
            </div>
            <div class="col-md-6 visi">
                <h3>Misi</h3>
                <div class="about-content">
                    Lorem Ipsum adalah contoh teks atau dummy dalam industri percetakan dan penataan huruf atau typesetting. Lorem Ipsum telah menjadi standar contoh teks sejak tahun 1500an, saat seorang tukang cetak yang tidak dikenal mengambil sebuah kumpulan teks dan mengacaknya untuk menjadi sebuah buku contoh huruf.
                </div>
            </div>
        </div>
    </div>
</section>
    <!--------------Jurusan------------>
<section id="services">
    <div class="container">
        <h2>JURUSAN</h2>
        <div class="row services">
            <div class="col-md-4 text-center">
                <div class="icon">
                    <i class="fa fa-line-chart"></i>
                </div>
                <a href="akutansi.php" target="_blank" rel="nofollow">
                <h3>Computer Accounting</h3>
                <p>Komputer Akuntansi adalah sebuah sistem akuntansi dimana komputer sebagai teknologi untuk menjalankan aplikasi yang digunakan dalam mengolah transaksi akuntansi dan sekaligus untuk menghasilkan laporan keuangan dalam sebuah perusahaan.</p>
            </a>
            </div>
        </form>
            <div class="col-md-4 text-center">
                <div class="icon">
                    <i class="fa fa-desktop"></i>
                </div>
                <a href="web.php" target="_blank" rel="nofollow">
                <h3>Web Development</h3>
                <p>Web Development adalah jurusan yang menjuru pada bahasa pemrograman dalam membuat website(html/css/php/javaskrip/dll).</p>
            </a>
            </div>
            <div class="col-md-4 text-center">
                <div class="icon">
                    <i class="fa fa-paint-brush"></i>
                </div>
                <h3>Design Grafis</h3>
                <p>Design Grafis adalah jurusan yang menjuru terhadap design.</p>
            </div>
            <div class="col-md-4 text-center">
                <div class="icon">
                    <i class="fa fa-book"></i>
                </div>
                <h3>English For Tourism</h3>
                <p>Engllish For Tourism adalah jurusan yang menjuru pad seaking bahasa inggris untuk menjadi guid turis international.</p>
            </div>
            <div class="col-md-4 text-center">
                <div class="icon">
                    <i class="fa fa-mobile"></i>
                </div>
                <h3>Mobile Development</h3>
                <p>mobile Development adalah jurusan yang menjuru pada bahasa pemrograman dalam membuat App atau bahasa pemrograman java for app.</p>
            </div>
            <div class="col-md-4 text-center">
                <div class="icon">
                    <i class="fa fa-tv"></i>
                </div>
                <h3>TV & Multimedia</h3>
                <p>Web Development adalah jurusan yang menjuru pada bahasa pemrograman dalam membuat website(html/css/php/javaskrip/dll).</p>
            </div>
        </div>
    </div>
</section>
</form>
</body>
</html>