<main id="main" class="main">
<div class="pagetitle">
      <h1 style="font-weight: bold;">Tambah Data Pasien &nbsp;
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
          <li class="breadcrumb-item active">Tambah Data</li>
        </ol>
      </nav>
        <br>

       <!-- tag form -->
    <div class="row" style="background-color:aliceblue; padding: 20px; width: 100%;" >
    <h5 style="color:darkblue; font-weight:bold; margin-top:13px; margin-bottom:40px">Tambah Data Pasien Periksa Klinik Widyatama Medika</h5><br><br><br>

    <form action="Speriksa.php" method="POST" style="margin-left:70px; font-size:13px;">

      <div class="row mb-3">
                  <label for="inputText" class="col-sm-2 col-form-label" style="color:darkblue;">Id Pasien</label>
                  <div class="col-sm-6">
                    <input type="text" name="idprs" id="idprs" placeholder="tidak perlu diisi, karena terisi otomatis!!" class="form-control" style="font-size:13px;">
                  </div>
          </div>


          <div class="row mb-3">
                  <label for="inputText" class="col-sm-2 col-form-label" style="color:darkblue;">Nama Pasien</label>
                  <div class="col-sm-6">
                  <select class="form-control" name="nmprs" id="nmprs" style="font-size: 13px;">
                            <option selected>-- Harap pilih pasien --</option>
                            <?php
                            include "../config/koneksi.php";

                            $sql = mysqli_query($koneksi, "SELECT * FROM krt_pasien");
                            while ($data = mysqli_fetch_array($sql)) {
                            ?>
                                <option value="<?= $data['nama']; ?>">(<?= $data['kode']; ?>)&nbsp;  <?= $data['nama']; ?> </option>
                            <?php
                            }
                            ?>
                        </select>
                  </div>
          </div>
          

          <div class="row mb-3">
                  <label for="inputText" class="col-sm-2 col-form-label" style="color:darkblue;">Tanggal Periksa</label>
                  <div class="col-sm-6">
                    <input type="date" name="tglprs" id="tglprs" placeholder="masukan tanggal periksa" class="form-control" style="font-size: 13px;">
                  </div>
          </div>

          <div class="row mb-3">
                  <label for="inputText" class="col-sm-2 col-form-label" style="color:darkblue;">Keterangan</label>
                  <div class="col-sm-6">
                    <input type="text" name="ket" id="ket" placeholder="masukan keterangan" class="form-control" style="font-size: 13px;">
                  </div>
          </div>

          <div class="row mb-3">
                  <label for="inputText" class="col-sm-2 col-form-label" style="color:darkblue;">Dokter</label>
                  <div class="col-sm-6">
                  <select class="form-control" name="dtr" id="dtr" style="font-size: 13px;">
                            <option selected>-- Harap pilih dokter --</option>
                            <?php
                            include "../config/koneksi.php";

                            $sql = mysqli_query($koneksi, "SELECT * FROM tb_dokter");
                            while ($data = mysqli_fetch_array($sql)) {
                            ?>
                                <option value="<?= $data['nama']; ?>"><?= $data['nama']; ?> ( <?= $data['keterangan']; ?> )</option>
                            <?php
                            }
                            ?>
                        </select>
                    </div>
         </div>

          <div class="row mb-3">
                  <label for="inputText" class="col-sm-2 col-form-label" style="color:darkblue;">Biaya Periksa</label>
                  <div class="col-sm-6">
                    <input type="text" name="bya" id="bya" placeholder="masukan jumlah biaya" class="form-control" style="font-size: 13px;">
                  </div>
          </div><br><br>

          
          <div class="col-sm-10" style="float:left;">
                <button type="submit" name="kirim" class="btn btn-info" style="font-size:13px;">Simpan Data</button>
        </div>
        
      </form>
      </div>
      
 </div>
</main>