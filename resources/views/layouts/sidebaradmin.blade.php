<aside id="sidebar" class="sidebar">

    <ul class="sidebar-nav" id="sidebar-nav">

      <li class="nav-item">
        <a class="nav-link " href="dashboardadmin">
          <i class="bi bi-grid"></i>
          <span>Dashboard</span>
        </a>
      </li><!-- End Dashboard Nav -->

      <li class="nav-item">
        <a class="nav-link collapsed" href="pasien">
          <i class="bi bi-person"></i>
          <span>Pasien</span>
        </a>
      </li><!-- End Profile Page Nav -->

      <li class="nav-item">
        <a class="nav-link collapsed" href="konsultasipasien">
          <i class="bi bi-person"></i>
          <span>Konsultasi Pasien</span>
        </a>
      </li><!-- End Profile Page Nav -->

      <li class="nav-item">
        <a class="nav-link collapsed" href="dokter">
          <i class="bi bi-question-circle"></i>
          <span>Dokter</span>
        </a>
      </li><!-- End F.A.Q Page Nav -->

      <li class="nav-item">
        <a class="nav-link collapsed" href="dokterspesialis">
          <i class="bi bi-envelope"></i>
          <span>Spesialisasi</span>
        </a>
      </li><!-- End Contact Page Nav -->

      <li class="nav-item">
        <a class="nav-link collapsed" href="dosen">
          <i class="bi bi-card-list"></i>
          <span>Dosen</span>
        </a>
      </li><!-- End Register Page Nav -->

      <li class="nav-item">
        <a class="nav-link collapsed" href="akun">
          <i class="bi bi-box-arrow-in-right"></i>
          <span>Akun</span>
        </a>
      </li><!-- End Login Page Nav -->


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
<!-- End Blank Page Nav -->

    </ul>

  </aside><!-- End Sidebar-->