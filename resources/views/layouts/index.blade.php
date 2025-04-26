<!DOCTYPE html>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Каталог Футболистов 3.0</title>
    <link href="{{ asset('css/style.css') }}" rel="stylesheet">
</head>
<body>
    <header>
        <h1>Каталог Футболистов 3.0</h1>
        <nav>
            <ul>
                <li><a href="{{ route('footbalers.index') }}">список футболистов</a></li>
            </ul>
        </nav>
    </header>

    <div class="container">
        @yield('content')  
    </div>

    <footer>
        <p>&copy; Каталог Футболистов 3.0</p>
    </footer>
</body>
</html>
