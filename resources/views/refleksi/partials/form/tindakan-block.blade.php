<!-- TINDAKAN -->
<div class="entry-block">
    <div class="block-header">
        <div class="block-icon icon-aksi">
            <i class='bx bx-run'></i>
        </div>
        <div class="block-meta">
            <div class="block-title">{{ $mode === 'edit' ? 'Apa yang kamu lakukan?' : 'Apa yang kamu lakukan hari ini?' }}</div>
            <div class="block-hint">Hubungkan kondisi emosional dengan perilakumu.</div>
        </div>
    </div>
    <div class="block-body">
        <textarea
            name="tindakan"
            class="journal-textarea"
            id="txtTindakan"
            placeholder="Contoh: belajar, menunda tugas, olahraga, tetap mencoba walau capek..."
            required
            oninput="updateCount('txtTindakan','cntTindakan')"
        >{{ old('tindakan', $refleksi->tindakan ?? '') }}</textarea>
        <div class="textarea-footer">
            <span class="textarea-tag">Perilaku dan Respons</span>
            <span class="char-count"><span id="cntTindakan">0</span> karakter</span>
        </div>
        @error('tindakan')
            <p class="error-msg">{{ $message }}</p>
        @enderror
    </div>
</div>