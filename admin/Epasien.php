<main id="main" class="main">
<div class="pagetitle">
      <h1 style="font-weight: bold;">Edit Data Pasien Periksa &nbsp;
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
          <li class="breadcrumb-item"><a href="?page=pasien">Data Pasien</a></li>
          <li class="breadcrumb-item active">Edit Data</li>
        </ol>
      </nav>
      <br>

      <!-- Mengambil data yang akan diedit, berdasarkan kode rak yang dipilih dan dikirim melalui link (get) -->
      <?php
          $idpsn=$_GET['id'];
          //membuat sql tampil data
          $sqldatapasien="SELECT * FROM krt_pasien WHERE id='$idpsn'";
          //ambil koneksi data
          require_once "../config/koneksi.php";
          //proses sql
          $query=mysqli_query($koneksi,$sqldatapasien);
          //mengubah data ke array asosiatif, tidak menggunakan perulangan karenadatanya hanya 1
          $data=mysqli_fetch_assoc($query);
          //selanjutnya tampilkan pada field dibawah.
      ?>

     <div class="row" id="iddr<?= $data['id']; ?>" style="background-color:aliceblue; padding: 20px; width: 100%;">
     <h5 style="color:darkblue; font-weight:bold; margin-top:13px; margin-bottom:40px">Edit Data Pasien ( <?= $data['nama']; ?> - <?= $data['usia']; ?> )</h5><br><br>
    <form action="Upasien.php" method="POST" style="margin-left:70px; font-size:13px;">

    <div class="row mb-3">
                  <label for="inputText" class="col-sm-2 col-form-label" style="color:darkslategray;">Id</label>
                  <div class="col-sm-6">
                    <input type="text" name="idpsn" id="idpsn" value="<?=$data['id']?>" placeholder=" " class="form-control" style="font-size:13px;">
                  </div>
          </div>

      <div class="row mb-3">
                  <label for="inputText" class="col-sm-2 col-form-label" style="color:darkslategray;">Id Pasien</label>
                  <div class="col-sm-6">
                    <input type="text" name="kd" id="kd" value="<?=$data['kode']?>" placeholder="" class="form-control" style="font-size:13px;">
                  </div>
          </div>

      <div class="row mb-3">
                  <label for="inputText" class="col-sm-2 col-form-label" style="color:darkslategray;">Nama Lengkap</label>
                  <div class="col-sm-6">
                    <input type="text" name="nmpsn" id="nmpsn" value="<?=$data['nama']?>" placeholder="" class="form-control" style="font-size:13px;">
                  </div>
      </div>

      <div class="row mb-3">
                  <label for="inputText" class="col-sm-2 col-form-label" style="color:darkslategray;">Usia</label>
                  <div class="col-sm-6">
                    <input type="text" name="umr" id="umr" value="<?=$data['usia']?>" placeholder="" class="form-control" style="font-size:13px;">
                  </div>
          </div>

          <div class="row mb-3">
                  <label for="inputText" class="col-sm-2 col-form-label" style="color:darkslategray;">Alamat</label>
                  <div class="col-sm-6">
                    <input type="text" name="almt" id="almt" value="<?=$data['alamat']?>" placeholder="" class="form-control" style="font-size:13px;">
                  </div>
          </div>

          <div class="row mb-3">
                  <label for="inputText" class="col-sm-2 col-form-label" style="color:darkslategray;">Bergabung</label>
                  <div class="col-sm-6">
                    <input type="date" name="join" id="join" value="<?=$data['tglgabung']?>" placeholder="masukan letak kamar" class="form-control" style="font-size:13px;">
                  </div>
          </div><br>

          <div class="col-sm-10" style="float:left;">
                  <button type="submit" name="kirim" class="btn btn-success" style="font-size:13px;">Update Data</button>
        </div>
      </form>
      </div>
 </div>
</main>