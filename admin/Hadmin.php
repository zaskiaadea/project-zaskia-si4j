<?php
 //mengambil koneksi basisdata
 require_once "../config/koneksi.php";
 //Mengambil nim yang akan dihapus
 $idadm=$_GET['id'];
 //Membuat SQL Hapus
 $deleteadmin="DELETE FROM tb_admin WHERE id='$idadm'";
 //Proses SQL ke basisdata
 if(mysqli_query($koneksi,$deleteadmin)){
 //tampilkan alert dan redirect ke halaman TampilDataDosen
 echo "<script> alert('Data Berhasil di Hapus');
window.location.assign('index.php?page=admin'); </script>";
 }else{
 //tampilkan alert dan redirect ke halaman TampilDataDosen
 echo "<script> alert('Data Gagal di Hapus');
 window.location.assign('index.php?page=admin'); </script>";
 }
 //sampai disini kode hapus sudah selesai, bisa