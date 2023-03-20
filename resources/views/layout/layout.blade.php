<!DOCTYPE HTML>
<html>
<head>
    <title>@yield('page_title')</title>
    <meta charset="utf-8"/>
    <meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=no"/>
    <link rel="stylesheet" href="{{ asset('assets/css/main.css') }}"/>
</head>
<body class="is-preload">

<div id="wrapper">
    @include('components.header')
    @yield('content')
    @include('components.footer')
</div>
</body>
</html>
