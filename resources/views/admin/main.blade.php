<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <meta name="description" content="Admin Yawadvipa" />
    <meta name="author" content="Yawadvipa" />
    <link href="https://cdn.jsdelivr.net/npm/simple-datatables@latest/dist/style.css" rel="stylesheet" />
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.8.2/font/bootstrap-icons.css">
    {{-- CSS Bootstraps --}}
    <link href="{{ URL::asset('assets/css/styles.css') }}" rel="stylesheet" />
    <link href=" {{ mix('css/app.css') }}" rel="stylesheet">
    <link href=" {{ URL::asset('assets/css/admin.css') }}" rel="stylesheet">
    <title>Admin | {{ request()->segment(2) != null ? request()->segment(2) : 'Beranda' }}</title>
</head>

<body class="sb-nav-fixed">
    {{-- Ini Topbar --}}
    @include('admin.topbar')
    <div id="layoutSidenav">
        <div id="layoutSidenav_nav">
            <nav class="sb-sidenav accordion sb-sidenav-dark" id="sidenavAccordion">
                {{-- Ini Sidebar --}}
                @include('admin.sidebar')
            </nav>
        </div>
        <div id="layoutSidenav_content">
            <main>
                <div class="container-fluid px-4">
                    {{-- Ini Content --}}
                    @yield('content')
            </main>
            {{-- Ini Footer --}}
            @include('admin.footer')
        </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/simple-datatables@latest" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.8.0/Chart.min.js" crossorigin="anonymous"></script>
    <script src="{{ URL::asset('assets/js/scripts.js') }}"></script>
    <script src="{{ URL::asset('assets/js/datatables-simple-demo.js') }}"></script>
    <script src="{{ mix('js/app.js') }}"></script>
    <script src="{{ URL::asset('assets/js/admin.js') }}"></script>
</body>

</html>
