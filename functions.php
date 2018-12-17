<?php

    //koneksi database
    $conn = mysqli_connect("localhost", "root", "", "uas-probistek");
    //ambil data / query
    // $result = mysqli_query($conn, "SELECT * FROM mahasiswa");
    // if ( !$result) {
    //     echo mysqli_error($conn);
    // }
    // while ( $mhs = mysqli_fetch_assoc($result)) {
    //     var_dump($mhs);
    // }

    function query($query) {
        global $conn;
        $result = mysqli_query($conn, $query);
        $rows = [];
        while ($row = mysqli_fetch_assoc($result)) {
            $rows[] = $row;
        }
        return $rows;
    }

    function tambah($data) {
        global $conn;

        //ambil data dari form
        $nama = htmlspecialchars($data["nama"]);
        $NIM = htmlspecialchars($data["NIM"]);
        $email = htmlspecialchars($data["email"]);
        $jurusan = htmlspecialchars($data["jurusan"]);
        
        //upload gambar
        $gambar = upload();
        if( !$gambar) {
            return false;
        }

        //query insert data
        $query = "INSERT INTO mahasiswa VALUES ('', '$nama', '$NIM', '$email', '$jurusan', '$gambar')";
        
        mysqli_query($conn, $query);

        return mysqli_affected_rows($conn);
    }

    function upload() {
        
        $namaFile = $_FILES['gambar']['name'];
        $ukuranFile = $_FILES['gambar']['size'];
        $error = $_FILES['gambar']['error'];
        $tmpName = $_FILES['gambar']['tmp_name'];
    
        //cek adakah gambar yang dipilih
        if( $error === 4) {
            echo "<script>
                    alert('Pilih gambar terlebih dahulu');
                </script>";
            return false;    
        }

        //cek apakah yang diupload adalah gambar
        $ekstensiGambarValid = ['jpg', 'jpeg', 'png'];
        $ekstensiGambar = explode('.', $namaFile);
        $ekstensiGambar = strtolower(end($ekstensiGambar));
        if( !in_array($ekstensiGambar, $ekstensiGambarValid)) {
            echo "<script>
                    alert('yang anda upload bukan gambar!!');
                </script>";
            return false;
        }

        //cek jika ukuran terlalu besar
        if( $ukuranFile > 1000000) {
            echo "<script>
                    alert('ukuran file terlalu besar!!');
                </script>";
            return false;
        }

        //lolos pengecekan, gambar siap diupload

        // generate nama gambar baru
        $namaFileBaru = uniqid();
        $namaFileBaru .= '.';
        $namaFileBaru .= $ekstensiGambar;

        move_uploaded_file($tmpName, '../images/' .$namaFileBaru);

        return $namaFileBaru;
    }

    function hapus($nama) {
        global $conn;
        mysqli_query($conn, "DELETE FROM mahasiswa WHERE id = $nama");
        return mysqli_affected_rows($conn);
    }

    function edit($data) {
        global $conn;

        //ambil data dari form
        $id = $data["id"];
        $nama = htmlspecialchars($data["nama"]);
        $NIM = htmlspecialchars($data["NIM"]);
        $email = htmlspecialchars($data["email"]);
        $jurusan = htmlspecialchars($data["jurusan"]);
        $gambarLama = htmlspecialchars($data["gambarLama"]);
        
        //cek apakah admin memilih gambar baru
        if( $_FILES['gambar']['error'] === 4) {
            $gambar = $gambarLama;
        } else {
            $gambar = upload();
        }

        //query insert data
        $query = "UPDATE mahasiswa SET nama = '$nama', NIM = '$NIM', email = '$email', jurusan = '$jurusan', gambar = '$gambar' WHERE id = $id";
        
        mysqli_query($conn, $query);

        return mysqli_affected_rows($conn);
    }

    function cari($keyword) {
        $query = "SELECT * FROM mahasiswa
                    WHERE
                  nama LIKE '%$keyword%' OR
                  NIM LIKE '%$keyword%' OR
                  email LIKE '%$keyword%' OR
                  jurusan LIKE '%$keyword%'
        ";
        return query($query);
    }
?>