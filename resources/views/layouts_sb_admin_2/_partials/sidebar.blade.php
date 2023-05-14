 <!-- Sidebar -->
 <ul class="navbar-nav bg-gradient-primary sidebar sidebar-dark accordion" id="accordionSidebar">

    <!-- Sidebar - Brand -->
    <a class="sidebar-brand d-flex align-items-center justify-content-center" href="">
        {{-- <div class="sidebar-brand-icon rotate-n-15">
            <i class="fas fa-laugh-wink"></i>
        </div> --}}
        <div class="sidebar-brand-text mx-3">Admin</div>
    </a>

    <!-- Divider -->
    <hr class="sidebar-divider my-0">

    <!-- Nav Item - Admin / Mempelai -->
    <li class="nav-item {{ Request::is('backend/admins*') ? 'active' : '' }}">
        <a class="nav-link" href="{{ route('admins.index') }}">
            <i class="fas fa-fw fa-user"></i>
            <span>Admin / Mempelai</span>
        </a>
    </li>

    <!-- Nav Item - Pengaturan -->
    <li class="nav-item {{ Request::is('backend/settings*') ? 'active' : '' }}">
        <a class="nav-link" href="{{ route('settings.index') }}">
            <i class="fas fa-fw fa-cog"></i>
            <span>Pengaturan</span>
        </a>
    </li>

    <!-- Nav Item - Ucapan -->
    <li class="nav-item {{ Request::is('backend/greetings*') ? 'active' : '' }}">
        <a class="nav-link" href="{{ route('greetings.index') }}">
            <i class="fas fa-fw fa-cog"></i>
            <span>Ucapan</span>
        </a>
    </li>

    <!-- Nav Item - Pernikahan -->
    <li class="nav-item {{ Request::is('backend/weddings*') ? 'active' : '' }}">
        <a class="nav-link" href="{{ route('weddings.index') }}">
            <i class="fas fa-fw fa-cog"></i>
            <span>Pernikahan</span>
        </a>
    </li>

    <!-- Nav Item - Acara -->
    <li class="nav-item {{ Request::is('backend/events*') ? 'active' : '' }}">
        <a class="nav-link" href="{{ route('events.index') }}">
            <i class="fas fa-fw fa-cog"></i>
            <span>Acara</span>
        </a>
    </li>

    <!-- Nav Item - Galeri Foto -->
    <li class="nav-item {{ Request::is('backend/photoGalleries*') ? 'active' : '' }}">
        <a class="nav-link" href="{{ route('photoGalleries.index') }}">
            <i class="fas fa-fw fa-cog"></i>
            <span>Galeri Foto</span>
        </a>
    </li>

    <!-- Nav Item - Tamu Undangan -->
    <li class="nav-item {{ Request::is('backend/guests*') ? 'active' : '' }}">
        <a class="nav-link" href="{{ route('guests.index') }}">
            <i class="fas fa-fw fa-cog"></i>
            <span>Tamu Undangan</span>
        </a>
    </li>

    <!-- Divider -->
    <hr class="sidebar-divider d-none d-md-block">

    <!-- Sidebar Toggler (Sidebar) -->
    <div class="text-center d-none d-md-inline">
        <button class="rounded-circle border-0" id="sidebarToggle"></button>
    </div>

</ul>
<!-- End of Sidebar -->