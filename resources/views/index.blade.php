<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Politeknik Takumi</title>

    {{-- Alpine JS --}}
    <script defer src="https://cdn.jsdelivr.net/npm/alpinejs@3.x.x/dist/cdn.min.js"></script>

    {{-- Box Icon --}}
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/boxicons@latest/css/boxicons.min.css">
    <!-- or -->
    <link rel="stylesheet" href="https://unpkg.com/boxicons@latest/css/boxicons.min.css">

    {{-- CSS --}}
    @vite('resources/css/app.css')
</head>

<body>
    {{-- Tempat untuk Navbar --}}
    @include('layouts.navbar')

    {{-- Main --}}
    @include('pages.homepage')

    {{-- Footer --}}
    @include('layouts.footer')
</body>

</html>
