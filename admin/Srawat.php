<?php
 //Disini akan digunakan kode PHP untuk memproses data
 //Ambil koneksi ke basisdata, karena data ini akan disimpan didalam basisdata.
 require_once "../config/koneksi.php";
 //cek form yang di kirim
 if($_SERVER['REQUEST_METHOD']=="POST"){
 //ambil data dari form, simpan dalam variabel
 $idrwt=$_POST['idrwt']; //yg didalam tanda kutip harus sama dengan name di form
 $nmrwt=$_POST['nmrwt'];
 $ket=$_POST['ket'];
 $dr=$_POST['dr'];
 $kmrwt=$_POST['kmrwt'];
 $tglm=$_POST['tglm'];
 $tglk=$_POST['tglk'];
 $biaya=$_POST['biaya'];
  
 //buat SQL untuk simpan data
 $sqlsaverawatinap="INSERT INTO tb_rawat VALUES 
 ('$idrwt','$nmrwt','$ket','$dr','$kmrwt','$tglm','$tglk','$biaya')";
 //Proses ke mysql server, menggunakan mysqli_query()
 if(mysqli_query($koneksi,$sqlsaverawatinap)){
 //redirect ke halaman tampildata.php jika proses simpan berhasil
 echo "<script> alert('Data sudah disimpan');
 window.location.assign('index.php?page=riwayat_rawat');
 </script>";
 }
 }


 //Sampai disini program sudah siap, kita coba jalankan.
 //Ok. program untuk tambah data (save) sudah selesai.
 //ketika input jgn menggunakan nim yg sama karena nim adalah primary key, jika ingin kontrol dari sistem jg bisa...kita bahas pertemuan berikutnya.