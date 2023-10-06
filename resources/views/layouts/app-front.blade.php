<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Student Sphere</title>

    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/@tabler/icons-webfont@latest/tabler-icons.min.css">
    <link rel="stylesheet" href="{{asset('tamplate/fo/css/bootstrap.min.css')}}">
    <link rel="stylesheet" href="{{asset('tamplate/fo/css/owl.carousel.min.css')}}">
    <link rel="stylesheet" href="{{asset('tamplate/fo/css/magnific-popup.css')}}">
    <link rel="stylesheet" href="{{asset('tamplate/fo/css/font-awesome.min.css')}}">
    <link rel="stylesheet" href="{{asset('tamplate/fo/css/themify-icons.css')}}">
    <link rel="stylesheet" href="{{asset('tamplate/fo/css/nice-select.css')}}">
    <link rel="stylesheet" href="{{asset('tamplate/fo/css/flaticon.css')}}">
    <link rel="stylesheet" href="{{asset('tamplate/fo/css/animate.css')}}">
    <link rel="stylesheet" href="{{asset('tamplate/fo/css/slicknav.css')}}">
    <link rel="stylesheet" href="{{asset('tamplate/fo/css/style.css')}}">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    @vite(['resources/sass/app.scss','resources/sass/main.scss' , 'resources/js/app.js'])
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
    <style>
        .body{
            font-family: "Poppins", sans-serif !important;
            font-weight: normal;
            font-style: normal;
        }
    </style>
</head>
<body>

    <main>
            @include('layouts.shared.header-frontOffice')
            @yield('content')
    </main>


    <script src="{{asset('tamplate/FO/js/vendor/modernizr-3.5.0.min.js')}}"></script>
    <script src="{{asset('tamplate/FO/js/vendor/jquery-1.12.4.min.js')}}"></script>
    <script src="{{asset('tamplate/FO/js/popper.min.js')}}"></script>
    <script src="{{asset('tamplate/FO/js/bootstrap.min.js')}}"></script>
    <script src="{{asset('tamplate/FO/js/owl.carousel.min.js')}}"></script>
    <script src="{{asset('tamplate/FO/js/isotope.pkgd.min.js')}}"></script>
    <script src="{{asset('tamplate/FO/js/ajax-form.js')}}"></script>
    <script src="{{asset('tamplate/FO/js/waypoints.min.js')}}"></script>
    <script src="{{asset('tamplate/FO/js/jquery.counterup.min.js')}}"></script>
    <script src="{{asset('tamplate/FO/js/imagesloaded.pkgd.min.js')}}"></script>
    <script src="{{asset('tamplate/FO/js/scrollIt.js')}}"></script>
    <script src="{{asset('tamplate/FO/js/jquery.scrollUp.min.js')}}"></script>
    <script src="{{asset('tamplate/FO/js/wow.min.js')}}"></script>
    <script src="{{asset('tamplate/FO/js/nice-select.min.js')}}"></script>
    <script src="{{asset('tamplate/FO/js/jquery.slicknav.min.js')}}"></script>
    <script src="{{asset('tamplate/FO/js/jquery.magnific-popup.min.js')}}"></script>
    <script src="{{asset('tamplate/FO/js/jquery.countdown.js')}}"></script>
    <script src="{{asset('tamplate/FO/js/plugins.js')}}"></script>
</body>
</html>
