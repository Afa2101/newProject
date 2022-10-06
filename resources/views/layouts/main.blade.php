<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    @vite(['resources/sass/app.scss', 'resources/js/app.js'])
    <title>Document</title>
</head>
<body>
<div class="container">
    <div class="row">
        <ul class="nav">
            <li class="nav-item">
                <a class="nav-link active" href="{{route('main.index')}}">Main</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="{{route('contact.index')}}">Contacts</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="{{route('about.index')}}">About</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="{{route('posts.index')}}">Posts</a>
            </li>

            @can('view', auth()->user())
            <li class="nav-item">
                <a class="nav-link" href="{{route('admin.post.index')}}">Admin</a>
            </li>
            @endcan
        </ul>

    </div>
</div>
    @yield('content')
</body>
</html>
