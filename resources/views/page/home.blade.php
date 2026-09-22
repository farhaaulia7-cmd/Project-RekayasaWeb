@extends('layouts.app')

@section('title', 'home')

@section('content')
<div class="container mt-5">
    <h1 class="mb-4">Dashboard</h1>
    <p>selamat datang dihalaman home </p>
    <a class="btn btn-success btn-lg" href="{{ url('/profile') }}">Lihat Halaman Profile</a>
</div>
@endsection