<?php
     session_start();

     if( !isset($_SESSION["login"])) {
         header("Location: ../login.php");
     }

    require '../functions.php';

    $id = $_GET['id'];

    if( hapus($id)>0){
        // echo "
        //     <script>
        //         alert('data berhasil dihapus');
        //         document.location.href= '../admin.php';
        //     </script>
        // ";
    } header('Location: ../admin.php');
?>