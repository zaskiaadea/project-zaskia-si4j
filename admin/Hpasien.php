<?php
 //mengambil koneksi basisdata
 require_once "../config/koneksi.php";
 //Mengambil nim yang akan dihapus
 $idpsn=$_GET['id'];
 //Membuat SQL Hapus
 $deletepasien="DELETE FROM krt_pasien WHERE id='$idpsn'";
 //Proses SQL ke basisdata
 if(mysqli_query($koneksi,$deletepasien)){
 //tampilkan alert dan redirect ke halaman TampilDataDosen
 echo "<script> alert('Data Berhasil di Hapus');
window.location.assign('index.php?page=pasien'); </script>";
 }else{
 //tampilkan alert dan redirect ke halaman TampilDataDosen
 echo "<script> alert('Data Gagal di Hapus');
 window.location.assign('index.php?page=pasien'); </script>";
 }
 //sampai disini kode hapus sudah selesai, bisa