<?php
    $page = 'mahasiswa';
    require 'functions.php';
    $mahasiswa = query("SELECT * FROM mahasiswa ORDER BY NIM ASC");

    //pagination
    $jumlahDataPerHalaman = 10;
    $jumlahData = count(query("SELECT * FROM mahasiswa"));
    $jumlahHalaman = ceil($jumlahData / $jumlahDataPerHalaman);
    $halamanAktif = ( isset($_GET["p"]) ) ? $_GET["p"] : 1; 
    $awalData = ( $jumlahDataPerHalaman * $halamanAktif) - $jumlahDataPerHalaman;
    $hasilHalamanPertama = ($halamanAktif-1)*$jumlahDataPerHalaman;
    $noAwal = 0;
    $no = ($hasilHalamanPertama + 1) - 1;

    $mahasiswa = query("SELECT * FROM mahasiswa ORDER BY NIM ASC LIMIT $awalData, $jumlahDataPerHalaman");

    //Mesin Pencari Mahasiswa
    if( isset($_POST["cari"])) {
        $mahasiswa = cari($_POST["keyword"]);
    }

    require "layout/header.php";
    require "layout/nav.php";

?>

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
                
                <?php foreach ($mahasiswa as $row): $no++; ?>
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

            <br><br><br>

        </center>
    </div>
    <script type="text/javascript" src="jquery-3.3.1.js"></script>
    <script type="text/javascript" src="js/bootstrap.js"></script>
<?php

require "layout/footer.php";

?>