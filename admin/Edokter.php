<main id="main" class="main">
<div class="pagetitle">
      <h1 style="font-weight: bold;">Edit Data Dokter &nbsp;
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
          <li class="breadcrumb-item"><a href="?page=kamar">Data Dokter</a></li>
          <li class="breadcrumb-item active">Edit Data</li>
        </ol>
      </nav>
      <br>

      <!-- Mengambil data yang akan diedit, berdasarkan kode rak yang dipilih dan dikirim melalui link (get) -->
      <?php
          $iddr=$_GET['id'];
          //membuat sql tampil data
          $sqldatadokter="SELECT * FROM tb_dokter WHERE id='$iddr'";
          //ambil koneksi data
          require_once "../config/koneksi.php";
          //proses sql
          $query=mysqli_query($koneksi,$sqldatadokter);
          //mengubah data ke array asosiatif, tidak menggunakan perulangan karenadatanya hanya 1
          $data=mysqli_fetch_assoc($query);
          //selanjutnya tampilkan pada field dibawah.
      ?>

     <div class="row" id="iddr<?= $data['id']; ?>" style="background-color:aliceblue; padding: 20px; width: 100%;">
     <h5 style="color:darkblue; font-weight:bold; margin-top:13px; margin-bottom:40px">Edit Data Dokter ( <?= $data['nama']; ?> - <?= $data['keterangan']; ?> )</h5><br><br>
    <form action="Udokter.php" method="POST" style="margin-left:70px; font-size:13px;">

    <div class="row mb-3">
                  <label for="inputText" class="col-sm-2 col-form-label" style="color:darkslategray;">Id Dokter</label>
                  <div class="col-sm-6">
                    <input type="text" name="iddr" id="iddr" value="<?=$data['id']?>" placeholder="masukan " class="form-control" style="font-size:13px;">
                  </div>
          </div>

      <div class="row mb-3">
                  <label for="inputText" class="col-sm-2 col-form-label" style="color:darkslategray;">Nama Dokter</label>
                  <div class="col-sm-6">
                    <input type="text" name="nmdr" id="nmdr" value="<?=$data['nama']?>" placeholder="masukan kodekategori" class="form-control" style="font-size:13px;">
                  </div>
          </div>

      <div class="row mb-3">
                  <label for="inputText" class="col-sm-2 col-form-label" style="color:darkslategray;">Keterangan</label>
                  <div class="col-sm-6">
                    <input type="text" name="ket" id="ket" value="<?=$data['keterangan']?>" placeholder="masukan nama kamar" class="form-control" style="font-size:13px;">
                  </div>
      </div>

      <div class="row mb-3">
                  <label for="inputText" class="col-sm-2 col-form-label" style="color:darkslategray;">Sip Kerja</label>
                  <div class="col-sm-6">
                    <input type="text" name="sip" id="sip" value="<?=$data['sip']?>" placeholder="" class="form-control" style="font-size:13px;">
                  </div>
          </div>

          <div class="row mb-3">
                  <label for="inputText" class="col-sm-2 col-form-label" style="color:darkslategray;">Alamat</label>
                  <div class="col-sm-6">
                    <input type="text" name="almt" id="almt" value="<?=$data['alamat']?>" placeholder="" class="form-control" style="font-size:13px;">
                  </div>
          </div>

          <div class="row mb-3">
                  <label for="inputText" class="col-sm-2 col-form-label" style="color:darkslategray;">No. Telpon</label>
                  <div class="col-sm-6">
                    <input type="text" name="hp" id="hp" value="<?=$data['nohp']?>" placeholder="" class="form-control" style="font-size:13px;">
                  </div>
          </div><br>

          <div class="col-sm-10" style="float:left;">
                  <button type="submit" name="kirim" class="btn btn-primary" style="font-size:13px;">Update Data</button>
        </div>
      </form>
      </div>
 </div>
</main>