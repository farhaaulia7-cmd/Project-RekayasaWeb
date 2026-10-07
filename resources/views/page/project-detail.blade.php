@extends('layouts.app')

@section('title', 'Detail Project - ' . $project->title)

@section('content')
<div class="container">
    <div class="mb-3">
        <a href="{{ route('project.index') }}" class="btn btn-outline-secondary btn-sm">
            &larr; Kembali ke Daftar Project
        </a>
    </div>

    <div class="card shadow-sm border-0 overflow-hidden">
        <div class="row g-0">
            <!-- Gambar Detail -->
            <div class="col-md-5">
                <img src="{{ asset('images/' . $project->image) }}" class="img-fluid h-100 w-100"
                    alt="{{ $project->title }}" style="object-fit: cover; min-height: 300px;"
                    onerror="this.onerror=null;this.src='https://via.placeholder.com/600x400?text=No+Image';">
            </div>

            <!-- Konten Detail -->
            <div class="col-md-7">
                <div class="card-body p-4">
                    <div class="mb-2">
                        <span class="badge {{ $project->status == 'Selesai' ? 'bg-success' : 'bg-warning text-dark' }}">
                            Status: {{ $project->status }}
                        </span>
                    </div>

                    <h2 class="fw-bold text-dark mb-3">{{ $project->title }}</h2>

                    <div class="mb-4">
                        <h6 class="fw-bold text-muted mb-1">Teknologi yang Digunakan:</h6>
                        <span class="badge bg-primary fs-6">{{ $project->teknologi }}</span>
                    </div>

                    <div class="mb-4">
                        <h6 class="fw-bold text-muted mb-1">Deskripsi Lengkap Project:</h6>
                        <p class="card-text text-secondary style=" line-height: 1.7;">
                            {{ $project->description }}
                        </p>
                    </div>

                    <hr>

                    <div class="text-muted small">
                        <span>Dibuat pada: {{ $project->created_at->format('d M Y') }}</span>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection