<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">


    <title>@if (trim($__env->yieldContent('title')))@yield('title') | @endif {{ config('app.name', 'Easy Web Tour') }}</title>


    <link rel="stylesheet" href="{{ mix('/css/app.css') }}">

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js"></script>

    <script src="/js/custom.js"></script>
</head>
<body>

    <div id="doc">
        @yield('content')
    </div>

    <!-- Modals -->
    <div class="modals">
        @yield('modals')
    </div>

    <!-- Scripts -->
    <script src="{{ mix('js/app.js') }}" defer></script>

    @yield('footer_scripts')
</body>
</html>
