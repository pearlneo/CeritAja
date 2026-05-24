const lineData = window.lineData;
// const donutData = window.donutData;

// ── TREN CHART ──
const trenCtx = document.getElementById('trenChart').getContext('2d');
let trenChart = new Chart(trenCtx, {
    type: 'line',
    data: {
        labels: lineData.hari.labels,
        datasets: [{
            label: 'Refleksi',
            data: lineData.hari.data,
            borderColor: '#7b52d4',
            backgroundColor: 'rgba(123,82,212,0.08)',
            borderWidth: 2.5,
            pointBackgroundColor: '#7b52d4',
            pointRadius: 4,
            tension: 0.4,
            fill: true,
        }]
    },
    options: {
        responsive: true, maintainAspectRatio: false,
        plugins: { legend: { display: false } },
        scales: {
            x: { grid: { display: false }, ticks: { font: { size: 11 }, color: '#8a7fa0' } },
            y: { grid: { color: 'rgba(0,0,0,0.05)' }, ticks: { stepSize: 1, font: { size: 11 }, color: '#8a7fa0' }, beginAtZero: true }
        }
    }
});

function switchTren(period, btn) {
    document.querySelectorAll('.tren-tab').forEach(t => t.classList.remove('active'));
    btn.classList.add('active');
    trenChart.data.labels = lineData[period].labels;
    trenChart.data.datasets[0].data = lineData[period].data;
    trenChart.update();
}

/*
// ── DONUT CHART ──
const donutCtx = document.getElementById('donutChart').getContext('2d');
const donutFiltered = donutData.filter(d => d.value > 0);
const hasDonut = donutFiltered.length > 0;

new Chart(donutCtx, {
    type: 'doughnut',
    data: {
        labels: hasDonut ? donutFiltered.map(d => d.label) : ['Belum ada data'],
        datasets: [{
            data: hasDonut ? donutFiltered.map(d => d.value) : [1],
            backgroundColor: hasDonut ? donutFiltered.map(d => d.color) : ['#e8dcc8'],
            borderWidth: 0,
            hoverOffset: 4,
        }]
    },
    options: {
        responsive: false,
        cutout: '70%',
        plugins: { legend: { display: false }, tooltip: { enabled: hasDonut } }
    }
});

// Legend
const legendEl = document.getElementById('donutLegend');
const legendSource = hasDonut ? donutFiltered : donutData;
legendSource.forEach(d => {
    legendEl.innerHTML += `
        <div class="legend-item">
            <div class="legend-dot" style="background:${d.color}"></div>
            <span>${d.label}</span>
            <span class="legend-val">${d.value}x</span>
        </div>`;
});
*/