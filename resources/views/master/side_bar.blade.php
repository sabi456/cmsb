 <!-- Sidebar -->
 <ul class="navbar-nav bg-gradient-primary sidebar sidebar-dark accordion" id="accordionSidebar">

    <!-- Sidebar - Brand -->
    <a class="sidebar-brand d-flex align-items-center justify-content-center" href="index.html">
        @if(auth()->check())
        
        <div class="sidebar-brand-text mx-3">Welcome  {{ auth()->user()->name }}</div>
    </a>@endif

    <!-- Divider -->
    <hr class="sidebar-divider my-0">

    <!-- Nav Item - Dashboard -->
    <div>
    <li class="nav-item @yield('active_d')">
        <a class="nav-link" href="{{route('admin')}}">
            <i class="fas fa-fw fa-tachometer-alt"></i>
            <span style="font-size:20px;">Dashboard</span></a>
    </li>

    <!-- Divider -->
    <hr class="sidebar-divider">

    <!-- Heading -->
    <div class="sidebar-heading" style="font-size:20px;">
        Interface
    </div>
    
    @if(auth()->check())
    @if(auth()->user()->status == 'High')
    <li class="nav-item @yield('active_ad')" >
        <a class="nav-link " href="{{route ('show_admin')}}">
            <i class="fas fa-user fa-2x"></i>
            &nbsp;
            <span style="font-size:20px;">Admins</span>
        </a>
    </li>
    @endif
    @endif

    @if(auth()->check())
    <li class="nav-item @yield('active_un')" >
        <a class="nav-link " href="{{route ('unconfirmed')}}">
            <i class="fas fa-users fa-2x"></i>
            &nbsp;
            <span style="font-size:20px;">Non confirmés</span>
        </a>
    </li>
    @endif

    @if(auth()->check())
    <li class="nav-item @yield('active_con')" >
        <a class="nav-link " href="{{route ('confirmed')}}">
            <i class="fas fa-users fa-2x"></i>
            &nbsp;
            <span style="font-size:20px;">confirmés</span>
        </a>
    </li>
    @endif
    
    @if(auth()->check())
    @if(auth()->user()->status == 'High')
    <li class="nav-item @yield('active_del')" >
        <a class="nav-link " href="{{route ('show_admin')}}">
            <i class="fas fa-trash fa-2x"></i>
            &nbsp;
            <span style="font-size:20px;">Supprimés</span>
        </a>
    </li>
    @endif
    @endif
    @if(auth()->check())
    <li class="nav-item @yield('active_del')" >
        <a class="nav-link " href="">
            <i class="fas fa-upload fa-2x"></i>
            &nbsp;
            <span style="font-size:20px;">Poster</span>
        </a>
    </li>
    @endif

</ul>
<!-- End of Sidebar -->