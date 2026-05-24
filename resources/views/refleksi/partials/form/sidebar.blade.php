<!-- TANGGAL -->
<div class="side-card">
    <div class="side-card-title">
        <i class='bx bx-calendar-check'></i> 
        Tanggal Refleksi
    </div>
    <input 
        type="date" 
        name="tanggal" 
        class="date-input"
        value="{{ $tanggal }}" 
        required
    >
    @error('tanggal')
        <p class="error-msg">{{ $message }}</p>
    @enderror
</div>