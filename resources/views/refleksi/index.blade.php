@extends('layouts.app')

@section('title', 'Refleksi')

@push('styles')
<link rel="stylesheet" href="{{ asset('css/refleksi.css') }}">
@endpush

@section('content')

<div class="refleksi-container">
    @include('refleksi.partials.header')
    @include('refleksi.partials.alert')
    @include('refleksi.partials.filter-bar')

    @if($refleksis->isEmpty())
        @include('refleksi.partials.empty-state')
    @else
        @include('refleksi.partials.refleksi-list')
    @endif

    @include('refleksi.partials.modal-delete')
</div>

@endsection

@push('scripts')
<script src="{{ asset('js/refleksi.js') }}"></script>
@endpush