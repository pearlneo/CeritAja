@if(session('success'))
    <div class="alert-success">
        <i class='bx bx-check-circle'></i> {{ session('success') }}
    </div>
@endif