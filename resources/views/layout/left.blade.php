<!-- Main Sidebar Container -->
<aside class="main-sidebar sidebar-dark-lightblue elevation-4">
    
    <!-- Brand Logo -->
    <a href="/dashboard" class="brand-link">
        <span class="brand-text font-weight-light">Perpustakaan</span>
    </a>

    <!-- Sidebar -->
    <div class="sidebar">
        <!-- Sidebar user panel (optional) -->
        <div class="user-panel mt-3 pb-1 mb-3 d-flex">
            <div class="image mt-1">
                <img src="{{ asset('dist/img/default.png')}}" class="img-circle elevation-2" alt="User Image">    
            </div>
            <div class="info">
            @if (auth()->user()->staff_id)
                <a href="#">{{ auth()->user()->name }}</a>
                <p class="text-muted text-capitalize">{{ auth()->user()->role }}</p>
            @endif
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
        <nav class="mt-2 pb-3">
            <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="true">
                <li class="nav-item">
                    <a href="/dashboard" class="nav-link {{ Request::is('dashboard*') ? 'active' : '' }}">
                        <i class="nav-icon fas fa-tachometer-alt"></i>
                        <p>Dashboard</p>
                    </a>
                </li>
                {{-- Tabel --}}
                <li class="nav-item">
                    <a href="#" class="nav-link {{ Request::is('table*') ? 'active' : '' }}">
                        <i class="nav-icon fas fa-table"></i>
                        <p>
                            Tabel
                            <i class="fas fa-angle-left right"></i>
                        </p>
                    </a>
                    <ul class="nav nav-treeview">
                        <li class="nav-item">
                            <a href="/table/schools" class="nav-link {{ Request::is('table/schools*') ? 'active' : '' }}">
                                <i class="far fa-circle nav-icon"></i>
                                <p>Sekolah</p>
                            </a>
                        </li>  
                    </ul>
                </li>
            </ul>
        </nav>

      <!-- /.sidebar-menu -->
    </div>
    <!-- /.sidebar -->
  </aside>