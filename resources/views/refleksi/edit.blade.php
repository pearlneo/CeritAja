@extends('layouts.app')

@section('title', 'Edit Refleksi')

@push('styles')
<link rel="stylesheet" href="{{ asset('css/refleksi.css') }}">
@endpush

@section('content')

@include('refleksi.partials.form.hero', [
    'mode' => 'edit',
    'refleksi' => $refleksi
])

<form method="POST" action="/refleksi/{{ $refleksi->id }}" id="journalForm">
    @csrf
    @method('PUT')
    <div class="form-area">
        <div class="journal-col">
            @include('refleksi.partials.form.emosi-block', [
                'mode' => 'edit',
                'refleksi' => $refleksi
            ])
            @include('refleksi.partials.form.mindset-block', [
                'mode' => 'edit',
                'refleksi' => $refleksi
            ])
            @include('refleksi.partials.form.tindakan-block', [
                'mode' => 'edit',
                'refleksi' => $refleksi
            ])
        </div>
        <div class="sidebar-col">
            @include('refleksi.partials.form.sidebar', [
                'tanggal' => old('tanggal', $refleksi->tanggal),
            ])
            @include('refleksi.partials.form.submit-card', [
                'buttonText' => 'Simpan Refleksi',
                'subText' => 'Perubahan akan langsung tersimpan.',
                'cancelUrl' => '/refleksi'
            ])
            @include('refleksi.partials.form.tips', [
                'mode' => 'edit'
            ])
        </div>
    </div>
</form>

@endsection

@push('scripts')
<script src="{{ asset('js/refleksi.js') }}"></script>
@endpush