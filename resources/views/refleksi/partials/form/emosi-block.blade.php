<!-- EMOSI -->
<div class="entry-block">
    <div class="block-header">
        <div class="block-icon icon-emosi">
            <i class='bx bx-heart'></i>
        </div>
        <div class="block-meta">
            <div class="block-title">{{ $mode === 'edit' ? 'Emosi hari itu' : 'Emosi hari ini' }}</div>
            <div class="block-hint">Tulis apa pun yang kamu rasakan, tidak perlu satu kata.</div>
        </div>
    </div>
    <div class="block-body">
        <textarea
            name="emosi"
            class="journal-textarea"
            id="txtEmosi"
            placeholder="Contoh: senang tapi capek, cemas, lega, hampa, atau campuran perasaan lainnya..."
            required
            oninput="updateCount('txtEmosi','cntEmosi')"
        >{{ old('emosi', $refleksi->emosi ?? '') }}</textarea>
        <div class="textarea-footer">
            <span class="textarea-tag">Ekspresi bebas</span>
            <span class="char-count"><span id="cntEmosi">0</span> karakter</span>
        </div>
        @error('emosi')
            <p class="error-msg">{{ $message }}</p>
        @enderror
    </div>
</div>