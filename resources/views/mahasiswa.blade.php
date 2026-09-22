<!DOCTYPE html>
<html lang="id">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Profile Mahasiswa</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
</head>

<body class="bg-light d-flex flex-column min-vh-100">
    <nav class="navbar navbar-dark bg-primary">
        <div class="container">
            <a class="navbar-brand" href="#">Profile Mahasiswa</a>
        </div>
    </nav>

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

    <footer class="bg-white text-dark border-top text-center py-3 mt-auto">
        <p class="mb-0">&copy; 2026 Profile Mahasiswa. All rights reserved.</p>
    </footer>


    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>