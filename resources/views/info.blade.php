<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Informasi Kampus</title>
</head>
<body>
    <header>
        <h1>Informasi Kampus</h1>
    </header>
    <nav>
        <ul>
            <li><a href="/">Halaman Beranda</a></li>
            <li><a href="profile">Profile Pembuat</a></li>
        </ul>
    </nav>
    <main>
        <section>
            <h2>Nama Kampus: {{$namaKampus}} </h2>
            <p>Alamat: {{$alamatKampus}}</p>
            <p>Kontak: {{$contactPerson}}</p>
        </section>
    </main>
</body>
</html>
