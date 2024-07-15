<main id="main" class="main">
<div class="pagetitle">
      <h1 style="font-weight: bold;">Edit Data Pasien &nbsp;
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
          <li class="breadcrumb-item"><a href="?page=periksa">Data Pasien Periksa</a></li>
          <li class="breadcrumb-item active">Edit Data</li>
        </ol>
      </nav>
      <br>

      <!-- Mengambil data yang akan diedit, berdasarkan kode rak yang dipilih dan dikirim melalui link (get) -->
      <?php
          $idprs=$_GET['id'];
          //membuat sql tampil data
          $sqldataperiksa="SELECT * FROM tb_periksa WHERE id='$idprs'";
          //ambil koneksi data
          require_once "../config/koneksi.php";
          //proses sql
          $query=mysqli_query($koneksi,$sqldataperiksa);
          //mengubah data ke array asosiatif, tidak menggunakan perulangan karenadatanya hanya 1
          $data=mysqli_fetch_assoc($query);
          //selanjutnya tampilkan pada field dibawah.
      ?>

     <div class="row" id="idprs<?= $data['id']; ?>" style="background-color:aliceblue; padding: 20px; width: 100%;">
     <h5 style="color:darkblue; font-weight:bold; margin-top:13px; margin-bottom:40px">Edit Data Pasien ( <?= $data['nama_pasien']; ?> - <?= $data['ket']; ?> )</h5><br><br>
    <form action="Uperiksa.php" method="POST" style="margin-left:70px; font-size:13px;">

    <div class="row mb-3">
                  <label for="inputText" class="col-sm-2 col-form-label" style="color:darkslategray;">Id Pasien</label>
                  <div class="col-sm-6">
                    <input type="text" name="idprs" id="idprs" value="<?=$data['id']?>" placeholder="" class="form-control" style="font-size:13px;">
                  </div>
          </div>

    <div class="row mb-3">
                  <label for="inputText" class="col-sm-2 col-form-label" style="color:darkslategray;">Nama Pasien</label>
                  <div class="col-sm-6">
                    <input type="text" name="nmprs" id="nmprs" value="<?=$data['nama_pasien']?>" placeholder="" class="form-control" style="font-size:13px;">
                  </div>
          </div>
      

      <div class="row mb-3">
                  <label for="inputText" class="col-sm-2 col-form-label" style="color:darkslategray;">Tanggal Periksa</label>
                  <div class="col-sm-6"> 
                    <input type="date" name="tgl" id="tgl" value="<?=$data['tgl']?>" placeholder="" class="form-control" style="font-size:13px;">
                  </div>
      </div>

      <div class="row mb-3">
                  <label for="inputText" class="col-sm-2 col-form-label" style="color:darkslategray;">Keterangan</label>
                  <div class="col-sm-6">
                    <input type="text" name="ket" id="ket" value="<?=$data['ket']?>" placeholder="" class="form-control" style="font-size:13px;">
                  </div>
          </div>

      <div class="row mb-3">
                  <label for="inputText" class="col-sm-2 col-form-label" style="color:darkslategray;">Dokter</label>
                  <div class="col-sm-6">
                    <input type="text" name="dtr" id="dtr" value="<?=$data['dokter']?>" placeholder="" class="form-control" style="font-size:13px;">
                  </div>
          </div>

          <div class="row mb-3">
                  <label for="inputText" class="col-sm-2 col-form-label" style="color:darkslategray;">Biaya Periksa</label>
                  <div class="col-sm-6">
                    <input type="text" name="biaya" id="biaya" value="<?=$data['biaya']?>" placeholder="" class="form-control" style="font-size:13px;">
                  </div>
          </div><br>

          <div class="col-sm-10" style="float:left;">
                  <button type="submit" name="kirim" class="btn btn-info" style="font-size:13px;">Update Data</button>
        </div>
      </form>
      </div>
 </div>
</main>