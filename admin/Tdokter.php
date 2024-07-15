<main id="main" class="main">
<div class="pagetitle">
      <h1 style="font-weight: bold;">Tambah Data Dokter &nbsp;
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
          <li class="breadcrumb-item"><a href="?page=dokter">Data Dokter</a></li>
          <li class="breadcrumb-item active">Tambah Data</li>
        </ol>
      </nav>
        <br>

       <!-- tag form -->
    <div class="row" style="background-color:aliceblue; padding: 20px; width: 100%;" >
    <h5 style="color:darkblue; font-weight:bold; margin-top:13px; margin-bottom:40px">Tambah Data Dokter Klinik Widyatama Medika</h5><br><br><br>

    <form action="Sdokter.php" method="POST" style="margin-left:70px; font-size:13px;">

      <div class="row mb-3">
                  <label for="inputText" class="col-sm-2 col-form-label" style="color:darkblue;">Id Dokter</label>
                  <div class="col-sm-6">
                    <input type="text" name="iddr" id="iddr" placeholder="tidak perlu diisi, karena terisi otomatis!!" class="form-control" style="font-size:13px;">
                  </div>
          </div>


          <div class="row mb-3">
                  <label for="inputText" class="col-sm-2 col-form-label" style="color:darkblue;">Nama Dokter</label>
                  <div class="col-sm-6">
                    <input type="text" name="nmdr" id="nmdr" placeholder="masukan nama dokter" class="form-control" style="font-size:13px;">
                  </div>
          </div>

          <div class="row mb-3">
                  <label for="inputText" class="col-sm-2 col-form-label" style="color:darkblue;">Keterangan</label>
                  <div class="col-sm-6">
                    <input type="text" name="ket" id="ket" placeholder="masukan keterangan dokter" class="form-control" style="font-size: 13px;">
                  </div>
          </div>

          <div class="row mb-3">
                  <label for="inputText" class="col-sm-2 col-form-label" style="color:darkblue;">Sip Kerja</label>
                  <div class="col-sm-6">
                    <input type="text" name="sip" id="sip" placeholder="masukan sip" class="form-control" style="font-size: 13px;">
                  </div>
          </div>


          <div class="row mb-3">
                  <label for="inputText" class="col-sm-2 col-form-label" style="color:darkblue;">Alamat</label>
                  <div class="col-sm-6">
                    <input type="text" name="almt" id="almt" placeholder="masukan alamat dokter" class="form-control" style="font-size: 13px;">
                  </div>
          </div>

          <div class="row mb-3">
                  <label for="inputText" class="col-sm-2 col-form-label" style="color:darkblue;">No Telpon</label>
                  <div class="col-sm-6">
                    <input type="text" name="hp" id="hp" placeholder="08xxxxxxxxxx" class="form-control" style="font-size: 13px;">
                  </div>
          </div><br><br>
          
          <div class="col-sm-10" style="float:left;">
                <button type="submit" name="kirim" class="btn btn-primary" style="font-size:13px;">Simpan Data</button>
        </div>
        
      </form>
      </div>
      
 </div>
</main>