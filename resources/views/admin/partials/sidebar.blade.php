<!-- Sidebar -->
<ul class="navbar-nav bg-gradient-primary sidebar sidebar-dark accordion" id="accordionSidebar">

    <!-- Sidebar - Brand -->
    <a class="sidebar-brand d-flex align-items-center justify-content-center" href="{{url("/dashboard")}}">
        <div class="sidebar-brand-text mx-3">Portfolio <sup>v1.0</sup></div>
    </a>

    <!-- Divider -->
    <hr class="sidebar-divider my-0">

    <!-- Nav Item - Dashboard -->
    <li class="nav-item @if(Request::segment(2) =="") active @endif">
        <a class="nav-link" href="{{url("/dashboard")}}">
            <i class="fas fa-fw fa-home"></i>
            <span>Əsas </span>
			</a>
    </li>
    <hr class="sidebar-divider">
    <div class="sidebar-heading">
        Səhifələr
    </div>
    <li class="nav-item @if(Request::segment(2) =="mail") active @endif">
        <a class="nav-link collapsed" href="{{url("/admin/mail")}}">
            <i class="fas fa-fw fa-mail-bulk"></i>
            <span>Mail</span>
        </a>
    </li>
    <li class="nav-item @if(Request::segment(2) =="settings") active @endif">
        <a class="nav-link collapsed" href="{{url("/admin/settings")}}">
            <i class="fas fa-fw fa-cog"></i>
            <span>Parametrlər</span>
        </a>
    </li>
    <li class="nav-item @if(Request::segment(2) =="contact") active @endif">
        <a class="nav-link collapsed" href="{{url("/admin/contact")}}">
            <i class="fas fa-fw fa-file-contract"></i>
            <span>Kontakt ({{count($contacts)}})</span>
        </a>
    </li>
    <hr class="sidebar-divider d-none d-md-block">

    <!-- Sidebar Toggler (Sidebar) -->
    <div class="text-center d-none d-md-inline">
        <button class="rounded-circle border-0" id="sidebarToggle"></button>
    </div>


</ul>
<!-- End of Sidebar -->
