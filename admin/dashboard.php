<main id="main" class="main">
  <div class="pagetitle">

        <h1 style="font-weight: bold;">Dashboard &nbsp;
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
            <li class="breadcrumb-item active">Dashboard</li>
          </ol>
        </nav>

        <?php 
        
        date_default_timezone_set('Asia/Jakarta');
        $jam = date('H');

        if ($jam >=5 && $jam < 12)
        {
          $salam = "Selamat Pagi";
        } elseif ($jam >=12 && $jam < 15)
        {
          $salam = "Selamat Siang";
        } elseif ($jam >=15 && $jam < 18)
        {
          $salam = "Selamat Sore";
        } else{
          $salam = "Selamat Malam";
        }
        
        ?>

        <div class="row" style="padding: 15px" >

          <div class="alert alert-primary alert-dismissible fade show" role="alert" style="text-align: center;">
              <?= $salam; ?>,&nbsp; Selamat Datang &nbsp; <b><?= $_SESSION['nama']; ?></b>&nbsp; di Dashbord Administrator Klinik Widyatama Medika
          </div>
          <p></p><br>
          <div>
             <img src="../assets/img/logokliniknoname.png" alt="" width="230px" height="230px" style="display: block; margin-left: auto; margin-right: auto; margin-top: 30px; margin-bottom: -20px;">
             <br><br>
              <h4 class="text-center" style="font-family: Cambria, Cochin, Georgia, Times, 'Times New Roman', serif; color:navy;"><b>Klinik Widyatama Medika</b></h4>
            </div>
        </div>
      

      </div>
</main>