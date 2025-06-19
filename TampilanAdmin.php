<?php
session_start();
if (!isset($_SESSION['username']) || !isset($_SESSION['role'])) {
    header("Location: ../frontend/login.php");
    exit();
}

$page = isset($_GET['p']) ? $_GET['p'] : 'dashboard';
$role = $_SESSION['role'];

?>


<!DOCTYPE html>
<html lang="en">
<!-- [Head] start -->

<head>
  <title>Dashboard</title>
  <!-- [Meta] -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0, minimal-ui">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="description" content="Mantis is made using Bootstrap 5 design framework. Download the free admin template & use it for your project.">
  <meta name="keywords" content="Mantis, Dashboard UI Kit, Bootstrap 5, Admin Template, Admin Dashboard, CRM, CMS, Bootstrap Admin Template">
  <meta name="author" content="CodedThemes">


<!-- Tambahkan link ini di <head> HTML kamu -->
<link href="https://cdn.jsdelivr.net/npm/@tabler/icons-webfont@2.39.0/tabler-icons.min.css" rel="stylesheet">

<!-- [Template CSS Files] -->
<link rel="stylesheet" href="Dashboard.css" id="main-style-link" >
<link rel="stylesheet" href="Preset.css" id="main-style-link" >
<link href="https://cdn.jsdelivr.net/npm/simplebar@6.2.5/dist/simplebar.min.css" rel="stylesheet">
<link href="https://cdn.jsdelivr.net/npm/@tabler/icons-webfont@2.39.0/tabler-icons.min.css" rel="stylesheet">



</head>
<!-- [Head] end -->

<!-- [Body] Start -->
<body data-pc-preset="preset-1" data-pc-direction="ltr" data-pc-theme="light">
  <!-- [ Pre-loader ] start -->
    <div class="loader-bg">
    <div class="loader-track">
        <div class="loader-fill"></div>
    </div>
    </div>
<!-- [ Pre-loader ] End -->
 <!-- [ Sidebar Menu ] start -->
    <nav class="pc-sidebar"  style=" background: linear-gradient(90deg, #F1F1F1 60%, #BDBDBD 100%);">
    <div class="navbar-wrapper">
        <div class="m-header mt-2">
        <a href="?p=dashboard" class="b-brand text-primary">
           <span class="pc-mtext d-flex align-items-center">
                <img src="logonagari.png" alt="Logo" width="32" height="32" class="me-2">
                <h5 class="mb-0 text-primary">Nagari Batang Barus</h5>
        </span>
        </a>
        </div>
        <div class="navbar-content" style=" background: linear-gradient(90deg, #F1F1F1 60%, #BDBDBD 100%);">
        <ul class="pc-navbar" >
    <?php 
    if ($role == 'admin'): 
    ?>
        <li class="pc-item <?= ($page == 'dashboard') ? 'active' : ''; ?>">
            <a href="?p=dashboard" class="pc-link">
                <span class="pc-micon"><i class="ti ti-layout-dashboard"></i></span>
                <span class="pc-mtext">Dashboard</span>
            </a>
        </li>
        <li class="pc-item <?= ($page == 'penduduk') ? 'active' : ''; ?>" >
            <a href="?p=penduduk" class="pc-link">
                <span class="pc-micon"><i class="ti ti-file"></i></span>
                <span class="pc-mtext">Data Penduduk</span>
            </a>
        </li>
        <li class="pc-item <?= ($page == 'struktur') ? 'active' : ''; ?>">
            <a href="?p=struktur" class="pc-link">
                <span class="pc-micon"><i class="ti ti-users"></i></span>
                <span class="pc-mtext">Struktur</span>
            </a>
        </li>
        <li class="pc-item <?php echo ($page == 'berita') ? 'active' : ''; ?>">
        <a href="?p=berita" class="pc-link">
            <span class="pc-micon"><i class="ti ti-news"></i></span>
            <span class="pc-mtext">Berita</span>
        </a>
        </li>
    <?php endif; ?>

    <?php if ($role == 'admin' || $role == 'sekretaris'): ?>
        <li class="pc-item <?= ($page == 'visi') ? 'active' : ''; ?>">
            <a href="?p=visi" class="pc-link">
                <span class="pc-micon"><i class="ti ti-eye"></i></span>
                <span class="pc-mtext">Visi & Misi</span>
            </a>
        </li>
        <li class="pc-item <?= ($page == 'sejarah') ? 'active' : ''; ?>">
            <a href="?p=sejarah" class="pc-link">
                <span class="pc-micon"><i class="ti ti-book"></i></span>
                <span class="pc-mtext">Sejarah</span>
            </a>
        </li>
        <li class="pc-item <?= ($page == 'galeri') ? 'active' : ''; ?>">
            <a href="?p=galeri" class="pc-link">
                <span class="pc-micon"><i class="ti ti-camera"></i></span>
                <span class="pc-mtext">Galeri</span>
            </a>
        </li>
    <?php endif; ?>

    <li class="pc-item">
        <a href="logout.php" class="pc-link">
            <span class="pc-micon"><i class="ti ti-logout"></i></span>
            <span class="pc-mtext">Logout</span>
        </a>
    </li>
</ul>

        </div>
    </div>
    </nav>
<!-- [ Sidebar Menu ] end --> 
 
<!-- [ Header TopBar  ] start -->
    <header class="pc-header"  style=" background: linear-gradient(90deg, #F1F1F1 60%, #BDBDBD 100%);">
        <div class="header-wrapper"> <!-- [Mobile Media Block] start -->
            <div class="me-auto pc-mob-drp">
                <ul class="list-unstyled">
                    <!-- ======= Menu collapse Icon ===== -->
                    <li class="pc-h-item pc-sidebar-collapse">
                    <a href="#" class="pc-head-link ms-0" id="sidebar-hide">
                        <i class="ti ti-menu-2"></i>
                    </a>
                    </li>
                    <li class="pc-h-item pc-sidebar-popup">
                    <a href="#" class="pc-head-link ms-0" id="mobile-collapse">
                        <i class="ti ti-menu-2"></i>
                    </a>
                    </li>
                    <li class="dropdown pc-h-item d-inline-flex d-md-none">
                    <a
                        class="pc-head-link dropdown-toggle arrow-none m-0"
                        data-bs-toggle="dropdown"
                        href="#"
                        role="button"
                        aria-haspopup="false"
                        aria-expanded="false"
                    >
                        <i class="ti ti-search"></i>
                    </a>
                    <div class="dropdown-menu pc-h-dropdown drp-search">
                        <form class="px-3">
                        <div class="form-group mb-0 d-flex align-items-center">
                            <i data-feather="search"></i>
                            <input type="search" class="form-control border-0 shadow-none" placeholder="Search here. . .">
                        </div>
                        </form>
                    </div>
                    </li>
                    <li class="pc-h-item d-none d-md-inline-flex">
                    <form class="header-search">
                        <i data-feather="search" class="icon-search"></i>
                        <input type="search" class="form-control" placeholder="Search here. . .">
                    </form>
                    </li>
                </ul>
            </div>
        </div>
    <!-- [Mobile Media Block end] -->
    </header>
<!-- [ Header ] end -->


<!-- [ Main Content ] start -->
    <main>
        <div class="pc-container">
            <div class="pc-content">
                <?php
                $page=isset($_GET['p']) ? $_GET['p'] : 'dashboard';

                if ($page=='dashboard') include 'dashboard.php';
                if ($page=='penduduk') include 'penduduk.php';
                if ($page=='struktur') include 'struktur.php';
                if ($page=='visi') include 'visi.php';
                if ($page=='sejarah') include 'sejarah.php';
                if ($page=='berita') include 'berita.php';
                if ($page=='galeri') include 'galeri.php';

            ?>

            </div>
        </div>

        

    </main>



  

  <!-- [ Main Content ] end -->

  <!-- [Page Specific JS] start -->
 <script src="https://cdn.jsdelivr.net/npm/apexcharts"></script>

  <script src="../pages/dashboard-default.js"></script>
  <!-- [Page Specific JS] end -->
  <!-- Required Js -->
 <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2"></script>
  <script src="https://cdn.jsdelivr.net/npm/simplebar@6.2.5/dist/simplebar.min.js"></script>
 <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
  <script src="../fonts/custom-font.js"></script>
  <script src="layout-compact.js"></script>
 <script src="https://cdn.jsdelivr.net/npm/feather-icons@4.29.1/dist/feather.min.js"></script>
<script>
  feather.replace();
</script>
  <script>layout_change('light');</script>
  <script>change_box_container('false');</script>
  <script>layout_rtl_change('false');</script>
  <script>preset_change("preset-1");</script>
  <script>font_change("Public-Sans");</script>
  
    

</body>
<!-- [Body] end -->

</html>