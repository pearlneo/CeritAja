<!-- STATS -->
<div class="stats-row">
     <div class="stat-card">
        <div class="stat-icon purple"><i class='bx bx-book-open'></i></div>
        <div class="stat-info">
            <div class="stat-val">{{ $totalRefleksi }}</div>
            <div class="stat-lbl">Total Refleksi</div>
        </div>
    </div>
    
    <div class="stat-card">
        <div class="stat-icon amber"><i class='bx bx-calendar-check'></i></div>
        <div class="stat-info">
            <div class="stat-val">{{ $refleksiBulanIni }}</div>
            <div class="stat-lbl">Bulan Ini</div>
        </div>
    </div>
    <div class="stat-card">
        <div class="stat-icon green"><i class='bx bx-trending-up'></i></div>
        <div class="stat-info">
            <div class="stat-val">{{ $moodLabel }}</div>
            <div class="stat-lbl">Emosi Dominan</div>
        </div>
    </div>
</div>