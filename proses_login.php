<?php
session_start();

include_once "./config/koneksi.php";

        $username = $_POST['username'];
        $password =$_POST['password'];
    
    $query = mysqli_query($koneksi, "SELECT * FROM tb_admin WHERE username = '$username' AND password = '$password'");
    $cek = mysqli_num_rows($query);
    
    if ($cek > 0){
        $data = mysqli_fetch_assoc($query);
        $_SESSION['id']=session_id();
        $_SESSION['username'] = $username;
        $_SESSION['nama']= $data['fullname'];
        $_SESSION['notif'] = "Login Berhasil";

        header("location: admin");
    }

else {
        echo "<script> alert('Password atau Username yang Anda masukkan Salah, Coba Lagi !!');
        window.location.assign('login.php); </script>";
        }
