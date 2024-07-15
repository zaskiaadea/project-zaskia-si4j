<?php
 //mengambil koneksi basisdata
 require_once "../config/koneksi.php";
 //Mengambil nim yang akan dihapus
 $idrwt=$_GET['id'];
 //Membuat SQL Hapus
 $deleterawatinap="DELETE FROM tb_rawat WHERE id='$idrwt'";
 //Proses SQL ke basisdata
 if(mysqli_query($koneksi,$deleterawatinap)){
 //tampilkan alert dan redirect ke halaman riwayat_rawat
 echo "<script> alert('Data Berhasil di Hapus');
 window.location.assign('index.php?page=riwayat_rawat'); </script>";
 }else{
 //tampilkan alert dan redirect ke halaman riwayat_rawat
 echo "<script> alert('Data Gagal di Hapus');
 window.location.assign('index.php?page=riwayat_rawat'); </script>";
 }
 //sampai disini kode hapus sudah selesai, bisa