<nav class="mt-2">
    <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
        <li class="nav-item menu-open">
            <a href="#" class="nav-link active">
              <i class="nav-icon fas fa-tachometer-alt"></i>
              <p>
                Dashboard
                <i class="right fas fa-angle-left"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="{{ route('dashboard') }}" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Dashboard</p>
                </a>
              </li>
            </ul>
          </li>
          <li class="nav-item">
            <a href="" class="nav-link">
              <i class="nav-icon fas fa-th"></i>
              <p>
                Penjualan
              </p>
            </a>
          </li>
          <li class="nav-item">
            <a href="" class="nav-link">
              <i class="nav-icon nav-icon fas fa-book"></i>
              <p>
                Laporan
              </p>
            </a>
          </li>
          <div class="user-panel mt-2 pb-3 mb-2 d-flex"></div>
          <li class="nav-item">
            <a href="{{ route('profile.edit') }}" class="nav-link">
              <i class="nav-icon nav-icon fas fa-male"></i>
              <p>
               Profile
              </p>
            </a>
          </li>
          <li class="nav-item">
            <form method="POST" action="{{ route('logout') }}">
                @csrf
            <a href="route('logout')" onclick="event.preventDefault(); this.closest('form').submit();"class="nav-link">
              <i class="nav-icon nav-icon fas fa-sign-out-alt"></i>
              <p>
               Log Out
              </p>
            </a>
        </form>
          </li>
        </ul>
</nav>
