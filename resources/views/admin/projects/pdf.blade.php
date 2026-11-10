<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Laporan Data Project</title>
    <style>
    body {
        font-family: sans-serif;
        font-size: 11pt;

    }

    h2 {
        text-align: center;
        margin-bottom: 5px;

    }
    .subtitle {
        text-align: center;
        font-size: 9pt;
        color: #666;
        margin-bottom: 20px;

    }
    table {
        width: 100%;
        border-collapse: collapse;
    }

    th,
    td {
        border: 1px solid #aaa;
        padding: 6px 8px;
        text-align: left;
        vertical-align: middle;
    }

    th {
        background-color: #f2f2f2;
        font-size: 10pt;
    }

    img{
        width: 60px;
        height: auto;
        border-radius: 4px;
    }
    </style>
</head>

<body>
    <h2>LAPORAN DATA PROJECT</h2>
    <div class="subtitle">Tanggal Cetak : {{ date('d-m-Y') }}</div>
    <table>
        <thead>
            <tr>
                <th>No</th>
                <th>Gambar</th>
                <th>Judul</th>
                <th>Deskripsi</th>
                <th>Teknologi</th>
                <th>Status</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($projects as $index => $project)
            <tr>
                <td>{{ $index + 1 }}</td>
                <td>
                    <img src="{{ public_path('images/'.$project->image) }}" alt="{{ $project->title }}" style="width: 80px; height: 50px; object-fit: cover;">
                </td>
                <td>{{ $project->title }}</td>  
                <td>{{ $project->description}}</td>
                <td>{{ $project->teknologi }}</td>
                <td>{{ $project->status }}</td>
            </tr>
            @endforeach
        </tbody>
    </table>
</body>
</html>