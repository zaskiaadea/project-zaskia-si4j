<?php 

$host="localhost"; //merupakan alamat domain atau ip address database
$user="root"; //user yang ada didalam database
$pwd=""; //password user yang akan menggunakan database
$namadb="klinik"; // nama database yang akan digunakan

//membuat koneksi, dengan menngunakan lib mysql
$koneksi=mysqli_connect($host,$user,$pwd,$namadb);

//cek koneksi, jika tidak terhubung maka tampilkan pesan error
if(!$koneksi)
    {
         echo"<script> allert ('Database tidak terhubung !!'); </script>";
    }
?>