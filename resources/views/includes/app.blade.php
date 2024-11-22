<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <title>@yield('title')</title>
    <meta content="" name="description">
    <meta content="" name="keywords">
    {{-- <link rel="stylesheet" href="{{ asset('css/style.css') }}">
    <link rel="stylesheet" href="{{ asset('js/app.css') }}"> --}}

    <!-- Favicons -->
    <link href="{{ asset('img/icons/properti-ideal-icon.png') }}" rel="icon">

    <!-- Fonts -->
    <link href="https://fonts.googleapis.com" rel="preconnect">
    <link href="https://fonts.gstatic.com" rel="preconnect" crossorigin>
    <link
        href="https://fonts.googleapis.com/css2?family=Roboto:ital,wght@0,100;0,300;0,400;0,500;0,700;0,900;1,100;1,300;1,400;1,500;1,700;1,900&family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&family=Raleway:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap"
        rel="stylesheet">
    @vite(['resources/css/app.css', 'resources/js/app.js'])

    <style>
        * {
            font-family: Montserrat;
        }
    </style>
</head>

<body class="bg-white">
    <div class="min-h-screen flex flex-col ">
        @include('includes.navbar')
        <div class="flex h-full justify-center">
            <main class="h-full bg-white ">
                @yield('content')
            </main>
        </div>
        @include('includes.footer')
    </div>
    <script>
        const sideNav = document.getElementById('sideNav');
        const navBar = document.getElementById('navBar');
        const menuBtn = document.getElementById('menuBtn');
        if (sideNav) {
            menuBtn.addEventListener('click', () => {
                sideNav.classList.toggle('hidden');
                navBar.classList.toggle('hidden');
            });
        } else {
            menuBtn.addEventListener('click', () => {
                navBar.classList.toggle('hidden');
            });
        }
    </script>
    {{-- <script src='https://cdn.jsdelivr.net/gh/alpinejs/alpine@v2.7.3/dist/alpine.min.js'></script> --}}
    {{-- <script defer src="https://unpkg.com/alpinejs@3.x.x/dist/cdn.min.js"></script> --}}
    @stack('js')
</body>

</html>
