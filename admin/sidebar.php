<aside id="sidebar" class="sidebar">

    <ul class="sidebar-nav" id="sidebar-nav">

      <li class="nav-item">
        <a class="nav-link " href="?page=dashboard">
        <i class="ri-apps-line"></i>
          <span>Dashboard</span>
        </a>
      </li> 
      <!-- dashboard nav end -->

      <li class="nav-item">
        <a class="nav-link collapsed" data-bs-target="#components-nav" data-bs-toggle="collapse" href="?page=home">
        <i class="ri-folder-open-line"></i>
        <span>Master Data</span><i class="bi bi-chevron-down ms-auto"></i>
        </a>
        <ul id="components-nav" class="nav-content collapse " data-bs-parent="#sidebar-nav">
        <li>
            <a href="?page=admin">
              <i class="bi bi-circle"></i><span>Data Admin</span>
            </a>
          </li>
          <li>
            <a href="?page=kamar">
              <i class="bi bi-circle"></i><span>Data Kamar</span>
            </a>
          </li>
          <li>
            <a href="?page=dokter">
              <i class="bi bi-circle"></i><span>Data Dokter</span>
            </a>
          </li>
          <li>
            <a href="?page=pasien">
              <i class="bi bi-circle"></i><span>Data Pasien</span>
            </a>
          </li>
          
        </ul>
    </li>
    <!-- data nav end -->

    <li class="nav-heading">Lain-Lain</li>

    <li class="nav-item">
        <a class="nav-link collapsed" href="?page=periksa">
        <i class="ri-folder-history-line"></i>
          <span>Pasien Periksa</span>
        </a>
    </li> 
    <!-- p.periksa nav end -->

    <li class="nav-item">
        <a class="nav-link collapsed" data-bs-target="#form-nav" data-bs-toggle="collapse" href="?page=home">
        <i class="ri-folder-open-line"></i>
        <span>Pasien Rawat Inap</span><i class="bi bi-chevron-down ms-auto"></i>
        </a>
        <ul id="form-nav" class="nav-content collapse " data-bs-parent="#sidebar-nav">
          <li>
            <a href="?page=riwayat_rawat">
              <i class="bi bi-circle"></i><span>Riwayat</span>
            </a>
          </li>
          <li>
            <a href="?page=rawat_masuk">
              <i class="bi bi-circle"></i><span>Pasien Masuk</span>
            </a>
          </li>
          
        </ul>
    </li>
    <!-- p.rawat inap nav end -->

    <li class="nav-item">
        <a class="nav-link collapsed" data-bs-target="#components2-nav" data-bs-toggle="collapse" href="?page=home">
        <i class="ri-folder-add-line"></i>
        <span>Pasien Bersalin</span><i class="bi bi-chevron-down ms-auto"></i>
        </a>
        <ul id="components2-nav" class="nav-content collapse " data-bs-parent="#sidebar-nav">
          <li>
            <a href="?page=riwayat_bersalin">
              <i class="bi bi-circle"></i><span>Riwayat</span>
            </a>
          </li>
          <li>
            <a href="?page=bersalin_masuk">
              <i class="bi bi-circle"></i><span>Pasien Masuk</span>
            </a>
          </li>
        
        </ul>
    </li>
    <!-- p.bersalin nav end -->

    <li class="nav-heading">Lanjutan</li>
    <li class="nav-item">
        <a class="nav-link collapsed" href="logout.php">
        <i class="bi bi-box-arrow-right"></i>
          <span>Log Out</span>
        </a>
    </li><!-- keluar end -->


    </ul> 
</aside>