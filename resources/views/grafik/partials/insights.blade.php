<div class="insight-grid">
    <div class="insight-card">
        <div class="insight-card-header">
            <div class="insight-icon purple">🧠</div>
            <div class="insight-card-title">Pola Emosi</div>
        </div>
        <div class="insight-card-desc">
            Emosi 
            <span class="insight-highlight">{{ $emosiDominan }}</span> 
            paling sering muncul.<br>
            <small style="margin-top:4px;display:block">{!! $pola_emosi !!}</small>
        </div>
    </div>
    <div class="insight-card">
        <div class="insight-card-header">
            <div class="insight-icon blue">🧩</div>
            <div class="insight-card-title">Pola Pikir</div>
        </div>
        <div class="insight-card-desc">
            {!! $pola_aspek !!}
        </div>
    </div>
    <div class="insight-card">
        <div class="insight-card-header">
            <div class="insight-icon green">📈</div>
            <div class="insight-card-title">Konsistensi</div>
        </div>
        <div class="insight-card-desc">
            {{ $pola_konsistensi }}
        </div>
    </div>
</div>