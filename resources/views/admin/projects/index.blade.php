@extends('admin.template')
@section('title', 'Halaman Home')

@section('content')
<div class="card border-0 shadow-sm">
    <div class="card-body">
        <div class="d-flex justify-content-between align-items-center mb-4">
            <h5 class="mb-0">Data Project</h5>
            <div class="d-flex gap-2">
                <a href="{{ route('admin.projects.pdf') }}" class="btn btn-danger" target="_blank">Export PDF</a>
                <a href="{{ route('admin.projects.create') }}" class="btn btn-primary">Tambah Data</a>
            </div>
        </div>

        <div class="table-responsive">
            <table class="table table-bordered w-100" id="tb_project">
                <thead>
                    <tr>
                        <th>No</th>
                        <th>Gambar</th>
                        <th>Judul</th>
                        <th>Deskripsi</th>
                        <th>Teknologi</th>
                        <th>Status</th>
                        <th>Aksi</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($projects as $index => $project )
                    <tr>
                        <td>{{ $index + 1 }}</td>
                        <td>
                            <img src="{{ asset('images/'.$project->image) }}" class="img-thumbnail"
                                style="width: 80px; height: 50px; object-fit: cover;">
                        </td>
                        <td>{{ $project->title }}</td>
                        <td>{{ $project->description }}</td>
                        <td>{{ $project->teknologi }}</td>
                        <td>{{ $project->status }}</td>
                        <td>
                            <a href="{{ route('admin.projects.edit', $project->id) }}"
                                class="btn btn-warning btn-sm">Edit</a>
                            <form action="{{ route('admin.projects.destroy', $project->id) }}" method="post"
                                onsubmit="return confirm('apakah data ini dihapus ?')" style="display:inline-block;">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="btn btn-danger btn-sm">Hapus</button>
                            </form>
                        </td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
</div>
@endsection

@push('scripts')
<script>
$(document).ready(function() {
    $('#tb_project').dataTable();
})
</script>
@endpush