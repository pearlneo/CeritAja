<div class="modal-overlay" id="modalHapus">
    <div class="modal-box">
        <div class="modal-icon">🗑️</div>
        <h3>Hapus Refleksi?</h3>
        <p>Refleksi ini akan dihapus permanen dan tidak bisa dikembalikan.</p>
        <div class="modal-actions">
            <button class="btn-modal-cancel" onclick="closeModal()">Batal</button>
            <form id="deleteForm" method="POST">
                @csrf
                @method('DELETE')
                <button type="submit" class="btn-modal-hapus">Ya, Hapus</button>
            </form>
        </div>
    </div>
</div>