<!-- HERO -->
<div class="hero">
    <div class="hero-inner">
        <div class="hero-left">
            <div class="hero-greeting">
                <i class='bx bx-calendar'></i>
                {{ now()->translatedFormat('l, d F Y') }}
            </div>
            <div class="hero-name">
                Halo, <span>{{ Auth::user()->name }}</span> 👋
            </div>
            <div class="hero-sub">
                Bagaimana harimu? Yuk catat refleksimu sekarang.
            </div>
        </div>
        <a href="/refleksi" class="hero-cta">
            <i class='bx bx-plus'></i> Refleksi Baru
        </a>
    </div>
</div>