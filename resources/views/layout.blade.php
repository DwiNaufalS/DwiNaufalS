<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="{{asset('assets/css/style.css')}}">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="shortcut icon" href="{{asset('assets\img\rmv.png')}}" type="image/x-icon">
    <title>Todo App</title>
</head>
<body>
@if (Auth::check())
    <nav class="navbar navbar-expand-lg w-100" id="p" style="background-color: azure;">
    <div class="container">
            <a class="navbar-brand" href="/dashboard">Todo App</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav" style="font-size: 19px">
                <ul class="navbar-nav">
                    <li class="nav-item">
                        <a class="nav-link" href="/data">Data</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="/create">Create</a>
                    </li>
                    <li class="nav-item" style="margin-left: 300%;">
                        <a class="nav-link" href="/logout"><i class="fa fa-sign-out" style="font-size:30px"></i></a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="/logout">Logout</a>
                    </li>
                </ul>
            </div>
            </div>
        </div>
        </nav>
    </div>
    @endif
@yield('content')
</body>
</html>