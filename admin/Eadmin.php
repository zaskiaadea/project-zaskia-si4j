<main id="main" class="main">
<div class="pagetitle">
      <h1 style="font-weight: bold;">Edit Data Admin &nbsp;
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
          <li class="breadcrumb-item active">Edit Data</li>
        </ol>
      </nav>
      <br>

      <!-- Mengambil data yang akan diedit, berdasarkan kode rak yang dipilih dan dikirim melalui link (get) -->
      <?php
          $idadm=$_GET['id'];
          //membuat sql tampil data
          $sqldataadmin="SELECT * FROM tb_admin WHERE id='$idadm'";
          //ambil koneksi data
          require_once "../config/koneksi.php";
          //proses sql
          $query=mysqli_query($koneksi,$sqldataadmin);
          //mengubah data ke array asosiatif, tidak menggunakan perulangan karenadatanya hanya 1
          $data=mysqli_fetch_assoc($query);
          //selanjutnya tampilkan pada field dibawah.
      ?>

     <div class="row" style="background-color:aliceblue; padding: 20px; width: 100%;">
     <h5 style="color:darkblue; font-weight:bold; margin-top:13px; margin-bottom:40px">Edit Admin( <?= $data['fullname']; ?> - <?= $data['username']; ?> )</h5><br><br>
    <form action="Uadmin.php" method="POST" style="margin-left:70px; font-size:13px;">

    <div class="row mb-3">
                  <label for="inputText" class="col-sm-2 col-form-label" style="color:darkslategray;">Id Admin</label>
                  <div class="col-sm-6">
                    <input type="text" name="idadm" id="idadm" value="<?=$data['id']?>" placeholder="" class="form-control" style="font-size:13px;">
                  </div>
          </div>

      <div class="row mb-3">
                  <label for="inputText" class="col-sm-2 col-form-label" style="color:darkslategray;">Nama Lengkap</label>
                  <div class="col-sm-6">
                    <input type="text" name="nmadm" id="nmadm" value="<?=$data['fullname']?>" placeholder="" class="form-control" style="font-size:13px;">
                  </div>
          </div>

      <div class="row mb-3">
                  <label for="inputText" class="col-sm-2 col-form-label" style="color:darkslategray;">Nama Pengguna</label>
                  <div class="col-sm-6">
                    <input type="text" name="usn" id="usn" value="<?=$data['username']?>" placeholder="" class="form-control" style="font-size:13px;">
                  </div>
      </div>

      <div class="row mb-3">
                  <label for="inputText" class="col-sm-2 col-form-label" style="color:darkslategray;">Kata Sandi</label>
                  <div class="col-sm-6">
                    <input type="text" name="pass" id="pass" value="<?=$data['password']?>" placeholder="" class="form-control" style="font-size:13px;">
                  </div>
          </div><br>

          <div class="col-sm-10" style="float:left;">
                  <button type="submit" name="kirim" class="btn btn-info" style="font-size:13px;">Update Data</button>
        </div>
      </form>
      </div>
 </div>
</main>