<main id="main" class="main">
<div class="pagetitle">
      <h1 style="font-weight:bold;">Master Data &nbsp;
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
          <li class="breadcrumb-item">Master Data</li>
          <li class="breadcrumb-item active">Data Pasien</li>
        </ol>
      </nav>
      <br>

 <?php
//mengambil program koneksidb, dengan menggunakan fungsi include
include "../config/koneksi.php";
//cari data
if(isset($_GET['cari']))
{
  $cari = $_GET['cari'];
  $query = mysqli_query($koneksi,"SELECT * FROM krt_pasien WHERE nama LIKE '%".$cari."%'");
  
} else {
//membuat SQL untuk menampilkan data 

//melakukan proses query ke database
$query = mysqli_query($koneksi, "SELECT * FROM krt_pasien") or die("SQL Error");
}
$nomor = 1; //untuk membuat nomor untuk di tabel hasil query

?>

<div class="row" style="background-color:aliceblue; padding: 15px;" >
    <h4 style="color:darkblue; font-weight:bold; margin-top:13px;">Data Pasien klinik Widyatama Medika</h4><br><br>
    
   
    <div class="search-container" style="display: flex; justify-content: left; align-items: center; margin-top: 40px;">
        <div class="search-box" style="position: relative;">
            <form action="pasien.php" method="GET">
                <input type="text" name="cari" placeholder="Cari Data" style="width: 230px; padding: 10px 20px; border: 1px solid #ccc; border-radius: 20px; font-size: 12px;">
                <button type="submit" value="cari"  style="position: absolute; right: 15px; top: 50%; transform: translateY(-50%); background: none; border: none; font-size: 16px; color: #aaa; cursor: pointer;">&#128269;</button>
            </form>
        </div>
    </div>
    
    <a href="?page=Tpasien"><button type="button" class="btn btn-outline-success" style="font-weight: bold; font-size:10px; width:125px; height:28px; float:right;">
    <i class="ri-add-fill"></i>Tambah Pasien</button></a><br><br>
   
    <table class="table table-bordered border-success" border="2" style="text-align: center; font-size: 11px;">
                <thead>
                  <tr>
                    <th>No</th>
                    <th>Id Pasien</th>
                    <th>Nama Lengkap</th>
                    <th>Usia</th>
                    <th>Alamat</th>
                    <th>Bergabung</th>
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
                    <td><?= $row['kode'] ?></td>
                    <td><?= $row['nama'] ?></td>
                    <td><?= $row['usia'] ?></td>
                    <td><?= $row['alamat'] ?></td>
                    <td><?= $row['tglgabung'] ?></td>
                    <td>
                      <a href="?page=Epasien&id=<?= $row['id'];?>">
                      <button type="button" class="btn btn-success" style="width: 40px; height: 35px;"><i class="ri-edit-2-line"></i></button>
                      </a>&nbsp;
                      <a href="?page=Hpasien&id=<?= $row['id'];?>">
                      <button type="button" class="btn btn-danger"  style="width: 40px; height: 35px;"><i class="ri-delete-bin-5-line"></i></button>
                      </a>
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