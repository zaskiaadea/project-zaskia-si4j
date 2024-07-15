<?php
 //mengambil koneksi basisdata
 require_once "../config/koneksi.php";
 //Mengambil nim yang akan dihapus
 $iddr=$_GET['id'];
 //Membuat SQL Hapus
 $deletedokter="DELETE FROM tb_dokter WHERE id='$iddr'";
 //Proses SQL ke basisdata
 if(mysqli_query($koneksi,$deletedokter)){
 //tampilkan alert dan redirect ke halaman TampilDataDosen
 echo "<script> alert('Data Berhasil di Hapus');
window.location.assign('index.php?page=dokter'); </script>";
 }else{
 //tampilkan alert dan redirect ke halaman TampilDataDosen
 echo "<script> alert('Data Gagal di Hapus');
 window.location.assign('index.php?page=dokter'); </script>";
 }
 //sampai disini kode hapus sudah selesai, bisa