const chartData = window.chartData;

// ===== TREN CHART =====
const trenCtx = document.getElementById('trenChart').getContext('2d');
const grad = trenCtx.createLinearGradient(0, 0, 0, 240);
grad.addColorStop(0, 'rgba(168,85,247,0.3)');
grad.addColorStop(1, 'rgba(168,85,247,0)');

let trenChart = new Chart(trenCtx, {
    type: 'line',
    data: {
        labels: chartData.tren.minggu.labels,
        datasets: [{
            data: chartData.tren.minggu.data,
            borderColor: '#a855f7',
            backgroundColor: grad,
            borderWidth: 2.5,
            fill: true,
            tension: 0.4,
            pointBackgroundColor: '#a855f7',
            pointRadius: 4,
            pointHoverRadius: 7,
        }]
    },
    options: {
        responsive: true,
        maintainAspectRatio: false,
        plugins: { 
            legend: { 
                display: false 
            } 
        },
        scales: {
            x: { 
                grid: { 
                    display: false 
                }, 
                ticks: { 
                    font: { size: 11 }, 
                    color: '#7c6fa0' 
                } 
            },
            y: { 
                grid: { 
                    color: 'rgba(168,85,247,0.07)' 
                }, 
                ticks: { 
                    font: { size: 11 }, 
                    color: '#7c6fa0', 
                    stepSize: 1 
                }, 
                beginAtZero: true 
            }
        }
    }
});

// ===== PERIOD =====
function setPeriod(btn, period) {
    document.querySelectorAll('.period-btn').forEach(b => b.classList.remove('active'));
    btn.classList.add('active');
    trenChart.data.labels = chartData.tren[period].labels;
    trenChart.data.datasets[0].data = chartData.tren[period].data;
    trenChart.update();
}

window.setPeriod = setPeriod; // Expose to global scope for inline onclick

// ===== EMOSI DONUT =====
const emosiData = chartData.emosi;
const hasEmosi = emosiData.some(d => d.value > 0);

new Chart(document.getElementById('emosiChart'), {
    type: 'doughnut',
    data: {
        labels: emosiData.map(d => d.label),
        datasets: [{
            data: hasEmosi ? emosiData.map(d => d.value) : [1],
            backgroundColor: hasEmosi ? emosiData.map(d => d.color) : ['#e9d5ff'],
            borderWidth: 0,
            hoverOffset: 6,
        }]
    },
    options: {
        responsive: true,
        maintainAspectRatio: false,
        cutout: '68%',
        plugins: { 
            legend: { display: false }, 
            tooltip: { 
                enabled: hasEmosi 
            } 
        }
    }
});

// Emosi Donut Legend
const emosiLegend = document.getElementById('emosiLegend');
emosiData.forEach(d => {
    emosiLegend.innerHTML += `
        <div class="legend-item">
            <div class="legend-dot" style="background:${d.color}"></div>
            <span>${d.label} (${d.value})</span>
        </div>
    `;
});

// ===== EMOSI BARS =====
const maxEmosi = Math.max(...emosiData.map(d => d.value), 1);
const emosiBarsEl = document.getElementById('emosiBars');

if (emosiData.length === 0) {
    emosiBarsEl.innerHTML = `
        <p style="
            font-size:13px; 
            color:#8a7fa0; 
            text-align:center; 
            padding:20px 0
        ">
            Belum ada data emosi
        </p>
    `;
} else {
    emosiData.forEach(d => {
        const pct = Math.round((d.value / maxEmosi) * 100);
        emosiBarsEl.innerHTML += `
            <div class="mood-bar-item">
                <div class="mood-bar-label">${d.label}</div>
                <div class="mood-bar-track">
                    <div class="mood-bar-fill" style="width:${pct}%; background:${d.color}"></div>
                </div>
                <div class="mood-bar-count">${d.value}x</div>
            </div>
        `;
    });
}