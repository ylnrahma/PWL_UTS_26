<!-- Main Sidebar Container -->
<aside class="main-sidebar sidebar-dark-primary elevation-4">
    <!-- Brand Logo -->
    <a href="dashboard" class="brand-link">
      <span class="brand-text font-weight-light"><b>Pemrograman Web Lanjut</b></span>
    </a> 

    <!-- Sidebar -->
    <div class="sidebar">
      <!-- Sidebar user panel (optional) -->
      <div class="user-panel mt-3 pb-3 mb-3 d-flex">
        <div class="info">
          <a href="#" class="d-block">Praktikum 2</a>
        </div>
      </div>

      <!-- SidebarSearch Form -->
      <div class="form-inline">
        <div class="input-group" data-widget="sidebar-search">
          <input class="form-control form-control-sidebar" type="search" placeholder="Search" aria-label="Search">
          <div class="input-group-append">
            <button class="btn btn-sidebar">
              <i class="fas fa-search fa-fw"></i>
            </button>
          </div>
        </div>
      </div>

      <!-- Sidebar Menu -->
      <nav class="mt-2">
        <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
          <!-- Add icons to the links using the .nav-icon class
               with font-awesome or any other icon font library -->
        

          
          <li class="nav-item">
              <a href="{{url('/dashboard')}}" class="nav-link">
                <i class="nav-icon fas fa-tachometer-alt"></i>
                <p>
                    Dashboard
                </p>
            </a>
          </li>
            <li class="nav-item">
                <a href="{{url('/profile')}}" class="nav-link">
                    <i class="nav-icon fas fa-th"></i>
                    
                    <p>
                        Profil
                    </p>
                </a>
            </li>
            <li class="nav-item">
            <a href="{{url('/kuliah')}}" class="nav-link">
              <i class="nav-icon fas fa-th"></i>
              <p>
                Pengalaman Kuliah
              </p>
            </a>
          </li>
          </li>
          <li class="nav-item">
            <a href="{{url('/wishlist')}}" class="nav-link">
              <i class="nav-icon fas fa-th"></i>
              <p>
                Wishlist
              </p>
             </a>
        </ul>
      </nav>
      <!-- /.sidebar-menu -->
    </div>
    <!-- /.sidebar -->
  </aside>