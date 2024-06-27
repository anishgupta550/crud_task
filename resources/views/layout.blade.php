<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>@yield('title')</title>
    <link rel="stylesheet" href="{{ asset('css/main.css') }}">
    <link rel="icon" href="https://anishgupta550.github.io/assets/img/favicon.png">

</head>
<body>
    <h1 class="bg-dark text-white py-3 text-center">Crud Operation</h1>
    <div class="container">
        <h1 class="text-center">@yield('heading')</h1>
        @yield('content')
    </div>
    <footer class="mt-5 bg-dark position-fixed bottom-0 w-100">
        <p class="mb-0 text-white text-center py-3">Developed By Anish Gupta</p>
    </footer>
    <script src="{{ asset('js/main.js') }}"></script>
</body>
</html>