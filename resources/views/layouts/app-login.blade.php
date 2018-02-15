<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
</head>
<body class="body-login">
    <div id="app">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <a class="navbar-brand" href="{{ url('/') }}" style="width: 100%; margin: 60px auto 20px; padding: 15px; text-align: center; font-size: 28px;">
                        {{ config('app.name', 'Laravel') }}
                    </a>
                </div>
            </div>
        </div>

        @yield('content')
    </div>

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}"></script>
</body>
</html>
