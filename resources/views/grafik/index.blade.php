@extends('layouts.app')

@section('title', 'Grafik')

@push('styles')
<link rel="stylesheet" href="{{ asset('css/grafik.css') }}">
@endpush

@section('content')

<div class="grafik-container">
    @include('grafik.partials.header')

    @include('grafik.partials.stats')

    @include('grafik.partials.charts')

    @include('grafik.partials.distribusi')

    @include('grafik.partials.insights')

    @include('grafik.partials.analisis')
</div>

@endsection

@push('scripts')
<script>
    window.chartData = @json($chartData);
</script>
<script src="{{ asset('js/grafik.js') }}"></script>

@endpush