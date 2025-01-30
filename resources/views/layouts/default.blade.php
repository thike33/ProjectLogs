<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>ProjectsLogs</title>
    @vite('resources/css/app.css')
</head>
<body class="">
<x-header/>

<main>
    @yield('content')
</main>
</body>
</html>
