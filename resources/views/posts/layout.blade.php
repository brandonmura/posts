<!DOCTYPE html>
<html>
<head>
    <title>Laravel CRUD</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
</head>
<body>
<div class="container">
    <nav class="navbar navbar-expand-lg navbar-light bg-light">
        <a class="navbar-brand" href="{{ url('/') }}">Laravel CRUD</a>
        <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav">
                <li class="nav-item">
                    <a class="nav-link" href="{{ route('posts.index') }}">Posts</a>
                </li>
            </ul>
        </div>
    </nav>
    <main class="py-4">
        @yield('content')
    </main>
</div>
</body>
</html>
