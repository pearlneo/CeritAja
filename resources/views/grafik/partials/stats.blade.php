<div class="stats-row">
    <div class="stat-card">
        <div class="stat-label">
            <i class='bx bx-note' style="color:var(--accent)"></i> 
            Total Refleksi
        </div>
        <div class="stat-value">{{ $totalRefleksi }}</div>
        <div class="stat-sub">Sepanjang waktu</div>
    </div>
    <div class="stat-card">
        <div class="stat-label">
            <i class='bx bx-calendar' style="color:#60a5fa"></i> 
            Bulan Ini
        </div>
        <div class="stat-value">{{ $bulanIni }}</div>
        <div class="stat-sub">{{ now()->translatedFormat('F Y') }}</div>
    </div>
    <div class="stat-card">
        <div class="stat-label">
            <i class='bx bx-trending-up' style="color:#34d399"></i> 
            Streak
        </div>
        <div class="stat-value">{{ $streak }} hari</div>
        <div class="stat-sub">Konsistensi refleksi</div>
    </div>
    <div class="stat-card">
        <div class="stat-label">
            <i class='bx bx-happy' style="color:#fb923c"></i> 
            Emosi Dominan
        </div>
        <div class="stat-value" style="font-size:18px">{{ $emosiDominan }}</div>
        <div class="stat-sub">Paling sering muncul</div>
    </div>
</div>