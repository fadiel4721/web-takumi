<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <meta name="keywords" content="Politeknik, Politeknik Cikarang, Politeknik Takumi, Takumi, Kampus, Kampus Takumi, Kampus Cikarang, Cikarang, Kampus Terbaik, Kampus Terbaik di Jawa Barat, Kampus Terbaik di Cikarang, Kampus Terbaik di Bekasi, Politeknik Terbaik, Politeknik Terbaik di Jawa Barat, Politeknik Terbaik di Cikarang, Politeknik Terbaik di Bekasi, Penerimaan Mahasiswa Baru, Mahasiswa Takumi, Mahasiswa, Teknik Informatika, Prodi Teknik Informatika, Prodi TI, Teknik Informatika D3, Mekatronika, Mekatronika D3, Prodi Mekatronika, Mekatro, Bahasa Jepang, Bahasa Jepang D3, Prodi Bahasa Jepang, Digital Bisnis, Prodi Digital Bisnis, Sarjana Terapan, Sarjana Terapan Terbaik">
    <title>Politeknik Takumi</title>
    <link rel="shortcut icon" href="{{ asset('logo/logo-tangan2.png') }}" type="image/x-icon">

    {{-- Alpine JS --}}
    <script src="https://cdn.jsdelivr.net/npm/alpinejs@3.x.x" defer></script>

    {{-- Box Icon --}}
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/boxicons@latest/css/boxicons.min.css">
    <link rel="stylesheet" href="https://unpkg.com/boxicons@latest/css/boxicons.min.css">

    {{-- CSS --}}
    @vite('resources/css/app.css')
    @vite('resources/css/style.css')
</head>

<body>
    {{-- Navbar --}}
    @include('layouts.navbar')

    {{-- Main --}}
    @include('pages.homepage')

    {{-- Footer --}}
    @include('layouts.footer')

    {{-- JS --}}
    @vite('resources/js/navbarScroll.js')
    <script src="//unpkg.com/alpinejs" defer></script>
</body>

</html>
