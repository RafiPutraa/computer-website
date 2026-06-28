<nav class="navbar col-lg-12 col-12 p-0 fixed-top d-flex flex-row">
  <div class="text-center navbar-brand-wrapper d-flex align-items-center justify-content-start" style="padding-left: 25px;">
    <a class="navbar-brand brand-logo" href="{{ url('admin/dashboard') }}" style="text-decoration: none; letter-spacing: 0.8px;">
        <span style="font-weight: 700; color: #2c3e50; font-size: 21px;">E-Computer</span><span style="font-weight: 400; color: #d8a069; font-size: 21px; margin-left: 5px;">Shop</span>
    </a>
    <a class="navbar-brand brand-logo-mini" href="{{ url('admin/dashboard') }}" style="text-decoration: none; padding-left: 10px;">
        <span style="font-weight: 700; color: #2c3e50; font-size: 25px;">E</span><span style="font-weight: 400; color: #d8a069; font-size: 25px;">S</span>
    </a>
  </div>
  <div class="navbar-menu-wrapper d-flex align-items-center justify-content-end">
    <button class="navbar-toggler navbar-toggler align-self-center" type="button" data-toggle="minimize">
      <span class="icon-menu"></span>
    </button>
    <ul class="navbar-nav navbar-nav-right">
      <li class="nav-item nav-profile dropdown">
        <a class="nav-link dropdown-toggle" href="#" data-toggle="dropdown" id="profileDropdown">
          <img src="{{ asset('/storage/images/profile-images/admin/'.Auth::guard('admin')->user()->image) }}" alt="profile"/>
        </a>
        <div class="dropdown-menu dropdown-menu-right navbar-dropdown" aria-labelledby="profileDropdown">
          <a href="{{ url('admin/logout') }}" class="dropdown-item">
            <i class="ti-power-off text-primary"></i>
            Logout
          </a>
        </div>
      </li>
    </ul>
    <button class="navbar-toggler navbar-toggler-right d-lg-none align-self-center" type="button" data-toggle="offcanvas">
      <span class="icon-menu"></span>
    </button>
  </div>
</nav>