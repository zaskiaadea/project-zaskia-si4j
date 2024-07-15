<?php
 //mengambil koneksi basisdata
 require_once "../config/koneksi.php";
 //Mengambil nim yang akan dihapus
 $idkmr=$_GET['id'];
 //Membuat SQL Hapus
 $deletekamar="DELETE FROM tb_kamar WHERE id='$idkmr'";
 //Proses SQL ke basisdata
 if(mysqli_query($koneksi,$deletekamar)){
 //tampilkan alert dan redirect ke halaman TampilDataDosen
 echo "<script> alert('Data Berhasil di Hapus');
window.location.assign('index.php?page=kamar'); </script>";
 }else{
 //tampilkan alert dan redirect ke halaman TampilDataDosen
 echo "<script> alert('Data Gagal di Hapus');
 window.location.assign('index.php?page=kamar'); </script>";
 }
 //sampai disini kode hapus sudah selesai, bisa