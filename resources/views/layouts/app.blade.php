<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>@yield('title')</title>

    <!-- Fonts -->
    <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">


    @yield('style')

    <link href="/css/bootstrap.min.css" id="bootstrap-style" rel="stylesheet" type="text/css" />
    <!-- Icons Css -->
    <link href="/css/icons.min.css" rel="stylesheet" type="text/css" />
    <!-- App Css-->
    <link href="/css/app.min.css" id="app-style" rel="stylesheet" type="text/css" />
    <style>
        .price {
            font-weight: bold;
            font-size: 23px;
        }
    </style>
</head>

<body>

    @include('inc.header')

    <div class="main-contant">

        @yield('content')
    </div>


    <!-- @include('inc.footer') -->

    <script src="/js/jquery.min.js"></script>
    <script src="/js/pages/fontawesome.init.js"></script>
    <script src="/js/bootstrap.js"></script>

    @yield('script')

    
</body>

</html>