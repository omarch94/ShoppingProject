<!-- Main Sidebar Container -->
<aside class="main-sidebar sidebar-dark-primary elevation-4" style="height:inherit">
    <!-- Brand Logo -->
    <a class="brand-link" href="{{ route('dashboard') }}">
        {{ \App\Models\Setting::where('setting_key', 'shop_name')->first()->setting_value }}
    </a>

    <!-- Sidebar -->
    <div class="sidebar">
      <!-- Sidebar user panel (optional) -->
      <div class="user-panel mt-3 pb-3 mb-3 d-flex">
        <div class="image">
          <img src="{{ asset('img/avatar5.png') }}" class="img-circle elevation-2" alt="Admin Image">
        </div>
        <div class="info">
          <a href="#" class="d-block">{{ auth()->user()->name }}</a>
        </div>
      </div>

      <!-- Sidebar Menu -->
      <nav class="mt-2">
        <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
          <!-- Add icons to the links using the .nav-icon class
               with font-awesome or any other icon font library -->
          <li class="nav-item menu-open">
            <a href="{{ route('dashboard') }}" class="nav-link @if(Request::is('dashboard/*')) active @endif">
              <i class="nav-icon fas fa-tachometer-alt"></i>
              <p>
                Dashboard
              </p>
            </a>
          </li>
          <li class="nav-item">
            <a href="#" class="nav-link">
              <i class="nav-icon fas fa-chart-pie"></i>
              <p>
                Charts
                <i class="right fas fa-angle-left"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="pages/charts/chartjs.html" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>ChartJS</p>
                </a>
              </li>
            </ul>
          </li>
          @if(Auth::user()->hasAccessTo('products'))
            <li class="nav-item">
              <a href="#" class="nav-link">
                <i class="nav-icon fas fa-user"></i>
                <p>
                  Products
                  <i class="fas fa-angle-left right"></i>
                </p>
              </a>
              <ul class="nav nav-treeview">
                @if(Auth::user()->hasAccessTo('view products'))
                  <li class="nav-item">
                    <a href="{{ route('products') }}" class="nav-link">
                      <i class="far fa-circle nav-icon"></i>
                      <p>View Products</p>
                    </a>
                  </li>
                @endif
                @if(Auth::user()->hasAccessTo('create products'))
                  <li class="nav-item">
                    <a href="{{ route('create-product') }}" class="nav-link">
                      <i class="far fa-circle nav-icon"></i>
                      <p>Add Product</p>
                    </a>
                  </li>
                @endif
                @if(Auth::user()->hasAccessTo('view product category'))
                  <li class="nav-item">
                    <a href="{{ route('categories') }}" class="nav-link">
                      <i class="far fa-circle nav-icon"></i>
                      <p>View Categories</p>
                    </a>
                  </li>
                @endif
                @if(Auth::user()->hasAccessTo('create product category'))
                  <li class="nav-item">
                    <a href="{{ route('create-category') }}" class="nav-link">
                      <i class="far fa-circle nav-icon"></i>
                      <p>Add Categories</p>
                    </a>
                  </li>
                @endif
              </ul>
            </li>
          @endif

{{-- ORDERS --}}
<li class="nav-item">
  <a href="#" class="nav-link">
      <i class="nav-icon fas fa-shopping-cart"></i>
      <p>
          Orders
          <i class="fas fa-angle-left right"></i>
      </p>
  </a>
  <ul class="nav nav-treeview">
      @if(Auth::user()->hasAccessTo('view_orders'))
          <li class="nav-item">
              {{-- <a href="{{ route('orders') }}" class="nav-link"> --}}
                  <i class="far fa-circle nav-icon"></i>
                  <p>View Orders</p>
              </a>
          </li>
      @endif
      @if(Auth::user()->hasAccessTo('update_orders'))
          <li class="nav-item">
              {{-- <a href="{{ route('update-orders') }}" class="nav-link"> --}}
                  <i class="far fa-circle nav-icon"></i>
                  <p>Update Orders</p>
              </a>
          </li>
      @endif
      @if(Auth::user()->hasAccessTo('manage_status'))
          <li class="nav-item">
              {{-- <a href="{{ route('manage-status') }}" class="nav-link"> --}}
                  <i class="far fa-circle nav-icon"></i>
                  <p>Manage Status</p>
              </a>
          </li>
      @endif
  </ul>
</li>



          @if(Auth::user()->hasAccessTo('users'))
            <li class="nav-item">
              <a href="#" class="nav-link">
                <i class="nav-icon fas fa-user"></i>
                <p>
                  Users
                  <i class="fas fa-angle-left right"></i>
                </p>
              </a>
              <ul class="nav nav-treeview">
                <li class="nav-item">
                  <a href="{{ route('users') }}" class="nav-link">
                    <i class="far fa-circle nav-icon"></i>
                    <p>View</p>
                  </a>
                </li>
                <li class="nav-item">
                  <a href="{{ route('create-user') }}" class="nav-link">
                    <i class="far fa-circle nav-icon"></i>
                    <p>Add User</p>
                  </a>
                </li>
              </ul>
            </li>
          @endif
          @if(Auth::user()->hasAccessTo('roles'))
            <li class="nav-item">
              <a href="#" class="nav-link">
                <i class="nav-icon fas fa-table"></i>
                <p>
                  Roles
                  <i class="fas fa-angle-left right"></i>
                </p>
              </a>
              <ul class="nav nav-treeview">
                <li class="nav-item">
                  <a href="{{ route('roles') }}" class="nav-link">
                    <i class="far fa-circle nav-icon"></i>
                    <p>View</p>
                  </a>
                </li>
              </ul>
            </li>
          @endif
          @if(Auth::user()->hasAccessTo('permissions'))
            <li class="nav-item">
              <a href="#" class="nav-link">
                <i class="nav-icon fas fa-table"></i>
                <p>
                  Permissions
                  <i class="fas fa-angle-left right"></i>
                </p>
              </a>
              <ul class="nav nav-treeview">
                @if(Auth::user()->hasAccessTo('view permissions'))
                  <li class="nav-item">
                    <a href="{{ route('permissions') }}" class="nav-link">
                      <i class="far fa-circle nav-icon"></i>
                      <p>View</p>
                    </a>
                  </li>
                @endif
              </ul>
            </li>
          @endif
          @if(Auth::user()->hasAccessTo('settings'))
            <li class="nav-item">
              <a href="#" class="nav-link">
                <i class="nav-icon fas fa-table"></i>
                <p>
                  Settings
                  <i class="fas fa-angle-left right"></i>
                </p>
              </a>
              <ul class="nav nav-treeview">
                @if(Auth::user()->hasAccessTo('view settings'))
                  <li class="nav-item">
                    <a href="{{ route('settings') }}" class="nav-link">
                      <i class="far fa-circle nav-icon"></i>
                      <p>View</p>
                    </a>
                  </li>
                @endif
              </ul>
            </li>
          @endif
          </li>
        </ul>
      </nav>
      <!-- /.sidebar-menu -->
    </div>
    <!-- /.sidebar -->
  </aside>