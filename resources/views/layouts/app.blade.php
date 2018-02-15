<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="GG Admin">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>GG Admin</title>

    <!--begin::Web font -->
    <script src="https://ajax.googleapis.com/ajax/libs/webfont/1.6.16/webfont.js"></script>
    <script>
      WebFont.load({
        google: {"families":["Poppins:300,400,500,600,700","Roboto:300,400,500,600,700"]},
        active: function() {
            sessionStorage.fonts = true;
        }
      });
    </script>

    <!-- Styles -->
    <link href="{{ asset('/vendors/base/vendors.bundle.css') }}" rel="stylesheet" type="text/css" />
    <link href="{{ asset('/plugins/datatables/datatables.min.css') }}" rel="stylesheet" type="text/css" />
    <link href="{{ asset('/plugins/datatables/plugins/bootstrap/datatables.bootstrap.css') }}" rel="stylesheet" type="text/css" />
    <link href="{{ asset('/plugins/plugins.min.css') }}" rel="stylesheet" type="text/css" />
    <link href="{{ asset('/css/style.bundle.css') }}" rel="stylesheet" type="text/css" />
    <link href="{{ asset('/css/custom.css') }}" rel="stylesheet" type="text/css" />
    {{-- <link rel="shortcut icon" href="{{ asset('/assets/img/favicon.ico') }}" /> --}}
</head>
<body class="m-page--fluid m--skin- m-content--skin-light2 m-header--fixed m-header--fixed-mobile m-aside-left--enabled m-aside-left--skin-dark m-aside-left--offcanvas m-footer--push m-aside--offcanvas-default" />
    <div class="m-grid m-grid--hor m-grid--root m-page" id="app">
        @include('layouts.header')
        <div class="m-grid__item m-grid__item--fluid m-grid m-grid--ver-desktop m-grid--desktop m-body">
            @include('layouts.left-aside')
            <div class="m-grid__item m-grid__item--fluid m-wrapper">
                <div class="m-content">
                    @yield('content')
                </div>
            </div>
        </div>
    </div>
    @include('layouts.footer')
    <script type="text/javascript">
        var base_url = "{{ url('/') }}";
    </script>
    <!--begin::Base Scripts -->
    <script src="{{ asset('/vendors/base/vendors.bundle.js') }}" type="text/javascript"></script>
    <script src="{{ asset('/plugins/datatables/datatable.js') }}" type="text/javascript"></script>
    <script src="{{ asset('/plugins/datatables/datatables.min.js') }}" type="text/javascript"></script>
    <script src="{{ asset('/plugins/datatables/plugins/bootstrap/datatables.bootstrap.js') }}" type="text/javascript"></script>
    <script src="{{ asset('/js/scripts.bundle.js') }}" type="text/javascript"></script>
    <script src="{{ asset('/js/general.js') }}" type="text/javascript"></script>
    <!--end::Base Scripts -->

    <!-- Scripts -->
</body>
</html>
