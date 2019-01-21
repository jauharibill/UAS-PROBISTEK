

<?php

require "layout/header.php";
require "layout/nav.php";

?>
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
<!----------------PRICE PLANS------------>
<section id="price2">
    <div class="container">
        <h2>BIAYA PERKULIAHAN</h2>
        <div class="row">
            <!------kolom harga 1----->
            <div class="col-md-6">
                <div class="single-price">
                    <div class="price-head">
                        <h2>PENDIDIKAN 1 TAHUN</h2>
                        <p>Rp. 3.000.000/<span>SEMESTER</span></p>
                    </div>
                    <div class="price-content">
                        <ul>
                            <li>
                                <i class="fa fa-check-circle"></i>Iuran Wisuda
                            </li>
                            <li>
                                <i class="fa fa-check-circle"></i>Uang Laboraturium
                            </li>
                            <li>
                                <i class="fa fa-check-circle"></i>Uang Praktek
                            </li>
                            <li>
                                <i class="fa fa-check-circle"></i>Uang Gedung
                            </li>
                            <li>
                                <i class="fa fa-check-circle"></i>Seragam Praktek
                            </li>
                            <li>
                                <i class="fa fa-check-circle"></i>Almameter
                            </li>
                        </ul>
                    </div>
                    <div class="price-button">
                        <a href="#"class="buy-btn">DAFTAR</a>
                    </div>
                </div>
            </div>
            <!------kolom harga 2----->
            <div class="col-md-6">
                <div class="single-price">
                    <div class="price-head">
                        <h2>PENDIDIKAN 2 TAHUN</h2>
                        <p>Rp. 2.000.000/<span>SEMESTER</span></p>
                    </div>
                    <div class="price-content">
                        <ul>
                            <li>
                                <i class="fa fa-check-circle"></i>Iuran Wisuda
                            </li>
                            <li>
                                <i class="fa fa-check-circle"></i>Uang Laboraturium
                            </li>
                            <li>
                                <i class="fa fa-check-circle"></i>Uang Praktek
                            </li>
                            <li>
                                <i class="fa fa-check-circle"></i>Uang Gedung
                            </li>
                            <li>
                                <i class="fa fa-check-circle"></i>Seragam Peraktek
                            </li>
                            <li>
                                <i class="fa fa-check-circle"></i>Almameter
                            </li>
                        </ul>
                    </div>
                    <div class="price-button">
                        <a href="#"class="buy-btn">DAFTAR</a>
                    </div>
                </div>
            </div>
            
        </div>
    </div>
</section>

<?php

require "layout/footer.php";

?>