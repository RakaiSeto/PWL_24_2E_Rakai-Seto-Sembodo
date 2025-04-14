<nav class="main-header navbar navbar-expand navbar-white navbar-light">
  <!-- Left navbar links -->
  <ul class="navbar-nav">
    <li class="nav-item">
      <a class="nav-link" data-widget="pushmenu" href="#" role="button"><i class="fas fa-bars"></i></a>
    </li>
    <li class="nav-item d-none d-sm-inline-block">
      <a href="../../index3.html" class="nav-link">Home</a>
    </li>
    <li class="nav-item d-none d-sm-inline-block">
      <a href="#" class="nav-link">Contact</a>
    </li>
  </ul>

  <!-- Right navbar links -->
  <ul class="navbar-nav ml-auto">
    <!-- Profile Dropdown Menu -->
    <li class="nav-item dropdown">
      <a class="nav-link" data-toggle="dropdown" href="#">
        <i class="far fa-user"></i>
      </a>
      <div class="dropdown-menu dropdown-menu-lg dropdown-menu-right">
        <button disabled class="dropdown-item">
          <!-- Message Start -->
          <div class="media align-items-center">
            <img src="{{ session('user_foto') ? asset(urldecode(session('user_foto'))) : asset('default-user.jpg') }}"
              alt="User Avatar" class="img-size-50 mr-3 img-circle">
            <div class="media-body h-100">
              <h3 class="dropdown-item-title text-center">
                {{ Auth::user()->name }}
              </h3>
            </div>
          </div>
          <!-- Message End -->
        </button>
        <div class="dropdown-divider"></div>
        <a href="{{ url('/change-photo') }}" class="dropdown-item">
          <div class="d-flex">
            <i class="nav-icon fas fa-user mr-3"></i>
            <h3 class="dropdown-item-title">
              Change Profile Photo
            </h3>
          </div>
        </a>
        <div class="dropdown-divider"></div>
        <a href="{{ url('/logout') }}" class="dropdown-item">
          <div class="d-flex">
            <i class="nav-icon fas fa-sign-out-alt mr-3"></i>
            <h3 class="dropdown-item-title">
              Logout
            </h3>
          </div>
        </a>
      </div>
    </li>
  </ul>
</nav>
