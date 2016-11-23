<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'SistemData') }}</title>

    <!-- Styles -->
    <link href="https://fonts.googleapis.com/css?family=Roboto+Slab" rel="stylesheet">
    <link href="/css/app.css" rel="stylesheet">

    <!-- Scripts -->
    <script>
        window.Laravel = <?php echo json_encode([
            'csrfToken' => csrf_token(),
        ]); ?>
    </script>

    <style>
    body {
      font-family: 'Roboto Slab', serif !important;
    }
    </style>

@yield('header')

</head>
<body>
    <div id="app">
        @include('layouts/navbar')

        @yield('content')
    </div>

    <!-- Scripts -->
    <script src="/js/app.js"></script>

    @yield('footer')
</body>
</html>
