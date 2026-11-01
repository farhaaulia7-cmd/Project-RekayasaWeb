@extends('admin.template')
@section('title', 'Tambah Project')
@section('content')
<div class="card border-0 shadow-sm">
    <div class="card-body">
        <h5 class="fw-bold mb-3">Tambah Data Project</h5>
        <form action="{{ route('admin.projects.store') }}" method="POST" enctype="multipart/form-data">
            @csrf
            <div class="mb-3">
                <label class="form-label">Judul</label>
                <input type="text" name="title" class="form-control" required>
            </div>
            <div class="mb-3">
                <label class="form-label">Deskripsi</label>
                <textarea name="description" class="form-control" rows="3" required></textarea>
            </div>
            <div class="mb-3">
                <label class="form-label">Teknologi</label>
                <input type="text" name="teknologi" class="form-control" placeholder="Contoh: Laravel & Bootstrap" required>
            </div>
            <div class="mb-3">
                <label class="form-label">Status</label>
                <select name="status" class="form-control" required>
                    <option value="Selesai">Selesai</option>
                    <option value="In Progress">In Progress</option>
                </select>
            </div>
            <div class="mb-3">
                <label class="form-label">Gambar</label>
                <input type="file" name="image" class="form-control" required>
            </div>
            <button type="submit" class="btn btn-primary">Simpan</button>
            <a href="{{ route('admin.projects.index') }}" class="btn btn-secondary">Kembali</a>
        </form>
    </div>
</div>
@endsection