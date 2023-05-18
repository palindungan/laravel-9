{{--  <!-- need to remove -->
<li class="nav-item">
    <a href="{{ route('home') }}" class="nav-link {{ Request::is('home') ? 'active' : '' }}">
        <i class="nav-icon fas fa-home"></i>
        <p>Home</p>
    </a>
</li>

<li class="nav-item">
    <a href="{{ route('admins.index') }}" class="nav-link {{ Request::is('admins*') ? 'active' : '' }}">
        <i class="nav-icon fas fa-home"></i>
        <p>Pengantin</p>
    </a>
</li>  --}}

<li class="nav-item">
    <a href="{{ route('admins.index') }}" class="nav-link {{ Request::is('admins*') ? 'active' : '' }}">
        <i class="nav-icon fas fa-home"></i>
        <p>Pengantin</p>
    </a>
</li>
