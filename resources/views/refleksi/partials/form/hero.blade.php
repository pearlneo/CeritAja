<!-- HERO HEADER -->
<div class="hero">
    <!-- <div class="hero-top">
        <a href="/dashboard" class="back-btn"><i class='bx bx-chevron-left'></i></a>
        <div class="hero-breadcrumb">Dashboard / <span>Refleksi Baru</span></div>
    </div> -->
    <div class="hero-content">
        <!-- DATE --> 
        <div class="hero-date">
            <i class='bx bx-calendar'></i>
            @if($mode === 'edit')
                {{ \Carbon\Carbon::parse($refleksi->tanggal)->translatedFormat('l, d F Y') }}
            @else
                {{ now()->translatedFormat('l, d F Y') }}
            @endif
        </div>

        <!-- EDIT MODE -->
        @if($mode === 'edit')
            <div class="edit-badge">
                <i class='bx bx-pencil'></i>
                Mode Edit
            </div>
            <h1 class="hero-title">Perbarui <em>refleksimu!</em></h1>
            <p class="hero-sub">Ubah catatan yang ingin kamu perbaiki.</p>

        <!-- CREATE MODE -->
        @else
            <h1 class="hero-title">Gimana hari <em>kamu?</em></h1>
            <p class="hero-sub">Tulis pengalamanmu dengan jujur, tidak ada jawaban benar atau salah.</p>
        @endif
    </div>
</div>