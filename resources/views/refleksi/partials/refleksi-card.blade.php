<div class="refleksi-card"
    data-emosi="{{ strtolower($r->emosi) }}"
    data-mindset="{{ strtolower($r->mindset) }}"
    data-tindakan="{{ strtolower($r->tindakan) }}">

    <div class="card-icon"><i class='bx bx-heart'></i></div>

    <div class="card-body">
        <!-- Emosi sebagai judul -->
        <div class="card-emosi">{{ Str::limit($r->emosi, 80) }}</div>

        <!-- Mindset sebagai preview -->
        <div class="card-preview">{{ $r->mindset }}</div>

        <div class="card-tags">
            <span class="tag tag-emosi">
                <i class='bx bx-heart'></i>         
                Emosi
            </span>
            <span class="tag tag-mindset">
                <i class='bx bx-brain'></i>         <!--style="font-size:10px;"-->
                {{ Str::limit($r->mindset, 30) }}
            </span>
            <span class="tag tag-tindakan">
                <i class='bx bx-run'></i>           <!--style="font-size:10px;"-->
                {{ Str::limit($r->tindakan, 30) }}
            </span>
        </div>
    </div>

    <div class="card-actions">
        <a href="/refleksi/{{ $r->id }}/edit" class="btn-edit">
            <i class='bx bx-edit-alt'></i> Edit
        </a>
        <button class="btn-hapus" onclick="confirmDelete({{ $r->id }})">
            <i class='bx bx-trash'></i> Hapus
        </button>
    </div>
</div>