<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title') - laravel app </title>
    <link rel="stylesheet" href="">
</head>
<body>
    <nav class>
        <div>
            
        </div>
    </nav>

    <ul>
        @if (auth()->check())
        <li>
            <p class=""> <b>{{ auth()->user()->name }}</b></p>
            
        </li>
           
        
        <li>
            <a href=" {{ route('login.destroy') }}">Log Out</a>
            
        </li>

        @else

        <li>
            <a href=" {{ route('login.index') }}">Log In</a>
            
        </li>
        <li>
            <a href="{{ route('register.index') }}">Registrar</a>
        </li>

        @endif
    </ul>

    @yield('content')
    
</body>
</html>