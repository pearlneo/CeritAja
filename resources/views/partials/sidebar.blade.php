<aside class="sidebar">
    <div class="sidebar-logo"><i class='bx bx-book-heart'></i></div>
    
    <nav class="sidebar-nav">
        <a href="/dashboard" 
            class="nav-item {{ request()->is('dashboard') ? 'active' : '' }}">
            <i class='bx bxs-home'></i>
            <span class="tip">Dashboard</span>
        </a>
        <a href="/refleksi" class="nav-item {{ request()->is('refleksi') ? 'active' : '' }}">
            <i class='bx bx-book-open'></i>
            <span class="tip">Refleksi</span>
        </a>
        <a href="/riwayat" class="nav-item {{ request()->is('riwayat') ? 'active' : '' }}">
            <i class='bx bx-time-five'></i>
            <span class="tip">Riwayat</span>
        </a>
        <a href="/grafik" class="nav-item {{ request()->is('grafik') ? 'active' : '' }}">
            <i class='bx bx-line-chart'></i>
            <span class="tip">Grafik</span>
        </a>
    </nav>

    <div class="theme-toggle">
        <i class='bx bx-moon change-theme' id="theme-button"></i>
    </div>
    
    <div class="sidebar-bottom">
        <form method="POST" action="{{ route('logout') }}">
            @csrf
            <button type="submit" class="logout-btn" title="Keluar">
                <i class='bx bx-log-out'></i>
            </button>
        </form>
    </div>
</aside>