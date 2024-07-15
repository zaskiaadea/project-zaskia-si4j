<?php
 //Disini akan digunakan kode PHP untuk memproses data
 //Ambil koneksi ke basisdata, karena data ini akan disimpan didalam
 require_once "../config/koneksi.php";
 //cek form yang di kirim
 if($_SERVER['REQUEST_METHOD']=="POST")
 {
 //ambil data dari form, simpan dalam variabel
 $idprs=$_POST['idprs']; //yg didalam tanda kutip harus sama dengan name di form
 $nmprs=$_POST['nmprs'];
 $tgl=$_POST['tgl'];
 $ket=$_POST['ket'];
 $dtr=$_POST['dtr'];
 $biaya=$_POST['biaya'];

 //buat SQL untuk simpan data
 $updateperiksa="UPDATE tb_periksa SET nama_pasien='$nmprs', tgl='$tgl', ket='$ket', dokter='$dtr', biaya='$biaya' WHERE id='$idprs'";

 //Proses ke mysql server, menggunakan mysqli_query()
 if(mysqli_query($koneksi,$updateperiksa))
 {
 //redirect ke halaman tampildata.php jika proses simpan berhasil
 echo "<script> alert('Data sudah diupdate'); 
 window.location.assign('index.php?page=periksa'); 
  </script>";
 } 
 }
 //Sampai disini program sudah siap, kita coba jalankan.
 //Ok. program untuk tambah data (save) sudah selesai.
 //ketika input jgn menggunakan nim yg sama karena nim adalah primary key, jika ingin kontrol dari sistem jg bisa...kita bahas pertemuan berikutnya.