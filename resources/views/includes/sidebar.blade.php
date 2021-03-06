<div class="main-sidebar">
  <aside id="sidebar-wrapper">
    <div class="sidebar-brand">
      <a href="index.html">Stisla</a>
    </div>
    <div class="sidebar-brand sidebar-brand-sm">
      <a href="index.html">St</a>
    </div>
    <ul class="sidebar-menu">
      <li class="menu-header">Dashboard</li>
      {{-- <li class="nav-item dropdown">
          <a href="#" class="nav-link has-dropdown"><i class="fas fa-fire"></i><span>Dashboard</span></a>
          <ul class="dropdown-menu">
            <li><a class="nav-link" href="index-0.html">General Dashboard</a></li>
            <li><a class="nav-link" href="index.html">Ecommerce Dashboard</a></li>
          </ul>
        </li> --}}

      <li><a class="nav-link" href="{{ route('dashboard.index') }}"><i class="fas fa-fire"></i>
          <span>Dashboard</span></a></li>
      @can('viewAny', App\Models\ActivityReport::class)
        <li><a class="nav-link" href="{{ route('dashboard.report.index') }}"><i class="fas fa-file"></i>
            <span>Laporan</span></a></li>
      @endcan
      @can('viewAny', App\Models\User::class)
        <li class="menu-header">Pengaturan</li>
        <li><a class="nav-link" href="{{ route('dashboard.report.index') }}"><i class="fas fa-users"></i>
            <span>User</span></a></li>
      @endcan

    </ul>
  </aside>
</div>
