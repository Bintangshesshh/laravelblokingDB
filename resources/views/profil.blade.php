<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Profil Saya</title>
    <style>
        body { font-family: sans-serif; line-height: 1.6; padding: 20px; }
        .card { border: 1px solid #ccc; padding: 20px; border-radius: 8px; width: 300px; }
        h2 { color: #2d3748; }
    </style>
</head>
<body>
    <div class="card">
        <h2>Profil Siswa</h2>
        <p>Nama: {{ $nama }}</p>
        <p>Kelas: {{ $kelas }}</p>
        <p>Jurusan: {{ $jurusan }}</p>
    </div>
</body>
</html>