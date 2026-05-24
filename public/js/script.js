const container = document.querySelector('.container');
const registerBtn = document.querySelector('.register-btn');
const loginBtn = document.querySelector('.login-btn');

registerBtn.addEventListener('click',()=>{
	container.classList.add('active');
})

loginBtn.addEventListener('click',()=>{
	container.classList.remove('active');
})

document.querySelectorAll('.coming-soon').forEach(el => {
    el.addEventListener('click', function(e) {
        e.preventDefault();
        alert('Fitur belum tersedia');
    });
});

document.querySelectorAll('a[href^="#"]').forEach(anchor => {
    anchor.addEventListener('click', function(e) {
        e.preventDefault();
        document.querySelector(this.getAttribute('href'))
            .scrollIntoView({ behavior: 'smooth' });
    });
});

    // Dynamic date in hero
    const days = ['Minggu','Senin','Selasa','Rabu','Kamis','Jumat','Sabtu'];
    const months = ['Januari','Februari','Maret','April','Mei','Juni','Juli','Agustus','September','Oktober','November','Desember'];
    const now = new Date();
    document.getElementById('heroDate').textContent =
        `${days[now.getDay()]}, ${now.getDate()} ${months[now.getMonth()]} ${now.getFullYear()}`;

    // Char counter
    function updateCount(textareaId, counterId) {
        const len = document.getElementById(textareaId).value.length;
        document.getElementById(counterId).textContent = len;
    }

    // Init counts from old() values
    ['txtEmosi','txtMindset','txtTindakan'].forEach(id => {
        const el = document.getElementById(id);
        if (el && el.value) {
            const map = { txtEmosi: 'cntEmosi', txtMindset: 'cntMindset', txtTindakan: 'cntTindakan' };
            document.getElementById(map[id]).textContent = el.value.length;
        }
    });

    // Progress step highlight on focus
    const steps = document.querySelectorAll('.prog-dot');
    const textareas = ['txtEmosi','txtMindset','txtTindakan'];
    textareas.forEach((id, i) => {
        const el = document.getElementById(id);
        if (!el) return;
        el.addEventListener('focus', () => {
            steps.forEach((s, j) => s.classList.toggle('active', j === i));
        });
    });
