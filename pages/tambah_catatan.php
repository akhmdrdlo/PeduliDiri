<main class="main-content position-relative border-radius-lg ">
  <!-- Navbar -->
  <nav class="navbar navbar-main navbar-expand-lg px-0 mx-4 shadow-none border-radius-xl " id="navbarBlur" data-scroll="false">
    <div class="container-fluid py-1 px-3">
      <nav aria-label="breadcrumb">
        <ol class="breadcrumb bg-transparent mb-0 pb-0 pt-1 px-0 me-sm-6 me-5">
          <li class="breadcrumb-item text-sm"><a class="opacity-5 text-white" href="javascript:;">Halaman</a></li>
          <li class="breadcrumb-item text-sm text-white active" aria-current="page">Peduli Diri</li>
        </ol>
        <h6 class="font-weight-bolder text-white mb-0">Tambah Catatan Perjalanan</h6>
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
      <div class="row">
        <div class="col-md-12">
          <div class="card">
            <div class="card-header pb-0">
              <div class="d-flex align-items-center">
                <h5 class="mb-0">Tambah Data Perjalanan</h5>
              </div>
            </div>
            <div class="card-body">
              <form action="proses/simpan_catatan.php" method="post">
              <div class="row">
                <div class="col-md-6">
                  <div class="form-group">
                    <label for="example-text-input" class="form-control-label">Tanggal melakukan Check-In</label>
                    <input class="form-control" required autocomplete="off" type="date" name="tanggal">
                  </div>
                </div>
                <div class="col-md-6">
                  <div class="form-group">
                    <label for="example-text-input" class="form-control-label">Jam berapa melakukan Check-In</label>
                    <input class="form-control" required autocomplete="off" type="time" name="jam">
                  </div>
                </div>
              </div>

              <div class="row">
                <div class="col-md-12">
                  <div class="form-group">
                    <label for="example-text-input" class="form-control-label">Lokasi Check-In</label>
                    <input class="form-control" required autocomplete="off" type="text" name="lokasi" placeholder="Aku di .... lalu Check In">
                  </div>
                </div>
                <div class="col-md-12">
                  <div class="form-group">
                    <label for="example-text-input" class="form-control-label">Suhu Badan yang tertera pada saat Check-In</label>
                    <input class="form-control" required autocomplete="off" type="text" name="suhu" placeholder="Suhu ku saat itu berapa ya...">
                  </div>
                </div>
                <div class="col-md-12">
                  <div class="form-group">
                    <button class="form-control btn btn-md btn-success" type="submit"><i class="fa fa-plus"></i> | TAMBAH DATA </button>
                  </div>
                </div>
              </div>
              </form>
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
  </div>
</main>
  <!--   Core JS Files   -->
  <script src="../assets/js/core/popper.min.js"></script>
  <script src="../assets/js/core/bootstrap.min.js"></script>
  <script src="../assets/js/plugins/perfect-scrollbar.min.js"></script>
  <script src="../assets/js/plugins/smooth-scrollbar.min.js"></script>
  <script>
    var win = navigator.platform.indexOf('Win') > -1;
    if (win && document.querySelector('#sidenav-scrollbar')) {
      var options = {
        damping: '0.5'
      }
      Scrollbar.init(document.querySelector('#sidenav-scrollbar'), options);
    }
  </script>
  <!-- Github buttons -->
  <script async defer src="https://buttons.github.io/buttons.js"></script>
  <!-- Control Center for Soft Dashboard: parallax effects, scripts for the example pages etc -->
  <script src="../assets/js/argon-dashboard.min.js?v=2.0.1"></script>
</body>

</html>