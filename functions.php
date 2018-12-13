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
        // $gambar = $data["gambar"];

        //query insert data
        $query = "INSERT INTO mahasiswa VALUES ('', '$nama', '$NIM', '$email', '$jurusan', '')";
        
        mysqli_query($conn, $query);

        return mysqli_affected_rows($conn);
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
        // $gambar = $data["gambar"];

        //query insert data
        $query = "UPDATE mahasiswa SET nama = '$nama', NIM = '$NIM', email = '$email', jurusan = '$jurusan' WHERE id = $id";
        
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