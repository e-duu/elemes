<!-- Sidebar -->
  <ul class="navbar-nav bg-gradient-primary sidebar sidebar-dark accordion" id="accordionSidebar">
      <!-- Sidebar - Brand -->
      <a class="sidebar-brand d-flex align-items-center justify-content-center" href="{{ url('/') }}" style="background-color: #fff;
            border-radius: 0px 0px 80px 0px;
            box-shadow: 2px -4px 5px #aaa;
            min-width: 270px;">
            <div class="sidebar-brand-icon">
                <img src="/images/el.svg" alt="logo pertagas" style="filter: drop-shadow(1px 1px rgba(255,255,255,0.5));transform:translateX(-25px)" width="150">
            </div>
        </a>
      <!-- Divider -->
      <hr class="sidebar-divider my-0">
      {{-- @if (Auth::user->role = 'admin') --}}
        <!-- Nav Item - Dashboard -->
         <li class="nav-item {{ (request()->is('dashboard')) ? 'active' : ''}}">
            <a class="nav-link" href="{{ url('dashboard') }}">
                <i class="fas fa-fw fa-tachometer-alt"></i>
                <span>Dashboard</span>
            </a>
        </li>
        <!-- Divider -->
        <hr class="sidebar-divider">
        {{-- Sidebar Admin --}}
        <!-- Heading -->
        <div class="sidebar-heading">
            Data Master
        </div>
        <!-- Nav Item - Pages Collapse Menu -->
        <li class="nav-item {{ (request()->is('courses/all')) ? 'active' : ''}}">
            <a class="nav-link" href="{{ route('course.index') }}">
                <i class="fas fa-money-check" style="font-size: 12px;"></i>
                <span>Courses</span>
            </a>
        </li>
        <li class="nav-item {{ (request()->is('classes/all')) ? 'active' : ''}}">
            <a class="nav-link" href="{{ route('class.index') }}">
                <i class="fas fa-money-check" style="font-size: 12px;"></i>
                <span>Classes</span>
            </a>
        </li>
        <li class="nav-item {{ (request()->is('categories/all')) ? 'active' : ''}}">
            <a class="nav-link" href="{{ route('category.index') }}">
                <i class="fas fa-money-check" style="font-size: 12px;"></i>
                <span>Categories</span>
            </a>
        </li>
        <li class="nav-item {{ (request()->is('transactions/all')) ? 'active' : ''}}">
            <a class="nav-link" href="{{ route('transaction.index') }}">
                <i class="fas fa-money-check" style="font-size: 12px;"></i>
                <span>Transactions</span>
            </a>
        </li>
        <li class="nav-item {{ (request()->is('quizzes/all')) ? 'active' : ''}}">
            <a class="nav-link" href="{{ route('quiz.index') }}">
                <i class="fas fa-money-check" style="font-size: 12px;"></i>
                <span>Quizzes</span>
            </a>
        </li>
        <li class="nav-item {{ (request()->is('users/all')) ? 'active' : ''}}">
            <a class="nav-link" href="{{ route('user.index') }}">
                <i class="fas fa-money-check" style="font-size: 12px;"></i>
                <span>Users</span>
            </a>
        </li>
        <li class="nav-item {{ (request()->is('settings/all')) ? 'active' : ''}}">
            <a class="nav-link" href="{{ route('setting.index') }}">
                <i class="fas fa-fw fa-cog" style="font-size: 15px;"></i>
                <span>Settings</span>
            </a>
        </li>
        <li class="nav-item">
            <a class="nav-link" href="#">
                <i class="fas fa-times-circle"></i>
                <span>Log Out</span>
            </a>
        </li>
    {{-- End of Sidebar Admin --}}
    {{-- Sidebar User --}}
        <!-- Nav Item - Charts -->
        {{-- <!-- Heading -->
        <div class="sidebar-heading">
            Interface
        </div> --}}
        {{-- <li class="nav-item">
            <a class="nav-link" href="{{ url('dashboard-user') }}">
                <i class="fas fa-fw fa-chart-area"></i>
                <span>Progress Learning</span>
            </a>
        </li>
        <!-- Nav Item - Tables -->
        <li class="nav-item">
            <a class="nav-link" href="{{ url('my-class') }}">
                <i class="fas fa-fw fa-table"></i>
                <span>My Class</span>
            </a>
        </li>
        <li class="nav-item">
            <a class="nav-link" href="{{ url('transaction') }}">
                <i class="fas fa-money-check" style="font-size: 12px;"></i>
                <span>Transactions</span>
            </a>
        </li>
        <li class="nav-item">
            <a class="nav-link" href="{{ url('setting') }}">
                <i class="fas fa-fw fa-cog" style="font-size: 15px;"></i>
                <span>Settings</span>
            </a>
        </li>
        <li class="nav-item">
            <a class="nav-link" href="{{ url('') }}">
                <i class="fas fa-times-circle"></i>
                <span>Log Out</span>
            </a>
        </li> --}}
        <!-- Divider -->
        <hr class="sidebar-divider d-none d-md-block">
        <!-- Sidebar Toggler (Sidebar) -->
        <div class="text-center d-none d-md-inline">
            <button class="rounded-circle border-0" id="sidebarToggle"></button>
        </div>
        <!-- Sidebar Message -->
    </ul>
<!-- End of Sidebar -->