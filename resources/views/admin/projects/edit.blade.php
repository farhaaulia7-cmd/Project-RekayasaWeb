@extends('admin.template')
@section('title', 'Edit Project')
@section('content')
<div class="card border-0 shadow-sm">
    <div class="card-body">
        <h5 class="fw-bold mb-3">Edit Data Project</h5>
        <form action="{{ route('admin.projects.update', $project->id) }}" method="POST" enctype="multipart/form-data">
            @csrf
            <div class="mb-3">
                <label class="form-label">Judul</label>
                <input type="text" name="title" class="form-control" value="{{ $project->title }}" required>
            </div>
            <div class="mb-3">
                <label class="form-label">Deskripsi</label>
                <textarea name="description" class="form-control" rows="3" required>{{ $project->description }}</textarea>
            </div>
            <div class="mb-3">
                <label class="form-label">Teknologi</label>
                <input type="text" name="teknologi" class="form-control" value="{{ $project->teknologi }}" required>
            </div>
            <div class="mb-3">
                <label class="form-label">Status</label>
                <select name="status" class="form-control" required>
                    <option value="Selesai" {{ $project->status == 'Selesai' ? 'selected' : '' }}>Selesai</option>
                    <option value="In Progress" {{ $project->status == 'In Progress' ? 'selected' : '' }}>In Progress</option>
                </select>
            </div>
            <div class="mb-3">
                <label class="form-label">Gambar (Biarkan kosong jika tidak ingin mengubah)</label>
                <input type="file" name="image" class="form-control">
                @if($project->image)
                    <div class="mt-2">
                        <img src="{{ asset('images/'.$project->image) }}" class="img-thumbnail" style="width: 120px;">
                    </div>
                @endif
            </div>
            <button type="submit" class="btn btn-success">Update</button>
            <a href="{{ route('admin.projects.index') }}" class="btn btn-secondary">Kembali</a>
        </form>
    </div>
</div>
@endsection