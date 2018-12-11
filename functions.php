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
        $nama = $data["nama"];
        $nrp = $data["nrp"];
        $email = $data["email"];
        $jurusan = $data["jurusan"];
        // $gambar = $data["gambar"];

        //query insert data
        $query = "INSERT INTO mahasiswa VALUES ('', '$nama', '$nrp', '$email', '$jurusan', '')";
        
        mysqli_query($conn, $query);

        return mysqli_affected_rows($conn);
    }
?>