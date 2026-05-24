@extends('layouts.app')

@section('title', 'Dashboard')

@push('styles')
<link rel="stylesheet" href="{{ asset('css/dashboard.css') }}">
@endpush

@section('content')

@include('dashboard.partials.hero')

    <div class="content">

        @if(session('success'))
            <div class="alert-success">
                <i class='bx bx-check-circle'></i> 
                {{ session('success') }}
            </div>
        @endif

        @include('dashboard.partials.stats')
        @include('dashboard.partials.main-grid')
    </div>

@endsection

@push('scripts')
<script>
    window.lineData = @json($lineChartData);
    window.donutData = @json($donutChartData);
</script>
<script src="{{ asset('js/dashboard.js') }}"></script>
@endpush