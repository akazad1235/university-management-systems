<nav class="navbar navbar-light navbar-vertical navbar-expand-xl" style="display: none;">
    <script>
      var navbarStyle = localStorage.getItem("navbarStyle");
      if (navbarStyle && navbarStyle !== 'transparent') {
        document.querySelector('.navbar-vertical').classList.add(`navbar-${navbarStyle}`);
      }
    </script>
    <div class="d-flex align-items-center">
      <div class="toggle-icon-wrapper">
        <button class="btn navbar-toggler-humburger-icon navbar-vertical-toggle" data-bs-toggle="tooltip" data-bs-placement="left" title="Toggle Navigation"><span class="navbar-toggle-icon"><span class="toggle-line"></span></span></button>
      </div><a class="navbar-brand" href="../index.html">
        <div class="d-flex align-items-center py-3"><img class="me-2" src="{{ asset('assets/img/icons/spot-illustrations/falcon.png') }}" alt="" width="40" /><span class="font-sans-serif">falcon</span></div>
      </a>
    </div>
    <div class="collapse navbar-collapse" id="navbarVerticalCollapse">
      <div class="navbar-vertical-content scrollbar">
        <ul class="navbar-nav flex-column mb-3" id="navbarVerticalNav">
        @hasrole('teest usper admin|super-admin')
          <li class="nav-item">
            <!-- parent pages--><a class="nav-link dropdown-indicator" href="#dashboard" role="button" data-bs-toggle="collapse" aria-expanded="true" aria-controls="dashboard">
              <div class="d-flex align-items-center"><span class="nav-link-icon"><span class="fas fa-chart-pie"></span></span><span class="nav-link-text ps-1">Role Management</span></div>
            </a>
            <ul class="nav collapse show" id="dashboard">
              <li class="nav-item"><a class="nav-link" href="{{ route('permission.role') }}">
                  <div class="d-flex align-items-center"><span class="nav-link-text ps-1">Role</span></div>
                </a><!-- more inner pages-->
              </li>
              <li class="nav-item"><a class="nav-link" href="{{ route('permission.index') }}">
                <div class="d-flex align-items-center"><span class="nav-link-text ps-1">Permission</span></div>
              </a><!-- more inner pages-->
            </li>
            </ul>
          </li>
          <li class="nav-item">
            <!-- parent pages--><a class="nav-link dropdown-indicator" href="#user" role="button" data-bs-toggle="collapse" aria-expanded="true" aria-controls="dashboard">
              <div class="d-flex align-items-center"><span class="nav-link-icon"><i class="fas fa-user"></i></span><span class="nav-link-text ps-1">User Management</span></div>
            </a>
            <ul class="nav collapse show" id="user">
              <li class="nav-item"><a class="nav-link" href="{{ route('user.index') }}">
                  <div class="d-flex align-items-center"><span class="nav-link-text ps-1">User</span></div>
                </a><!-- more inner pages-->
              </li>
            </ul>
          </li>
          @endhasrole
          <li class="nav-item">
            <!-- label-->
            <div class="row navbar-vertical-label-wrapper mt-3 mb-2">
              <div class="col-auto navbar-vertical-label">App</div>
              <div class="col ps-0">
                <hr class="mb-0 navbar-vertical-divider" />
              </div>
            </div><!-- parent pages-->
          </li>
        </ul>
      </div>
    </div>
  </nav>
