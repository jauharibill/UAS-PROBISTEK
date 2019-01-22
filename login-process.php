<?php
    session_start();

    if( isset($_SESSION["login"])) {
        header("Location: admin.php");
        exit;
    }
    require "functions.php";

    if( isset($_POST["login"])) {
       
        $username = $_POST["username"];
        $password = $_POST["password"];

        $result = mysqli_query($conn, "SELECT * FROM admin WHERE username = '$username'") or die(mysqli_error($conn));

        //cek username
        if( mysqli_num_rows($result) > 0) {
            
            //cek password
            $row = mysqli_fetch_assoc($result);
            if($password == $row["password"]) {

                //set session
                $_SESSION["login"] = true;

                header("Location: admin.php");
            }else{
                echo "<script>
                    alert('username atau password salah');
                </script>";    
            }
        }else{
            echo "<script>
                    alert('username atau password salah');
                </script>";
        }

    }
?>
