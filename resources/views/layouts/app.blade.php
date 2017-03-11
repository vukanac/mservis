<!DOCTYPE html>
<html lang="{{ config('app.locale') }}">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'MService') }}</title>

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">

    <!-- Scripts -->
    <script>
        window.Laravel = {!! json_encode([
            'csrfToken' => csrf_token(),
        ]) !!};
    </script>
</head>
<body>
    <div id="app">
        @include('layouts.nav-top')

        <div class="container-fluid">
          <div class="row">
            <!-- leva navigacija - pocetak -->
            <div class="col-sm-3 col-md-2 sidebar">

              @if (!Auth::guest())

                @include('layouts.side-nav')

              @endif

            </div>
            <!-- leva navigacija - kraj -->

            <!-- desno - glavni sadrzaj = content -->
            <div class="col-sm-9 col-md-10 main">

              @yield('content')

            </div>
          </div>
        </div>

    </div>

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}"></script>
</body>
</html>
