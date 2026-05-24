<!-- MAIN GRID -->
<div class="main-grid">

    <!-- KIRI -->
    <div class="left-col">

        <!-- TREN CHART -->
        <div class="card">
            <div class="card-header">
                <div class="card-title">
                    <i class='bx bx-line-chart'></i> Tren Refleksi
                </div>
                <div class="tren-tabs">
                    <button class="tren-tab active" onclick="switchTren('hari', this)">Harian</button>
                    <button class="tren-tab" onclick="switchTren('minggu', this)">Mingguan</button>
                    <button class="tren-tab" onclick="switchTren('bulan', this)">Bulanan</button>
                    <button class="tren-tab" onclick="switchTren('tahun', this)">Tahunan</button>
                </div>
            </div>
            <div class="chart-wrap">
                <canvas id="trenChart"></canvas>
            </div>
        </div>

        <!-- DONUT TINDAKAN -->
        <!--
        <div class="card">
            <div class="card-header">
                <div class="card-title">
                    <i class='bx bx-pie-chart-alt-2'></i> Distribusi Tindakan
                </div>
            </div>
            <div class="donut-wrap">
                <canvas id="donutChart" class="donut-canvas" width="140" height="140"></canvas>
                <div class="donut-legend" id="donutLegend"></div>
            </div>
        </div>
        --> 

    </div>

    <!-- KANAN -->
    <div class="right-col">

        <!-- QUICK ACTIONS -->
        <div class="card">
            <div class="card-header">
                <div class="card-title">
                    <i class='bx bx-zap'></i> Aksi Cepat
                </div>
            </div>
            <div class="quick-grid">
                <a href="/refleksi" class="quick-btn primary">
                    <i class='bx bx-plus-circle'></i> Tambah Refleksi
                </a>
                <a href="/riwayat" class="quick-btn">
                    <i class='bx bx-time-five'></i> Riwayat
                </a>
                <a href="/grafik" class="quick-btn">
                    <i class='bx bx-bar-chart-alt-2'></i> Grafik
                </a>
            </div>
        </div>

        <!-- INSIGHT -->
        <div class="insight-box">
            <div class="insight-label">
                <i class='bx bx-bulb'></i> Insight Harianmu
            </div>
            <div class="insight-text">{{ $insight }}</div>
        </div>

    </div>
</div>