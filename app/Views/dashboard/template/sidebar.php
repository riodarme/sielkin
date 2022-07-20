<ul class="navbar-nav bg-gradient-primary sidebar sidebar-dark accordion" id="accordionSidebar">
            <!-- Sidebar - Brand -->
            <a class="sidebar-brand d-flex align-items-center justify-content-center" href="/">
                <div class="sidebar-brand-icon rotate-n-15">
                    <img src="/img/logobpn.ico" style="width: 40px;" alt="">
                </div>
                <div class="sidebar-brand-text mx-3">Sielkin<Br>ATR/BPN</Br></div>
            </a>
            <!-- Divider -->
            <hr class="sidebar-divider-primary my-0">
            <!-- Nav Item - Dashboard -->
            <li class="nav-item active">
                <a class="nav-link" href="/dashboard">
                    <i class="fas fa-fw fa-tachometer-alt"></i>
                    <span>Dashboard</span></a>
            </li>
            <!-- Divider -->
            <hr class="sidebar-divider">
            <!-- Heading -->
            <div class="sidebar-heading">
                Input Kegiatan
            </div>
            <!-- Nav Item - Utilities Collapse Menu -->
            <li class="nav-item">
          <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
          <i class="fas fa-laptop-house"></i>
            <span>Kegiatan</span>
          </a>
          <div id="collapseOne" class="collapse" aria-labelledby="headingOne" data-parent="#accordionSidebar">
            <div class="bg-white py-2 collapse-inner rounded">
              <a class="collapse-item" href="/kegiatan">Kegiatan Tahunan</a>
              <a class="collapse-item" href="/kegiatan/harian">Kegiatan harian</a>
            </div>
          </div>
        </li>
            <li class="nav-item">
                <a class="nav-link" href="/produktifitas">
                <i class="fas fa-briefcase"></i>
                    <span>Produktifitas</span></a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="/kritik">
                    <i class="fas fa-fw fa-comments"></i>
                    <span>Kritik & Saran  </span></a>
            </li>
            <!-- Divider -->
            <hr class="sidebar-divider">
            <!-- Heading -->
            <div class="sidebar-heading">
            Informasi 
            </div>
            <!-- Nav Item - Charts -->
                        <!-- Nav Item - Pages Collapse Menu -->
        <li class="nav-item">
          <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseTwo" aria-expanded="true" aria-controls="collapseTwo">
            <i class="fas fa-book"></i>
            <span>Laporan</span>
          </a>
          <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionSidebar">
            <div class="bg-white py-2 collapse-inner rounded">
              <a class="collapse-item" href="#">Laporan Tahunan</a>
              <!-- <a class="collapse-item" href="#">Laporan bulanan</a> -->
              <a class="collapse-item" href="<?= base_url('/laporan') ?>">Laporan Kegiatan</a>
            </div>
          </div>
        </li>
        <!-- Divider -->
        <?php if(session()->get('role_id') == 1) : ?>
          <hr class="sidebar-divider">
          <!-- Heading -->
          <div class="sidebar-heading">
            User 
          </div>
          <!-- Nav Item - Charts -->
          <!-- Nav Item - Pages Collapse Menu -->
          <li class="nav-item">
            <a class="nav-link" href="<?= base_url('/admin') ?>">
              <i class="fas fa-user-tie"></i>
              <span>Akun</span></a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="/admin/kegiatan">
                  <i class="fas fa-database"></i>
                    <span>Daftar Kegiatan</span></a>
                  </li>
            <!-- Divider -->
            <?php endif ; ?>
            <hr class="sidebar-divider d-none d-md-block">
          <!-- Sidebar Toggler (Sidebar) -->
          <div class="text-center d-none d-md-inline">
            <button class="rounded-circle border-0" id="sidebarToggle"></button>
          </div>
        </ul>
        <?= $this->renderSection('sidebar'); ?>