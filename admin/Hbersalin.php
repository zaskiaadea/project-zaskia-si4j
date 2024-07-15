<?php
 //mengambil koneksi basisdata
 require_once "../config/koneksi.php";
 //Mengambil nim yang akan dihapus
 $idbsn=$_GET['id'];
 //Membuat SQL Hapus
 $deletepasienbersalin="DELETE FROM tb_bersalin WHERE id='$idbsn'";
 //Proses SQL ke basisdata
 if(mysqli_query($koneksi,$deletepasienbersalin)){
 //tampilkan alert dan redirect ke halaman riwayat_bersalin
 echo "<script> alert('Data Berhasil di Hapus');
window.location.assign('index.php?page=riwayat_bersalin'); </script>";
 }else{
 //tampilkan alert dan redirect ke halaman riwayat_bersalin
 echo "<script> alert('Data Gagal di Hapus');
 window.location.assign('index.php?page=riwayat_bersalin'); </script>";
 }
 //sampai disini kode hapus sudah selesai, bisa