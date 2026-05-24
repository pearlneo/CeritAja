<div id="refleksiList">
    @php
        $grouped = $refleksis->groupBy(function($item) {
            $tanggal = \Carbon\Carbon::parse($item->tanggal);
            if ($tanggal->isToday()) return 'Hari ini · ' . $tanggal->translatedFormat('l, d F Y');
            if ($tanggal->isYesterday()) return 'Kemarin · ' . $tanggal->translatedFormat('l, d F Y');
            return $tanggal->translatedFormat('l, d F Y');
        });
    @endphp

    @foreach($grouped as $tanggal => $items)
        <div class="date-group">
            <div class="date-label">{{ $tanggal }}</div>

            @foreach($items as $r)
                @include('refleksi.partials.refleksi-card', ['r' => $r])
            @endforeach
        </div>
    @endforeach
</div>