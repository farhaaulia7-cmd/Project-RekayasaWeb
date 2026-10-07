@extends('layouts.app')

@section('title', 'home')

@section('content')
<div class="container mt-5">
    <h1 class="mb-4">Halaman About</h1>
    <p>Aplikasi ini dikembangkan sebagai materi mata kuliah Rekayasa Web</p>
</div>
 <div class="text-center mt-4">
        <a class="btn btn-primary" href="{{ url('/') }}">Kembali ke Home</a>
    </div>
@endsection