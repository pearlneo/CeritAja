function confirmDelete(id) {
    const form = document.getElementById('deleteForm');
    const modal = document.getElementById('modalHapus');

    if (form && modal) {
        form.action = `/refleksi/${id}`;
        modal.classList.add('show');
    }
}

function closeModal() {
    const modal = document.getElementById('modalHapus');
    if (modal) {
        modal.classList.remove('show');
    }
}

const modalHapus = document.getElementById('modalHapus');

if (modalHapus) {
    modalHapus.addEventListener('click', function(e) {
        if (e.target === this) {
            closeModal();
        }
    });
}

function filterCards() {
    const searchInput = document.getElementById('searchInput');
    const filterTipe = document.getElementById('filterTipe');

    if (!searchInput || !filterTipe) return;

    const search = searchInput.value.toLowerCase();
    const tipe   = filterTipe.value.toLowerCase();

    document.querySelectorAll('.refleksi-card').forEach(card => {
        const emosi    = card.dataset.emosi    || '';
        const mindset  = card.dataset.mindset  || '';
        const tindakan = card.dataset.tindakan || '';
        const all      = `${emosi} ${mindset} ${tindakan}`;
        
        const matchSearch = all.includes(search);
        const matchTipe   = 
            !tipe || 
            all.includes(tipe) ||
            (tipe === 'emosi' && emosi.includes(search)) ||
            (tipe === 'mindset' && mindset.includes(search)) ||
            (tipe === 'tindakan' && tindakan.includes(search));

        card.style.display = (matchSearch && matchTipe) ? '' : 'none';
    });
}

function setSort(btn, type) {
    document.querySelectorAll('.sort-tab').forEach(b => b.classList.remove('active'));
    btn.classList.add('active');
}

// Char counter
function updateCount(textareaId, counterId) {
    const textarea = document.getElementById(textareaId);
    const counter = document.getElementById(counterId);
    if (!textarea || !counter) return;
    counter.textContent = textarea.value.length;
}

const textareaMap = {
    'txtEmosi': 'cntEmosi',
    'txtMindset': 'cntMindset',
    'txtTindakan': 'cntTindakan'
};

Object.entries(textareaMap).forEach(([textareaId, counterId]) => {
    const textarea = document.getElementById(textareaId);
    const counter = document.getElementById(counterId);

    if (textarea && counter) {
        counter.textContent = textarea.value.length;
    }
});

// Progress step highlight on focus
const steps = document.querySelectorAll('.prog-dot');
const textareas = ['txtEmosi','txtMindset','txtTindakan'];
textareas.forEach((id, index) => {
    const el = document.getElementById(id);
    if (!el) return;
    el.addEventListener('focus', () => {
        steps.forEach((step, stepIndex) => {
            step.classList.toggle('active', stepIndex <= index);
        });
    });
});