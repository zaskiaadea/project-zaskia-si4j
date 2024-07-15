<main id="main" class="main">
<div class="pagetitle">
      <h1 style="font-weight:bold;">Pasien Bersalin &nbsp;
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
          <li class="breadcrumb-item">Data Pasien Bersalin</li>
          <li class="breadcrumb-item active">Riwayat Pasien</li>
        </ol>
      </nav>
      <br>

 <?php
//mengambil program koneksidb, dengan menggunakan fungsi include
include "../config/koneksi.php";
//membuat SQL untuk menampilkan data 
$sqlbersalin = "SELECT * FROM tb_bersalin";
//melakukan proses query ke database
$query = mysqli_query($koneksi, $sqlbersalin) or die("SQL Error");
$nomor = 1; //untuk membuat nomor untuk di tabel hasil query
?>

<div class="row" style="background-color:aliceblue; padding: 15px" >
    <h4 style="color:darkblue; font-weight:bold; margin-top:13px;">Data Pasien Bersalin</h4><br><br><br><br>
    
    
    <table class="table table-bordered border-primary" border="2" style="text-align: center; font-size: 11px;">
                <thead>
                  <tr>
                    <th>No</th>
                    <th>Nama Pasien</th>
                    <th>Dokter</th>
                    <th>Kamar Pasien</th>
                    <th>Tanggal Masuk</th>
                    <th>Tanggal Keluar</th>
                    <th>Biaya</th>
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
                    <td><?= $row['dokter'] ?></td>
                    <td><?= $row['kamar'] ?></td>
                    <td><?= $row['tgl_masuk'] ?></td>
                    <td><?= $row['tgl_keluar'] ?></td>
                    <td><?= $row['biaya'] ?></td>
                    <td>
                      <a href="?page=Ebersalin&id=<?= $row['id'];?>">
                      <button type="button" class="btn btn-info" style="width: 40px; height: 35px;"><i class="ri-edit-2-line"></i></button>
                      </a>&nbsp;
                      <a href="?page=Hbersalin&id=<?= $row['id'];?>">
                      <button type="button" class="btn btn-warning"  style="width: 40px; height: 35px;"><i class="ri-delete-bin-5-line"></i></button></a>
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