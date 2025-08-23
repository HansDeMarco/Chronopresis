

<!-- Sidebar -->
<ul class="navbar-nav sidebar sidebar-dark accordion" id="accordionSidebar" style="background-color: #191922;">

    <!-- Sidebar - Brand -->
    <a class="sidebar-brand d-flex align-items-center justify-content-center" href="/dashboard"
        style="background-color: #303040;">
        <div class="sidebar-brand-icon">
            <img src="<?php echo e(asset('pictures/favicon.png')); ?>" alt="logo" width="35" height="auto">
        </div>
        <div class="sidebar-brand-text">hronopresis</div>
    </a>

    
    <div class="p-3 sidebar-heading">
        <h6 class="text-left fs-6 fw-bold text-white">modern precense</h6>
        <h6 class="text-left m-0 fw-light">main menu</h6>
    </div>

    <!-- Divider -->
    <hr class="sidebar-divider my-0">

    <!-- Nav Item - Dashboard -->
    <li class="nav-item <?php echo e(request()->is('dashboard') ? 'active' : ''); ?>">
        <a class="nav-link" href="/dashboard">
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
    <li class="nav-item <?php echo e(request()->is('siswa*') ? 'active' : ''); ?>">
        <a class="nav-link" href="<?php echo e(route('siswa.index')); ?>">
            
            <i class="fa fa-child" aria-hidden="true"></i>
            <span>Siswa</span></a>
    </li>

    <!-- Nav Item - Jurusan -->
    <li class="nav-item <?php echo e(request()->is('jurusan*') ? 'active' : ''); ?>">
        <a class="nav-link" href="/jurusan">
            
            <i class="fa fa-child" aria-hidden="true"></i>
            <span>Jurusan</span></a>
    </li>

    <!-- Nav Item - Kelas -->
    <li class="nav-item <?php echo e(request()->is('kelas*') ? 'active' : ''); ?>">
        <a class="nav-link" href="/kelas">
            
            <i class="fa fa-child" aria-hidden="true"></i>
            <span>Kelas</span></a>
    </li>

    <!-- Nav Item - Guru -->
    <li class="nav-item <?php echo e(request()->is('guru*') ? 'active' : ''); ?>">
        <a class="nav-link" href="/guru">
            
            <i class="fa fa-child" aria-hidden="true"></i>
            <span>Guru</span></a>
    </li>

    <!-- Nav Item - Mapel -->
    <li class="nav-item <?php echo e(request()->is('mapel*') ? 'active' : ''); ?>">
        <a class="nav-link" href="/mapel">
            
            <i class="fa fa-child" aria-hidden="true"></i>
            <span>Mapel</span></a>
    </li>

    <!-- Nav Item - Kejuruan -->
    <li class="nav-item <?php echo e(request()->is('kejuruan*') ? 'active' : ''); ?>">
        <a class="nav-link" href="/kejuruan">
            
            <i class="fa fa-child" aria-hidden="true"></i>
            <span>Mapel Kejuruan</span></a>
    </li>

    <!-- Nav Item - Jadwal -->
    <!-- <li class="nav-item <?php echo e(request()->is('jadwal*') ? 'active' : ''); ?>">
        <a class="nav-link" href="/jadwal">
            
            <i class="fa fa-child" aria-hidden="true"></i>
            <span>Jadwal</span></a>
    </li> -->

    <!-- Nav Item - Absensi -->
    

    <!-- Nav Item - Laporan Absensi
    

    <! Nav Item - Pages Collapse Absensi -->
    <li class="nav-item">
        <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseTwo" aria-expanded="true"
            aria-controls="collapseTwo">
            
            <i class="fa fa-file" aria-hidden="true"></i>
            <span>Absensi</span>
        </a>
        <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionSidebar">
            <div class="py-2 collapse-inner rounded">
                <h6 class="collapse-header text-white">Daftar Kelas:</h6>
                <a class="collapse-item text-white" href="<?php echo e(route('jadwal.index', ['jurusan' => 'RPL'])); ?>">RPL</a>
                <a class="collapse-item text-white" href="<?php echo e(route('jadwal.index', ['jurusan' => 'TKJ'])); ?>">TKJ</a>
                <a class="collapse-item text-white" href="<?php echo e(route('jadwal.index', ['jurusan' => 'Analis Kimia'])); ?>">Analis Kimia</a>
            </div>
        </div>
    </li>

    <!-- Nav Item - Rekap Absensi -->
    <li class="nav-item <?php echo e(request()->is('rekap') ? 'active' : ''); ?>">
        <a class="nav-link" href="/rekap">
            
            <i class="fa fa-file" aria-hidden="true"></i>
            <span>Rekap Absensi</span>
        </a>
    </li>

    

    <!-- Divider -->
    <hr class="sidebar-divider">

    <!-- Heading -->
    <div class="sidebar-heading">
        Addons
    </div>

    

    <!-- Nav Item - About us -->
    <li class="nav-item">
        <a class="nav-link" href="charts.html">
            
            <i class="fa fa-info-circle" aria-hidden="true"></i>
            <span>About us</span></a>
    </li>

    

    <!-- Divider -->
    <hr class="sidebar-divider d-none d-md-block">

    <!-- Sidebar Toggler (Sidebar) -->
    <div class="text-center d-none d-md-inline">
        <button class="rounded-circle border-0" id="sidebarToggle"></button>
    </div>

    

</ul>
<!-- End of Sidebar -->

<style>
    .collapse-item:hover {
        color: black !important;
    }
</style><?php /**PATH C:\xampp\htdocs\absen\Chronopresis\resources\views/layouts/sidebar.blade.php ENDPATH**/ ?>