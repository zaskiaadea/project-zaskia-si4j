<main id="main" class="main">
<div class="pagetitle">
      <h1 style="font-weight:bold;">Data Pasien Periksa &nbsp;
        <small><small><small><small><small>
          <script type='text/javascript'>
            var months = ['Januari', 'Februari', 'Maret', 'April', 'Mei', 'Juni', 'Juli', 'Agustus', 'September', 'Oktober', 'November', 'Desember'];
            var myDays = ['Minggu', 'Senin', 'Selasa', 'Rabu', 'Kamis', 'Jum&#39;at', 'Sabtu'];
            var date = new Date();
            var day = date.getDate();
            var month = date.getMonth();
            var thisDay = date.getDay();
              thisDay = myDays[thisDay];
            var yy = date.getYear();
            var year = (yy < 1000) ? yy + 1900 : yy;
            document.write(thisDay + ', '+ day +' ' + months[month] + ' ' + year);
            //
          </script>
        </small></small></small></small></small>
        </h1>

      <nav>
        <ol class="breadcrumb">
          <li class="breadcrumb-item"><a href="?page=dashboard">Home</a></li>
          <li class="breadcrumb-item active">Data Pasien</li>
        </ol>
      </nav>
      <br>

 <?php
//mengambil program koneksidb, dengan menggunakan fungsi include
include "../config/koneksi.php";
//membuat SQL untuk menampilkan data 
$sqlpsnperiksa = "SELECT * FROM tb_periksa";
//melakukan proses query ke database
$query = mysqli_query($koneksi, $sqlpsnperiksa) or die("SQL Error");
$nomor = 1; //untuk membuat nomor untuk di tabel hasil query
?>

<div class="row" style="background-color:aliceblue; padding: 15px" >
    <h4 style="color:darkblue; font-weight:bold; margin-top:13px;">Data Pasien Periksa di klinik Widyatama Medika</h4><br><br><br>
    <div style="text-align: right;">
    <a href="?page=Tperiksa"><button type="button" class="btn btn-outline-info" style="font-weight: bold; font-size:10px; width:125px; height:28px; ">
    <i class="ri-add-fill"></i>Tambah Pasien</button></a><br><br>
    </div>
    <table class="table table-bordered border-info" border="2" style="text-align: center; font-size: 11px;">
                <thead>
                  <tr>
                    <th>No</th>
                    <th>Nama Pasien</th>
                    <th>Tanggal Periksa</th>
                    <th>keterangan</th>
                    <th>Dokter</th>
                    <th>Biaya Periksa</th>
                    <th>Aksi</th>
                  </tr>
                </thead>
                <tbody>
                <?php
                  //jika data lebih dari 1, maka kita bisa menampilkan dengan menggunakan perintah perulangan seperti (for, while, do-while, foreach)
                  //mysqli_fech_assoc merupakan fungsi yang digunakan untuk mengkonversi data menjadi data arrayassosiatif
                   while ($row = mysqli_fetch_assoc($query))
                  
                {
                  ?>
                  <tr>
                    <td><?= $nomor ?></td>
                    <td><?= $row['nama_pasien'] ?></td>
                    <td><?= $row['tgl'] ?></td>
                    <td><?= $row['ket'] ?></td>
                    <td><?= $row['dokter'] ?></td>
                    <td><?= $row['biaya'] ?></td>
                    <td>
                      <a href="?page=Eperiksa&id=<?= $row['id'];?>">
                      <button type="button" class="btn btn-warning" style="width: 40px; height: 35px;"><i class="ri-edit-2-line"></i></button>
                      </a>&nbsp;
                      <a href="?page=Hperiksa&id=<?= $row['id'];?>">
                      <button type="button" class="btn btn-danger"  style="width: 40px; height: 35px;"><i class="ri-delete-bin-5-line"></i></button></a>
                    </td>
                  </tr>
                  <?php $nomor++;
                } //akhir dari perulangan ?>
                
                </tbody>
              </table>
              <!-- End Primary Color Bordered Table -->
</div>

</div>
</main>