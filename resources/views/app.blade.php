<!DOCTYPE html>
<html>
<head>
    <title>Comics Archive con Laravel</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
</head>
<body>
    <div class="container">
        <header>
            <h1 class="text-center text-danger mt-2 mb-5">Comics Archive</h1>
            <nav>
                <a href="{{ route('comics.index') }}">Home</a>
                <a href="{{ route('comics.create') }}">Add Comic</a>
            </nav>
        </header>
        <main>
            @yield('content')
        </main>
        <footer>
            <p>&copy; 2024 Comics Archive</p>
        </footer>
    </div>
</body>
</html>
