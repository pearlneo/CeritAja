@extends('layouts.app')

@section('title', 'Create Refleksi')

@push('styles')
<link rel="stylesheet" href="{{ asset('css/refleksi.css') }}">
@endpush

@section('content')

@include('refleksi.partials.form.hero', [
    'mode' => 'create'
])

@if ($errors->any())
    <div class="alert-error">
        <i class='bx bx-error-circle'></i>
        {{ $errors->first() }}
    </div>
@endif

@include('refleksi.partials.form.progress')

<form method="POST" action="/refleksi/store" id="journalForm">
    @csrf
    <div class="form-area">
        <div class="journal-col">
            @include('refleksi.partials.form.emosi-block', [
                'mode' => 'create'
            ])
            @include('refleksi.partials.form.mindset-block', [
                'mode' => 'create'
            ])
            @include('refleksi.partials.form.tindakan-block', [
                'mode' => 'create'
            ])
        </div>
        <div class="sidebar-col">
            @include('refleksi.partials.form.sidebar', [
                'tanggal' => old('tanggal', date('Y-m-d')),
            ])
            @include('refleksi.partials.form.submit-card', [
                'buttonText' => 'Simpan Refleksi',
                'subText' => 'Semua cerita kamu berharga.',
                'cancelUrl' => '/dashboard'
            ])
            @include('refleksi.partials.form.tips', [
                'mode' => 'create'
            ])
        </div>
    </div>
</form>

@endsection

@push('scripts')
<script src="{{ asset('js/refleksi.js') }}"></script>
@endpush