<!-- Sidebar -->
<ul
        class="navbar-nav bg-gradient-primary sidebar sidebar-dark accordion"
        id="accordionSidebar"
      >
        <!-- Sidebar - Brand -->
        <a
          class="sidebar-brand d-flex align-items-center justify-content-center"
          href="index.html"
        >
          <div class="sidebar-brand-icon rotate-n-15">
            <i class="fas fa-laugh-wink"></i>
          </div>
          <div class="sidebar-brand-text mx-3">
            Aplikasi Kesiswaan
          </div>
        </a>

        <!-- Divider -->
        <hr class="sidebar-divider my-0" />

        <!-- Nav Item - Dashboard -->
        <li class="nav-item <?= $_GET['page'] == '' ? 'active' : ''?>">
          <a class="nav-link" href="index.php">
            <i class="fas fa-fw fa-tachometer-alt"></i>
            <span>Dashboard</span></a
          >
        </li>

        <!-- Divider -->
        <hr class="sidebar-divider" />

        <!-- Heading -->
        <div class="sidebar-heading">
          Data
        </div>

        <!-- Nav Item - Siswa Menu -->
        <li class="nav-item <?= $_GET['page'] == 'siswa' ? 'active' : ''?> ">
          <a class="nav-link" href="index.php?page=siswa">
            <i class="fas fa-fw fa-cog"></i>
            <span>Siswa</span>
          </a>
        </li>
        <li class="nav-item <?= $_GET['page'] == 'ortu' ? 'active' : ''?>">
          <a class="nav-link " href="index.php?page=ortu">
            <i class="fas fa-fw fa-cog"></i>
            <span>Orang Tua</span>
          </a>
        </li>

        <!-- Divider -->
        <hr class="sidebar-divider d-none d-md-block" />

        <!-- Sidebar Toggler (Sidebar) -->
        <div class="text-center d-none d-md-inline">
          <button class="rounded-circle border-0" id="sidebarToggle"></button>
        </div>
      </ul>
      <!-- End of Sidebar -->