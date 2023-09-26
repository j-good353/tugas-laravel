<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Profil Pembuat</title>
</head>
<body>
    <header>
        <h1>Profil Pembuat</h1>
    </header>
    <nav>
        <ul>
            <li><a href="/">Halaman Beranda</a></li>
            <li><a href="info">Informasi Kampus</a></li>
        </ul>
    </nav>
    <main>
        <section>
            <h2>Nama: {{ $name }}</h2>
            <p>NIM: {{ $nim }}</p>
            <p>Jurusan: {{ $jurusan }}</p>
        </section>
    </main>
</body>
</html>
