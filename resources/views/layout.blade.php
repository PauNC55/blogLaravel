<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=ç, initial-scale=1.0">
    <title>Blog</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.4.1/dist/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
</head>

<body>
    <nav class="navbar navbar-expand-lg navbar-light bg-light">
        <div style="display: flex; gap: 10px; margin: 10px;">
            <h4 style="margin-right: 40px;">Blog de Pau Navarro</h4>
            <div class="nav-item">
                <a href="{{route('posts.index')}}" class="nav-link">Inicio</a>
            </div>
            <div class="nav-item">
                <a href="{{route('posts.create')}}" class="nav-link">Crear un post</a>
            </div>
            <div class="nav-item">
                @if(auth()->check())
                    <a class="nav-link" href="{{ route('logout') }}">Logout</a>
                @else
                    <a class="nav-link" href="{{ route('login') }}">Login</a>
                @endif
            </div>
        </div>
    </nav>
    <main>
        @yield('contenido')
    </main>

</body>

</html>