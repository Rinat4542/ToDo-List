<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <script src="{{ asset('assets/js/bootstrap.min.js') }}" defer></script>
    <script src="{{ asset('assets/js/jquery-3.7.0.min.js') }}" defer></script>
    <link rel="stylesheet" href="{{ asset("assets\css\bootstrap.min.css") }}">
    <title>ToDo List</title>
</head>
<header>
    @include('components.navbar')
</header>
<body>
    <div class="container">
        @yield('main')
    </div>
</body>
<script src="{{ asset('assets/js/script.js') }}" defer></script>
</html>
