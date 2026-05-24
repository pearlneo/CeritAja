<!-- POLA PIKIR -->
<div class="entry-block">
    <div class="block-header">
        <div class="block-icon icon-pikir">
            <i class='bx bx-brain'></i>
        </div>
        <div class="block-meta">
            <div class="block-title">{{ $mode === 'edit' ? 'Apa yang kamu pikirkan?' : 'Apa yang kamu pikirkan hari ini?' }}</div>
            <div class="block-hint">Ceritakan cara pikirmu bukan penilaian, tapi pengamatan.</div>
        </div>
    </div>
    <div class="block-body">
        <textarea
            name="mindset"
            class="journal-textarea"
            id="txtMindset"
            placeholder="Contoh: aku merasa belum cukup baik, aku terlalu overthinking, atau aku bisa kalau lebih tenang..."
            required
            oninput="updateCount('txtMindset','cntMindset')"
        >{{ old('mindset', $refleksi->mindset ?? '') }}</textarea>
        <div class="textarea-footer">
            <span class="textarea-tag">Refleksi pikiran</span>
            <span class="char-count"><span id="cntMindset">0</span> karakter</span>
        </div>
        @error('mindset')
            <p class="error-msg">{{ $message }}</p>
        @enderror
    </div>
</div>