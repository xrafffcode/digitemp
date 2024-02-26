<nav class="sidebar">
    <div class="sidebar-header">

        <img src="{{ asset('frontend/assets/images/logo-scp.png') }}" class="sidebar-brand" width="40">
        <div class="sidebar-toggler not-active">
            <span></span>
            <span></span>
            <span></span>
        </div>
    </div>
    <div class="sidebar-body">
        <ul class="nav">
            <li class="nav-item nav-category">Main</li>
            <li class="nav-item {{ request()->is('admin/dashboard') ? ' active' : '' }}">
                <a href="{{ route('admin.dashboard') }}" class="nav-link">
                    <i class="link-icon" data-feather="box"></i>
                    <span class="link-title">Dashboard</span>
                </a>
            </li>

            <li class="nav-item {{ request()->is('admin/berita*') ? ' active' : '' }}">
                <a href="{{ route('admin.berita.index') }}" class="nav-link">
                    <i class="link-icon" data-feather="file-text"></i>
                    <span class="link-title">Berita</span>
                </a>
            </li>
        </ul>
    </div>
</nav>
