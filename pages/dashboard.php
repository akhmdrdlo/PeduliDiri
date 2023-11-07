<?php
session_start();

if(empty($_SESSION['nik'])){
  echo "<script>
  alert('Maaf,Anda harus Login terlebih dahulu!!');
  window.location.assign('login.php');
  </script>";
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <link rel="apple-touch-icon" sizes="76x76" href="../assets/img/apple-icon.png">
  <link rel="icon" type="image/png" href="../assets/img/logo.png">
  <title>
    Aplikasi Peduli Diri
  </title>
  <!-- Nucleo Icons -->
  <link href="../assets/css/nucleo-icons.css" rel="stylesheet" />
  <link href="../assets/css/nucleo-svg.css" rel="stylesheet" />
  <!-- Font Awesome Icons -->
  <script src="../assets/js/kitFontAwesome.js" crossorigin="anonymous"></script>
  <link href="../assets/icon/css/all.css" rel="stylesheet" />
  <link rel="stylesheet" href="../assets/css/jquery.dataTables.min.css">

  <!-- CSS Files -->
  <link id="pagestyle" href="../assets/css/argon-dashboard.css?v=2.0.1" rel="stylesheet" />
</head>

<body class="g-sidenav-show   bg-gray-100">
  <div class="position-absolute w-100 min-height-300 top-0" style="background-image: url('../assets/img/bg1.jpg'); background-position-y: 50%;">
    <span class="mask bg-primary opacity-6"></span>
  </div>
  <aside class="sidenav bg-white navbar navbar-vertical navbar-expand-xs border-0 border-radius-xl my-3 fixed-start ms-4 " id="sidenav-main">
    <div class="sidenav-header">
      <i class="fas fa-times p-3 cursor-pointer text-secondary opacity-5 position-absolute end-0 top-0 d-none d-xl-none" aria-hidden="true" id="iconSidenav"></i>
      <a class="navbar-brand m-0" href="dashboard.php" target="_blank">
        <img src="../assets/img/logo.png" class="navbar-brand-img h-100" alt="main_logo">
        <span class="ms-2 text-lg font-weight-bold">PEDULI DIRI</span>
      </a>
    </div>
    <hr class="horizontal dark mt-0">
    <div class="collapse navbar-collapse w-auto" id="sidenav-collapse-main">
      <ul class="navbar-nav">
        <li class="nav-item">
          <a class="nav-link" href="dashboard.php">
            <div class="icon icon-shape icon-sm border-radius-md text-center me-2 d-flex align-items-center justify-content-center">
              <i class="fa fa-home text-primary text-lg opacity-10"></i>
            </div>
            <span class="nav-link-text ms-1">Dashboard</span>
          </a>
        </li>
        <li class="nav-item">
          <a class="nav-link " href="?url=tambah-catatan">
            <div class="icon icon-shape icon-sm border-radius-md text-center me-2 d-flex align-items-center justify-content-center">
              <i class="fa fa-book-medical text-warning text-lg opacity-10"></i>
            </div>
            <span class="nav-link-text ms-1">Tambah Catatan</span>
          </a>
        </li>
        <li class="nav-item">
          <a class="nav-link " onclick="return confirm('Upss, <?=$_SESSION['nama']?>? Anda yakin ingin Log-Out??')" href="proses/logout.php">
            <div class="icon icon-shape icon-sm border-radius-md text-center me-2 d-flex align-items-center justify-content-center">
              <i class="fa fa-sign-out text-secondary text-lg opacity-10"></i>
            </div>
            <span class="nav-link-text ms-1">Log Out</span>
          </a>
        </li>
      </ul>
    </div>
    <div class="sidenav-footer mx-3 ">
      <div class="card card-plain shadow-none" id="sidenavCard">
        <img class="w-100 mx-auto" src="../assets/img/dashboard.png" alt="sidebar_illustration">
      </div>
    </div>
  </aside>
  <?php
  if(!empty($_GET['url'])){
    switch($_GET['url']){

      case ("tambah-catatan");
      include ("tambah_catatan.php");
      break;

      case ("edit-catatan");
      include ("edit_catatan.php");
      break;

      default;
      echo "<script>
      alert('Upss, Halaman Tidak Ditemukan!!');
      window.location.assign('dashboard.php');
      </script>";
      break;
    }
  } else {
  ?>
  <main class="main-content position-relative bborder-radius-lg ">
    <!-- Navbar -->
    <nav class="navbar navbar-main navbar-expand-lg px-0 mx-4 shadow-none border-radius-xl " id="navbarBlur" data-scroll="false">
      <div class="container-fluid py-1 px-3">
        <nav aria-label="breadcrumb">
          <ol class="breadcrumb bg-transparent mb-0 pb-0 pt-1 px-0 me-sm-6 me-5">
            <li class="breadcrumb-item text-sm"><a class="opacity-5 text-white" href="javascript:;">Halaman</a></li>
            <li class="breadcrumb-item text-sm text-white active" aria-current="page">Peduli Diri</li>
          </ol>
          <h6 class="font-weight-bolder text-white mb-0">Dashboard</h6>
        </nav>
        <div class="collapse navbar-collapse mt-sm-0 mt-2 me-md-0 me-sm-4" id="navbar">
          <div class="ms-md-auto pe-md-3 d-flex align-items-center">
          </div>
          <ul class="navbar-nav  justify-content-end">
            <li class="nav-item d-flex align-items-center">
              <a href="javascript:;" class="nav-link text-white font-weight-bold px-0">
                <i class="fa fa-user me-sm-1"></i>
                <span class="d-sm-inline d-none"><?= $_SESSION['nama']?></span>
              </a>
            </li>
          </ul>
        </div>
      </div>
    </nav>
    <!-- End Navbar -->
    <div class="container-fluid py-4">
    <div class="card shadow-lg mx-4">
      <div class="card-body p-3">
        <div class="row gx-4">
          <div class="col-auto my-auto">
            <div class="h-100 text-center">
              <h4 class="mb-1">
                Selamat Datang Di Aplikasi Peduli Diri, <?= $_SESSION['nama']?>!!
              </h4>
            </div>
          </div>
        </div>
      </div>
    </div>
      <div class="row mt-4">
        <div class="col-lg-12 mb-lg-0 mb-4">
          <div class="card ">
            <div class="card-header pb-0 p-3">
              <div class="d-flex justify-content-between">
                <h5 class="mb-2 mx-0">Catatan Perjalanan Saya</h5>
              </div>
            </div>
            <div class="table-responsive mx-4 text-center">
              <table class="table align-items-center" id="tabel">
                <thead>
                  <tr>
                    <th>NO</th>
                    <th>TANGGAL</th>
                    <th>JAM</th>
                    <th>LOKASI</th>
                    <th>SUHU</th>
                    <th>PENGATURAN</th>
                  </tr>
                </thead>
                <tbody>
                <?php
                error_reporting(0);
                $data = file("proses/catatan.txt",FILE_IGNORE_NEW_LINES);
                $user = $_SESSION['nik']."|".$_SESSION['nama'];
                $no   = 1;
                foreach($data as $isi){
                  $pisah = explode("|",$isi);
                  $key   = $pisah['1']."|".$pisah['2'];
                  if($key==$user){
                ?>
                  <tr>
                    <td><?= $no++?></td>
                    <td><?= $pisah['3']?></td>
                    <td><?= $pisah['4']?></td>
                    <td><?= $pisah['5']?></td>
                    <td><?= $pisah['6']?> Celcius</td>
                    <td>
                      <a href="?url=edit-catatan&id=<?=$pisah['0']?>" class="btn btn-warning btn-sm"><i class="fa fa-pen"></i> Edit</a>
                      <a onclick="return confirm('Apakah anda yakin ingin menghapus data di <?= $pisah['5']?> pada tanggal <?=$pisah['3']?>??')" href="proses/hapus_catatan.php?id=<?=$pisah['0']?>" class="btn btn-danger btn-sm"><i class="fa fa-trash"></i> Hapus</a>
                    </td>
                  </tr>
                  <?php }} ?>
                </tbody>
              </table>
            </div>
          </div>
        </div>
      </div>
      <footer class="footer pt-3  ">
        <div class="container-fluid">
          <div class="row align-items-center justify-content-lg-between">
            <div class="col-lg-6 mb-lg-0 mb-4">
              <div class="copyright text-center text-sm text-muted text-lg-start">
                © <script>
                  document.write(new Date().getFullYear())
                </script>,
                Copyright  by
                <a href="https://www.instagram.com/lumirenz" class="font-weight-bold" target="_blank"><i class="fab fa-instagram"></i> Akhmad Ridlo</a>
                for Web Exam Purpose
              </div>
            </div>
            <div class="col-lg-6">
              <ul class="nav nav-footer justify-content-center justify-content-lg-end">
                <li class="nav-item">
                  <a href="https://www.facebook.com/lumilumi25" class="nav-link text-muted" target="_blank"><i class="fab fa-facebook"></i> My Facebook</a>
                </li>
                <li class="nav-item">
                  <a href="https://www.github.com/akhmdrdlo" class="nav-link text-muted" target="_blank"><i class="fab fa-github"></i> My Github</a>
                </li>
              </ul>
            </div>
          </div>
        </div>
      </footer>
    </div>
  </main>
  <?php }?>
  <!--   Core JS Files   -->
  <script src="../assets/js/core/popper.min.js"></script>
  <script src="../assets/js/core/bootstrap.min.js"></script>
  <script src="../assets/js/plugins/perfect-scrollbar.min.js"></script>
  <script src="../assets/js/plugins/smooth-scrollbar.min.js"></script>
  <script src="../assets/js/plugins/chartjs.min.js"></script>
  <script src="../assets/js/jquery.min.js"></script>
  <script src="../assets/js/jquery.dataTables.min.js"></script>
  <script>
    $(document).ready(function(){
      $("#tabel").DataTable();
    });
  </script>
  <!-- Control Center for Soft Dashboard: parallax effects, scripts for the example pages etc -->
  <script src="../assets/js/argon-dashboard.min.js?v=2.0.1"></script>
</body>

</html>