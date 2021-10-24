<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-F3w7mX95PdgyTmZZMECAngseQB83DfGTowi0iMjiWaeVhAn4FJkqJByhZMI3AhiU" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-/bQdsTh/da6pkI1MST/rWKFNjaCP5gBSY4sEBT38Q/9RBh9AH40zEOg7Hlq2THRZ" crossorigin="anonymous"></script>
    <link href="css/style.css" rel="stylesheet">
    <title>IPT102 Midterm</title>
</head>

<style>
.bg{
    
    background-image: url("/img/bg.png");
    background-size: cover;
   
}
</style>

<body class="bg">
    @if(session('Error'))
        <div class="alert alert-danger" role="alert">
            <div class="container">
                {{ session('Error') }}
            </div>
        </div>
    @endif

    @if(session('Message'))
        <div class="alert alert-success" role="alert">
            <div class="container">
                {{ session('Message') }}
            </div>
        </div>
    @endif

    @if(session('errors'))
        <div class="alert alert-warning" role="alert">
            <div class="container">
                Please input the following fields:
                <ul>
                    @foreach(session('errors')->all() as $error)
                        <li>{{$error}}</li>
                    @endforeach
                </ul>
            </div>
        </div>
    @endif

    <nav class="navbar navbar-expand-lg navbar-light" style="background-color: #5C7AEA;">
        <div class="container">
            <a class="navbar-brand text-white">IPT102 Project 4</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                @if(Auth::check())
                    <li class="nav-item">
                        <a class="text-white nav-link py-3 px-0 px-lg-3 rounded" aria-current="page" href="/dashboard">Dashboard</a>
                    </li>
                    <li class="nav-item mx-0 mx-lg-1 dropdown">
                       <a class="nav-link dropdown-toggle text-white nav-link py-3 px-0 px-lg-3 rounded" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                    <i class="far fa-list-alt"></i> Category
                        </a>
                        <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                            @foreach(App\Models\Category::get() as $category)
                            <li>
                                <a class="dropdown-item" href="/categories/{{$category->id}}">{{$category->category}}</a>
                            </li>
                            @endforeach
                        </ul>
                    </li>
                    <li class="nav-item mx-0 mx-lg-1"><a class="text-white nav-link py-3 px-0 px-lg-3 rounded" href="/authors"><i class="fas fa-users"></i> Authors</a></li>
                            <li class="nav-item">
                                <a class="text-white nav-link py-3 px-0 px-lg-3 rounded" href="/logout">Logout</a>
                            </li>
                        @else
                            <li class="nav-item">
                                <a class="text-white nav-link py-3 px-0 px-lg-3 rounded" style="margin-left:1rem;" aria-current="page" href="/login">Login</a>
                            </li>
                            <li class="nav-item">
                                <a class="text-white nav-link py-3 px-0 px-lg-3 rounded" style="margin-left:5px;" aria-current="page" href="/register">Register</a>
                            </li>
                        @endif
                </ul>
            </div>
        </div>
    </nav>

    <div>
        <div class="container">
            @yield('content')
        </div>
    </div>

</body>
</html>