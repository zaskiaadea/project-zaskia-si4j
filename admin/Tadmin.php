<main id="main" class="main">
<div class="pagetitle">
      <h1 style="font-weight: bold;">Tambah Data Admin &nbsp;
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
          <li class="breadcrumb-item"><a href="?page=admin">Data Admin</a></li>
          <li class="breadcrumb-item active">Tambah Data Admin</li>
        </ol>
      </nav> <br>

    <!-- tag form -->
    <div class="row" style="background-color:aliceblue; padding: 20px; width: 100%;" >
    <h5 style="color:darkblue; font-weight:bold; margin-top:13px; margin-bottom:40px">Tambah Data Admin Klinik Widyatama Medika</h5><br><br><br>
      <form action="Sadmin.php" method="POST" style="margin-left:70px; font-size:13px;">

      <div class="row mb-3">
                  <label for="inputText" class="col-sm-2 col-form-label" style="color:darkblue;">Id Admin</label>
                  <div class="col-sm-6">
                    <input type="text" name="idadm" id="idadm" placeholder="tidak perlu diisi, karena terisi otomatis!!" class="form-control" style="font-size:13px;">
                  </div>
          </div>


          <div class="row mb-3">
                  <label for="inputText" class="col-sm-2 col-form-label" style="color:darkblue;">Nama Lengkap</label>
                  <div class="col-sm-6">
                    <input type="text" name="nmadm" id="nmadm" placeholder="masukan nama lengkap admin" class="form-control" style="font-size:13px;">
                  </div>
          </div>

          <div class="row mb-3">
                  <label for="inputText" class="col-sm-2 col-form-label" style="color:darkblue;">Nama Pengguna</label>
                  <div class="col-sm-6">
                    <input type="text" name="usn" id="usn" placeholder="masukan nama pengguna admin" class="form-control" style="font-size: 13px;">
                  </div>
          </div>

          <div class="row mb-3">
                  <label for="inputText" class="col-sm-2 col-form-label" style="color:darkblue;">Kata Sandi</label>
                  <div class="col-sm-6">
                    <input type="text" name="pass" id="pass" placeholder="masukan kata sandi admin" class="form-control" style="font-size: 13px;">
                  </div>
          </div>
          <br><br><br>
          
          <div class="col-sm-10" style="float:left;">
                    <button type="submit" name="kirim" class="btn btn-primary" style="font-size:13px;">Simpan Data</button>
        </div>
        
    </form>
    </div>
      
 </div>
</main>