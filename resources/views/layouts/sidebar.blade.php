{{-- <!-- Sidebar -->
<div class="flex flex-col items-center" style="background-color: #191922;">
  <div class="w-auto text-white p-4 flex flex-col">
    <h3 class="fs-5 font-semibold mb-2 w-full text-left">Modern Precense</h3>
    <h3 class="text-sm font-thin mb-2 w-full text-left px-0">Main Menu</h3>
    <ul>
      <hr class="border-t-2 border-white mt-2 mb-3">
      <li class="mb-2">
        <a href="#" class="flex rounded p-2 hover:bg-gray-700 text-base gap-2 items-center" style="color: white; text-decoration: none;">
          <i class="fa-solid fa-gauge text-left"></i>
          <span>Dashboard</span>
        </a>
      </li>
      <li class="mb-2">
        <a href="{{ url('siswa') }}" class="flex rounded hover:bg-gray-700 text-base items-center gap-2 p-2" style="color: white; text-decoration: none;">
          <i class="fa-solid fa-user-graduate" style="width: 16px;"></i>
          <span>Siswa</span>
        </a>
      </li>
      <li class="mb-2">
        <a href="{{ url('laporan') }}" class="flex rounded hover:bg-gray-700 text-base items-center gap-2 p-2" style="color: white; text-decoration: none;">
          <i class="fa-solid fa-file-lines" style="width: 16px;"></i>
          <span>Laporan Absensi</span>
        </a>
      </li>
      <hr class="border-t-2 border-white mt-2 mb-2">
      <li class="mb-2">
        <a href="{{ url('aboutus') }}" class="flex rounded pr-2 hover:bg-gray-700 text-base items-center gap-2 p-2" style="color: white; text-decoration: none;">
          <i class="fa-solid fa-circle-info" style="width: 16px;"></i>
          <span>About us</span>
        </a>
      </li>
    </ul>
  </div>
</div> --}}

<!-- Sidebar -->
<ul class="navbar-nav sidebar sidebar-dark accordion" id="accordionSidebar" style="background-color: #191922;">

    <!-- Sidebar - Brand -->
    <a class="sidebar-brand d-flex align-items-center justify-content-center" href="index.html"
        style="background-color: #303040;">
        <div class="sidebar-brand-icon">
            <img src="{{ asset('images/logo.png') }}" alt="logo" width="35" height="auto">
        </div>
        <div class="sidebar-brand-text">hronopresis</div>
    </a>

    {{-- Main Heading --}}
    <div class="p-3 sidebar-heading">
        <h6 class="text-left fw-bold ">modern precense</h6>
        <h6 class="text-left m-0 fw-light">main menu</h6>
    </div>

    <!-- Divider -->
    <hr class="sidebar-divider my-0">

    <!-- Nav Item - Dashboard -->
    <li class="nav-item active">
        <a class="nav-link" href="index.html">
            <i class="fas fa-fw fa-tachometer-alt"></i>
            <span>Dashboard</span></a>
    </li>

    <!-- Divider -->
    <hr class="sidebar-divider">

    <!-- Heading -->
    <div class="sidebar-heading">
        Interface
    </div>

    <!-- Nav Item - Siswa -->
    <li class="nav-item">
        <a class="nav-link" href="charts.html">
            {{-- <i class="fas fa-fw fa-chart-area"></i> --}}
            <i class="fa fa-child" aria-hidden="true"></i>
            <span>Siswa</span></a>
    </li>

    <!-- Nav Item - Laporan Absensi -->
    <li class="nav-item">
        <a class="nav-link" href="charts.html">
            {{-- <i class="fas fa-fw fa-chart-area"></i> --}}
            <i class="fa fa-file" aria-hidden="true"></i>
            <span>Laporan Absensi</span></a>
    </li>

    {{-- <!-- Nav Item - Pages Collapse Menu -->
            <li class="nav-item">
                <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseTwo"
                    aria-expanded="true" aria-controls="collapseTwo">
                    <i class="fas fa-fw fa-cog"></i>
                    <span>Components</span>
                </a>
                <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionSidebar">
                    <div class="bg-white py-2 collapse-inner rounded">
                        <h6 class="collapse-header">Custom Components:</h6>
                        <a class="collapse-item" href="buttons.html">Buttons</a>
                        <a class="collapse-item" href="cards.html">Cards</a>
                    </div>
                </div>
            </li>

            <!-- Nav Item - Utilities Collapse Menu -->
            <li class="nav-item">
                <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseUtilities"
                    aria-expanded="true" aria-controls="collapseUtilities">
                    <i class="fas fa-fw fa-wrench"></i>
                    <span>Utilities</span>
                </a>
                <div id="collapseUtilities" class="collapse" aria-labelledby="headingUtilities"
                    data-parent="#accordionSidebar">
                    <div class="bg-white py-2 collapse-inner rounded">
                        <h6 class="collapse-header">Custom Utilities:</h6>
                        <a class="collapse-item" href="utilities-color.html">Colors</a>
                        <a class="collapse-item" href="utilities-border.html">Borders</a>
                        <a class="collapse-item" href="utilities-animation.html">Animations</a>
                        <a class="collapse-item" href="utilities-other.html">Other</a>
                    </div>
                </div>
            </li> --}}

    <!-- Divider -->
    <hr class="sidebar-divider">

    <!-- Heading -->
    <div class="sidebar-heading">
        Addons
    </div>

    {{-- <!-- Nav Item - Pages Collapse Menu -->
            <li class="nav-item">
                <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapsePages"
                    aria-expanded="true" aria-controls="collapsePages">
                    <i class="fas fa-fw fa-folder"></i>
                    <span>Pages</span>
                </a>
                <div id="collapsePages" class="collapse" aria-labelledby="headingPages" data-parent="#accordionSidebar">
                    <div class="bg-white py-2 collapse-inner rounded">
                        <h6 class="collapse-header">Login Screens:</h6>
                        <a class="collapse-item" href="login.html">Login</a>
                        <a class="collapse-item" href="register.html">Register</a>
                        <a class="collapse-item" href="forgot-password.html">Forgot Password</a>
                        <div class="collapse-divider"></div>
                        <h6 class="collapse-header">Other Pages:</h6>
                        <a class="collapse-item" href="404.html">404 Page</a>
                        <a class="collapse-item" href="blank.html">Blank Page</a>
                    </div>
                </div>
            </li> --}}

    <!-- Nav Item - About us -->
    <li class="nav-item">
        <a class="nav-link" href="charts.html">
            {{-- <i class="fas fa-fw fa-chart-area"></i> --}}
            <i class="fa fa-info-circle" aria-hidden="true"></i>
            <span>About us</span></a>
    </li>

    {{-- <!-- Nav Item - Tables -->
            <li class="nav-item">
                <a class="nav-link" href="tables.html">
                    <i class="fas fa-fw fa-table"></i>
                    <span>Tables</span></a>
            </li> --}}

    <!-- Divider -->
    <hr class="sidebar-divider d-none d-md-block">

    <!-- Sidebar Toggler (Sidebar) -->
    <div class="text-center d-none d-md-inline">
        <button class="rounded-circle border-0" id="sidebarToggle"></button>
    </div>

    {{-- <!-- Sidebar Message -->
            <div class="sidebar-card d-none d-lg-flex">
                <img class="sidebar-card-illustration mb-2" src="img/undraw_rocket.svg" alt="...">
                <p class="text-center mb-2"><strong>SB Admin Pro</strong> is packed with premium features, components,
                    and more!</p>
                <a class="btn btn-success btn-sm" href="https://startbootstrap.com/theme/sb-admin-pro">Upgrade to
                    Pro!</a>
            </div> --}}

</ul>
<!-- End of Sidebar -->
