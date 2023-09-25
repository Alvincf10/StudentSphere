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
    <link rel="stylesheet" href="{{asset('tamplate/css/styles.min.css')}}">
    <link rel="shortcut icon" type="image/png" href="{{asset('tamplate/images/logos/favicon.png')}}" />

    <!-- Scripts -->
    @vite(['resources/sass/app.scss', 'resources/js/app.js'])
</head>
<body>
    <div id="app">

        <main class="">
            @yield('content')
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
