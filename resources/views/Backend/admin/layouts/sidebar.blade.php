<aside class="main-sidebar sidebar-dark-primary elevation-4">
    <!-- Brand Logo -->
    <a href="{{url("/")}}" class="brand-link">
      <img src="/dist/img/AdminLTELogo.png" alt="AdminLTE Logo" class="brand-image img-circle elevation-3" style="opacity: .8">
      <span class="brand-text font-weighat-light">Book Store</span>
    </a>

    <!-- Sidebar -->
    <div class="sidebar">
      <!-- Sidebar user panel (optional) -->
      <div class="user-panel mt-3 pb-3 mb-3 d-flex">
        <div class="image">
          <img src="/dist/img/user2-160x160.jpg" class="img-circle elevation-2" alt="User Image">
        </div>

        <div class="info">
        <a href="{{route('user.profile')}}" class="d-block">{{Auth::user()->name}}</a>
        </div>

      </div>


      <!-- Sidebar Menu -->
      <nav class="mt-2">
        <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
          <!-- Add icons to the links using the .nav-icon class
               with font-awesome or any other icon font library -->
          <li class="nav-item menu-open">
            <a href="#" class="nav-link active">
              <i class="nav-icon fas fa-tachometer-alt"></i>
              <p>
                Manage Pages
                <i class="right fas fa-angle-left"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
            <?php 
                $path = $_SERVER['REQUEST_URI'];
            ?>
              <li class="nav-item">
                <a href="{{url("admin/dashboard/post")}}" class="nav-link {{ Request::is('admin/dashboard/post') ? 'active' : '' }}">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Book Page</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="{{url("admin/dashboard/category")}}" class="nav-link {{ Request::is('admin/dashboard/category') ? 'active' : '' }}">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Category Page</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="{{url("admin/dashboard/user")}}" class="nav-link {{ Request::is('admin/dashboard/user') ? 'active' : '' }}">
                  <i class="far fa-circle nav-icon"></i>
                  <p>User Page</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="{{url("admin/dashboard/author")}}" class="nav-link {{ Request::is('admin/dashboard/author') ? 'active' : '' }}">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Author Page</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="{{url("admin/dashboard/comment")}}" class="nav-link {{ Request::is('admin/dashboard/comment') ? 'active' : '' }}">
                  <i class="far fa-circle nav-icon"></i>
                  <p>comment Page</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="{{url("admin/dashboard/contact")}}" class="nav-link {{ Request::is('admin/dashboard/contact') ? 'active' : '' }}">
                  <i class="far fa-circle nav-icon"></i>
                  <p>contact Page</p>
                </a>
              </li>
            </ul>
          </li>


            <li class="nav-item">
              <a href="#" class="nav-link" onclick="event.preventDefault(); if(confirm('Are You Sure?')){document.getElementById('logout').submit();}">
                <i class="nav-icon fas fa-power-off"></i>
                <p>
                  Logout
                </p>
              </a>
            </li>
            <form action="{{url('/logout')}}" id="logout" method="post">@csrf</form>



        </ul>
      </nav>
      <!-- /.sidebar-menu -->
    </div>
    <!-- /.sidebar -->
  </aside>