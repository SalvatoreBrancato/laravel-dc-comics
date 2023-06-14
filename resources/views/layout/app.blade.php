<!DOCTYPE html>
<html lang="it">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Comics</title>
    @vite('resources/js/app.js')
</head>
<body>
    <nav>
        @include('partials.header')
    </nav>
    <main>
        @yield('comics')
    </main>
    <footer>
        @include('partials.footer')
    </footer>
</body>
</html>