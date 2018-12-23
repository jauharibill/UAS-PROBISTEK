<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Komputer Akuntansi | PROBISTEK</title>
    <link rel="icon" href="images/UIN.png">
    <script type="text/javascript" src="jquery-3.3.1.js"></script>
    <script type="text/javascript" src="js/bootstrap.js"></script>
    <link rel="stylesheet" type="text/css" href="css/bootstrap.css">
    <link rel="stylesheet" type="text/css" href="css/style.css">
    <style>
        #badan {
            background-color: #EFEEEC;
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
                         <li>
                            <a class="nav-link <?php if($page=='about'){echo 'active';}?>" href="about.php">About</a>
                        </li>
                    </ul>
                </div>
            </nav>
        </div>
    </header>
    <br><br>
    <section id="artikel">
    <div class="container">
        <h2>Komputer Akuntansi</h2>
        <div class="row">
            <div class="col-md-6 visi">
                <div class="about-content">
                    Lorem Ipsum adalah contoh teks atau dummy dalam industri percetakan dan penataan huruf atau typesetting. Lorem Ipsum telah menjadi standar contoh teks sejak tahun 1500an, saat seorang tukang cetak yang tidak dikenal mengambil sebuah kumpulan teks dan mengacaknya untuk menjadi sebuah buku contoh huruf. 
                </div>
            </div>
             <div class="col-md-6 visi">
                <div class="images">
                   <img src="images/artikelkak.jpg" width="115%">
                </div>
            </div>
    <script type="text/javascript" src="jquery-3.3.1.js"></script>
    <script type="text/javascript" src="js/bootstrap.js"></script>
</body>

</html>