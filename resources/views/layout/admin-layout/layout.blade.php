<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>@yield('name')</title>
    <link rel="stylesheet" href="{{asset('css/app.min.css')}}" id="app-style">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.13/css/select2.min.css"
        rel="stylesheet" type="text/css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css"
        rel="stylesheet" type="text/css">
    <link rel="stylesheet" href="{{ asset('css/vendor/jquery-jvectormap-1.2.2.css') }}" rel="stylesheet"
        type="text/css">
    <link rel="stylesheet" href="{{ asset('css/vendor/dataTables.bootstrap5.css') }}" rel="stylesheet" type="text/css">
    <link rel="stylesheet" href="{{ asset('css/vendor/responsive.bootstrap5.css') }}" rel="stylesheet" type="text/css">
    <link rel="stylesheet" href="{{ asset('css/icons.min.css') }}" rel="stylesheet" type="text/css">
    <link rel="stylesheet" href="{{ asset('node_modules/sweetalert2/dist/sweetalert2.min.css') }}" rel="stylesheet"
        type="text/css">
    <link rel="stylesheet" href="{{ asset('node_modules/animate.css/animate.min.css') }}" rel="stylesheet"
        type="text/css">
    <script href="{{ asset('js/jquery-3.6.1.min.js') }}"></script>

</head>

<body>
    <div class="wrapper">
        @include('layout.admin-layout.leftbar')
        <div class="content-page">
            <div class="content">
                @include('layout.admin-layout.topbar')
                <div class="container-fluid">

                    @yield('content')

                </div>

            </div>
            <footer class="footer">
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-md-6">
                            <script>
                            document.write(new Date().getFullYear())
                            </script> © Quản lý ký túc xá
                        </div>
                        <div class="col-md-6">
                            <div class="text-md-end footer-links d-none d-md-block">
                                <a href="javascript: void(0);">Về chúng tôi</a>
                                <a href="javascript: void(0);">Hỗ trợ</a>
                                <a href="javascript: void(0);">Liên hệ</a>
                            </div>
                        </div>
                    </div>
                </div>
            </footer>

        </div>
    </div>
</body>
@stack('after-js')
<script src="{{ asset('js/vendor.min.js') }}"></script>
<script src="{{ asset('js/app.min.js') }}"></script>
<script src="{{ asset('node_modules/sweetalert2/dist/sweetalert2.min.js') }}"></script>
<script src="{{ asset('js/vendor/jquery.dataTables.min.js') }}"></script>
<script src="{{ asset('js/vendor/dataTables.bootstrap5.js') }}"></script>
<script src="{{ asset('js/pages/demo.datatable-init.js') }}"></script>
<script src="{{ asset('js/vendor/jquery-jvectormap-1.2.2.min.js') }}"></script>
<script src="{{ asset('js/vendor/jquery-jvectormap-world-mill-en.js') }}"></script>
<!-- <script href="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.1/jquery.min.js"></script> -->

</html>