<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="{{asset('css/app.css')}}">
    
    <title>Document</title>
</head>
<body class="bg-gray-100 font-mono">
    <nav class=" bg-gray-800  flex justify-between">
        <div class="flex items-center pl-5 font-extrabold text-white ">
            <h2>
                <a href="">Project Manager</a>
            </h2>
        </div>
        <ul class="flex items-center">
            <x-nav-link>
                Homepage
            </x-nav-link>
            <x-nav-link>
                Dashboard
            </x-nav-link>
            <x-nav-link>
                Projects
            </x-nav-link>
            
        </ul>
        <ul class="flex items-center">
            <x-nav-link>
                Razvan
            </x-nav-link>
            <x-nav-link>
                Register
            </x-nav-link>
            <x-nav-link>
                Login
            </x-nav-link>
            <x-nav-link>
                Logout
            </x-nav-link>
            
        </ul>
    </nav>
    @yield('content')
</body>
</html>