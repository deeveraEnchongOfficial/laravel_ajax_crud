<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <link href="{{ asset('https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.0.1/css/bootstrap.min.css') }}" rel="stylesheet">
    <link href="{{ asset('frontend/css/bootstrap5.min.css') }}" rel="stylesheet">
    <link href="{{ asset('frontend/css/custom.css') }}" rel="stylesheet">
</head>
<body>
    <div id="app">

        <main class="py-4">
            @yield('content')
        </main>

    </div>

    <!-- Scripts -->
    <script src="{{ asset('https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js') }}"></script>
    <script src="{{ asset('https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.0.1/js/bootstrap.bundle.min.js') }}"></script>
    @yield('scripts')

</body>
</html>