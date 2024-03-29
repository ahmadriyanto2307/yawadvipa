<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">

    <link rel="shortcut icon" href="{{ asset('assets/files/pictures/yawadvipa.png') }}" type="image/png">
    {{-- Aos Animation --}}
    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
    {{-- Animate --}}
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css" />
    {{-- Icon Bootstrap --}}
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.8.1/font/bootstrap-icons.css">
    <!-- Bootstrap CSS -->
    <link href=" {{ asset('css/app.css') }}" rel="stylesheet">
    {{-- CSS --}}
    <link rel="stylesheet" href="{{ URL::asset('assets/css/style.css?v=1.0.1.25') }}">
    {{-- ?v=1.0.0.7 --}}
    {{-- Font --}}
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Poppins">
    <style>
        body {
            font-family: 'Poppins';
        }
    </style>
    <script src="https://aframe.io/releases/1.3.0/aframe.min.js"></script>
    @yield('script')
    <title>Yawadvipa | Home</title>
</head>

<body>
    <!-- Navigation -->
    @include('layouts.include.header')

    @yield('content')

    <!-- Footer -->
    @include('layouts.include.footer')

    <!-- Back to top button -->
    <button type="button" class="btn btn-to-up btn-floating btn-lg" id="btn-back-to-top">
        <i class="bi bi-arrow-up-circle"></i>
    </button>

    <!-- Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-pprn3073KE6tl6bjs2QrFaJGz5/SUsLqktiwsUTF55Jfv3qYSDhgCecCxMW52nD2" crossorigin="anonymous"></script>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>

    <script src="{{ URL::asset('assets/js/main.js?v=0.0.0.1') }}"></script>
    {{-- <script src="{{ mix('js/popper.js') }}"></script> --}}
    {{-- <script src="{{ mix('js/app.js') }}"></script> --}}
    {{-- Aos Animate JS --}}
    <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>

</body>

</html>
