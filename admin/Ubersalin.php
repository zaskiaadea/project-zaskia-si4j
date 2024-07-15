<?php
 //Disini akan digunakan kode PHP untuk memproses data
 //Ambil koneksi ke basisdata, karena data ini akan disimpan didalam
 require_once "../config/koneksi.php";
 //cek form yang di kirim
 if($_SERVER['REQUEST_METHOD']=="POST")
 {
 //ambil data dari form, simpan dalam variabel
 $idbsn=$_POST['idbsn']; //yg didalam tanda kutip harus sama dengan name di form
 $nmbsn=$_POST['nmbsn'];
 $dr=$_POST['dr'];
 $kmbsn=$_POST['kmbsn'];
 $tglm=$_POST['tglm'];
 $tglk=$_POST['tglk'];
 $biaya=$_POST['biaya'];

 //buat SQL untuk simpan data
 $updatepasienbersalin="UPDATE tb_bersalin SET nama_pasien='$nmbsn', dokter='$dr', kamar='$kmbsn', tgl_masuk='$tglm', tgl_keluar='$tglk', biaya='$biaya' WHERE id='$idbsn'";

 //Proses ke mysql server, menggunakan mysqli_query()
 if(mysqli_query($koneksi,$updatepasienbersalin))
 {
 //redirect ke halaman tampildata.php jika proses simpan berhasil
 echo "<script> alert('Data sudah diupdate'); 
 window.location.assign('index.php?page=riwayat_bersalin'); 
  </script>";
 } 
 }
 //Sampai disini program sudah siap, kita coba jalankan.
 //Ok. program untuk tambah data (save) sudah selesai.
 //ketika input jgn menggunakan nim yg sama karena nim adalah primary key, jika ingin kontrol dari sistem jg bisa...kita bahas pertemuan berikutnya.