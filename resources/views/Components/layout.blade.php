<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <title>@yield('title')</title>
    @vite(['resources/css/app.css'])
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
          integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
</head>
<body>
@include('inc.header')
<div class="d-flex">
    <div class="d-flex flex-column flex-shrink-0 p-3 " style="width: 280px;">
        @include('inc.aside')
    </div>

    <div class="p-3 p-3-text">
        {{ $slot }}
    </div>
</div>

@include('inc.footer')
</body>
</html>
