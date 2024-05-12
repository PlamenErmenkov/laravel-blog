<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>@yield('title')</title>
    <!-- Tells blade php that there is a hole with the key 'title'; -->

    @vite(['resources/css/app.css', 'resources/js/app.js', 'resources/css/logo.css'])
</head>

<body>
    <header>
        <!-- </> -->
        <div class="text text--knockout">
            <span>&lt;/&gt;</span>
            <span>WebThings</span>
        </div>
        <nav>
            <a href="#">Newsletter</a>
            <a href="#">About</a>
            <a href="#">Contact</a>
        </nav>
    </header>

    <main>
        @yield('content')
    </main>

    <footer>

    </footer>
</body>

</html>
