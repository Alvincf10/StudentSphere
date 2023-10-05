<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=Nunito" rel="stylesheet">

    {{-- tamplate --}}
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/js/bootstrap.bundle.min.js"></script>
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/@tabler/icons-webfont@latest/tabler-icons.min.css">
    <link rel="stylesheet" href="{{asset('tamplate/css/styles.min.css')}}">
    <link rel="shortcut icon" type="image/png" href="{{asset('image/logo.png')}}" />

    <!-- Scripts -->
    @vite(['resources/sass/app.scss','resources/sass/main.scss' , 'resources/js/app.js'])
</head>
<body>
    <div id="app">
        <main>
            <div class="page-wrapper" id="main-wrapper" data-layout="vertical" data-navbarbg="skin6" data-sidebartype="full"
            data-sidebar-position="fixed" data-header-position="fixed">
                <x-menu />
                <div class="body-wrapper">
                    @include('layouts.shared.header')
                    @yield('content')
                </div>
            </div>
        </main>
    </div>

    <script src="{{asset('tamplate/libs/jquery/dist/jquery.min.js')}}"></script>
    <script src="{{asset('tamplate/libs/bootstrap/dist/js/bootstrap.bundle.min.js')}}"></script>
    <script src="{{asset('tamplate/js/sidebarmenu.js')}}"></script>
    <script src="{{asset('tamplate/js/app.min.js')}}"></script>
    <script src="{{asset('tamplate/libs/apexcharts/dist/apexcharts.min.js')}}"></script>
    <script src="{{asset('tamplate/libs/simplebar/dist/simplebar.js')}}"></script>
    <script src="{{asset('tamplate/js/dashboard.js')}}"></script>
    <script src="{{asset('libs/jquery/dist/jquery.min.js')}}"></script>
    <script src="{{asset('libs/bootstrap/dist/js/bootstrap.bundle.min.js')}}"></script>
</body>
</html>
