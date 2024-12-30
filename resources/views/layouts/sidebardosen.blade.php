{{-- sidebar --}}
<aside id="sidebar" class="sidebar">

    <ul class="sidebar-nav" id="sidebar-nav">

      <li class="nav-item">
        <a class="nav-link " href="dashboarddosen">
          <i class="bi bi-grid"></i>
          <span>Dashboard</span>
        </a>
      </li><!-- End Dashboard Nav -->

      <li class="nav-item">
        <a class="nav-link collapsed" href="mahasiswa">
          <i class="bi bi-hospital"></i>
          <span>Dokter</span>
        </a>
      </li><!-- End Profile Page Nav -->

      <li class="nav-item">
        <a class="nav-link collapsed" href="spesialis">
          <i class="bi bi-clipboard2-pulse"></i>
          <span>Spesialis</span>
        </a>
      </li><!-- End Profile Page Nav -->

      <li class="nav-item">
        <a class="nav-link collapsed" href="penjadwalan">
          <i class="bi bi-calendar-check"></i>
          <span>Penjadwalan</span>
        </a>
      </li><!-- End F.A.Q Page Nav -->
      <li class="nav-item">
        <a class="nav-link collapsed" href="logkonsultasi">
          <i class="bi bi-journal-text"></i>
          <span>Log Konsultasi</span>
        </a>
      </li><!-- End F.A.Q Page Nav -->

      <li class="nav-item">
  <a class="dropdown-item nav-link" href="{{ route('logout') }}" 
     onclick="event.preventDefault();
     document.getElementById('logout-form').submit();">
    <i class="bi bi-box-arrow-left"></i> Logout
  </a>

  <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
      @csrf
  </form>
</li>
<!-- End Contact Page Nav -->

    
  </aside><!-- End Sidebar-->


<a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>

  <!-- Vendor JS Files -->
  <script src="assets/auth/vendor/apexcharts/apexcharts.min.js"></script>
  <script src="assets/auth/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="assets/auth/vendor/chart.js/chart.umd.js"></script>
  <script src="assets/auth/vendor/echarts/echarts.min.js"></script>
  <script src="assets/auth/vendor/quill/quill.js"></script>
  <script src="assets/auth/vendor/simple-datatables/simple-datatables.js"></script>
  <script src="assets/auth/vendor/tinymce/tinymce.min.js"></script>
  <script src="assets/auth/vendor/php-email-form/validate.js"></script>

  <!-- Template Main JS File -->
  <script src="assets/auth/js/main.js"></script>

</body>

</html>
