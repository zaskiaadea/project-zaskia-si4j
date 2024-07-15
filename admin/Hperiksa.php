<?php
 //mengambil koneksi basisdata
 require_once "../config/koneksi.php";
 //Mengambil nim yang akan dihapus
 $idprs=$_GET['id'];
 //Membuat SQL Hapus
 $deleteperiksa="DELETE FROM tb_periksa WHERE id='$idprs'";
 //Proses SQL ke basisdata
 if(mysqli_query($koneksi,$deleteperiksa)){
 //tampilkan alert dan redirect ke halaman periksa
 echo "<script> alert('Data Berhasil di Hapus');
window.location.assign('index.php?page=periksa'); </script>";
 }else{
 //tampilkan alert dan redirect ke halaman periksa
 echo "<script> alert('Data Gagal di Hapus');
 window.location.assign('index.php?page=periksa'); </script>";
 }
 //sampai disini kode hapus sudah selesai, bisa