@extends('layouts.app')

@section('title', 'profile')

@section('content')
<div class="container mt-5">
    <h1 class="text-center mb-4">Profile Mahasiswa</h1>
    <div class="card mx-auto justify-content-center" style="max-width: 600px;">
        <div class="card-header">
            <center><img src="https://sahabatnesia.com/wp-content/uploads/2019/02/gambar-bunga.jpg" alt="" style="width:120px; heigt120px; object-fit: cover;"></center>
            <h3 class="card-tittle text-center">{{ $mahasiswa['nama'] }}</h3>
        </div>
        <div class="card-body">
            <p class="card-text"><strong>NIM:</strong> {{ $mahasiswa['nim'] }}</p>
            <p class="card-text"><strong>Prodi:</strong> {{ $mahasiswa['prodi'] }}</p>
            <p class="card-text"><strong>Kampus:</strong> {{ $mahasiswa['kampus'] }}</p>
            <p class="card-text"><strong>Email:</strong> {{ $mahasiswa['email'] }}</p>
            <p class="card-text"><strong>Status:</strong> <span class="badge bg-success">{{ $mahasiswa['status'] }}</span></p>
        </div>
    </div>
</div>
@endsection