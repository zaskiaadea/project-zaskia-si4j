<main id="main" class="main">
<div class="pagetitle">
      <h1 style="font-weight: bold;">Edit Data Kamar &nbsp;
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
          <li class="breadcrumb-item"><a href="?page=kamar">Data Kamar</a></li>
          <li class="breadcrumb-item active">Edit Data</li>
        </ol>
      </nav>
      <br>

      <!-- Mengambil data yang akan diedit, berdasarkan kode rak yang dipilih dan dikirim melalui link (get) -->
      <?php
          $idkmr=$_GET['id'];
          //membuat sql tampil data
          $sqldatakamar="SELECT * FROM tb_kamar WHERE id='$idkmr'";
          //ambil koneksi data
          require_once "../config/koneksi.php";
          //proses sql
          $query=mysqli_query($koneksi,$sqldatakamar);
          //mengubah data ke array asosiatif, tidak menggunakan perulangan karenadatanya hanya 1
          $data=mysqli_fetch_assoc($query);
          //selanjutnya tampilkan pada field dibawah.
      ?>

     <div class="row" style="background-color:aliceblue; padding: 20px; width: 100%;">
     <h5 style="color:darkblue; font-weight:bold; margin-top:13px; margin-bottom:40px">Edit Kamar( <?= $data['kd_kamar']; ?> - <?= $data['nama']; ?> )</h5><br><br>
    <form action="Ukamar.php" method="POST" style="margin-left:70px; font-size:13px;">

    <div class="row mb-3">
                  <label for="inputText" class="col-sm-2 col-form-label" style="color:darkslategray;">Id Kamar</label>
                  <div class="col-sm-6">
                    <input type="text" name="idkmr" id="idkmr" value="<?=$data['id']?>" placeholder="masukan kodekategori" class="form-control" style="font-size:13px;">
                  </div>
          </div>

      <div class="row mb-3">
                  <label for="inputText" class="col-sm-2 col-form-label" style="color:darkslategray;">Kode Kamar</label>
                  <div class="col-sm-6">
                    <input type="text" name="kdkmr" id="kdkmr" value="<?=$data['kd_kamar']?>" placeholder="masukan kodekategori" class="form-control" style="font-size:13px;">
                  </div>
          </div>

      <div class="row mb-3">
                  <label for="inputText" class="col-sm-2 col-form-label" style="color:darkslategray;">Nama Kamar</label>
                  <div class="col-sm-6">
                    <input type="text" name="namakmr" id="namakmr" value="<?=$data['nama']?>" placeholder="masukan nama kamar" class="form-control" style="font-size:13px;">
                  </div>
      </div>

      <div class="row mb-3">
                  <label for="inputText" class="col-sm-2 col-form-label" style="color:darkslategray;">Letak</label>
                  <div class="col-sm-6">
                    <input type="text" name="ltk" id="ltk" value="<?=$data['letak']?>" placeholder="masukan letak kamar" class="form-control" style="font-size:13px;">
                  </div>
          </div><br>

          <div class="col-sm-10" style="float:left;">
                  <button type="submit" name="kirim" class="btn btn-info" style="font-size:13px;">Update Data</button>
        </div>
      </form>
      </div>
 </div>
</main>