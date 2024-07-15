<?php
 //Disini akan digunakan kode PHP untuk memproses data
 //Ambil koneksi ke basisdata, karena data ini akan disimpan didalam basisdata.
 require_once "../config/koneksi.php";
 //cek form yang di kirim
 if($_SERVER['REQUEST_METHOD']=="POST"){
 //ambil data dari form, simpan dalam variabel
 $idkmr=$_POST['idkmr']; //yg didalam tanda kutip harus sama dengan name di form
 $kdkmr=$_POST['kdkmr'];
 $namakmr=$_POST['namakmr'];
 $ltk=$_POST['ltk'];
  
 //buat SQL untuk simpan data
 $sqlsavekamar="INSERT INTO tb_kamar VALUES 
 ('$idkmr','$kdkmr','$namakmr','$ltk')";
 //Proses ke mysql server, menggunakan mysqli_query()
 if(mysqli_query($koneksi,$sqlsavekamar)){
 //redirect ke halaman tampildata.php jika proses simpan berhasil
 echo "<script> alert('Data sudah disimpan');
 window.location.assign('index.php?page=kamar');
 </script>";
 }
 }


 //Sampai disini program sudah siap, kita coba jalankan.
 //Ok. program untuk tambah data (save) sudah selesai.
 //ketika input jgn menggunakan nim yg sama karena nim adalah primary key, jika ingin kontrol dari sistem jg bisa...kita bahas pertemuan berikutnya.