<div class="filter-bar">
    <div class="search-wrapper">
        <i class='bx bx-search'></i>
        <input 
            type="text" 
            id="searchInput" 
            placeholder="Cari berdasarkan emosi, mindset, atau tindakan..." 
            oninput="filterCards()"
        >
    </div>

    <select class="filter-select" id="filterTipe" onchange="filterCards()">
        <option value="">Semua Tipe</option>
        <option value="emosi">Emosi</option>
        <option value="mindset">Mindset</option>
        <option value="tindakan">Tindakan</option>
    </select>

    <div class="sort-tabs">
        <button class="sort-tab active" onclick="setSort(this, 'terbaru')">Terbaru</button>
        <button class="sort-tab" onclick="setSort(this, 'semua')">Semua</button>
    </div>
</div>