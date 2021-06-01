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
    <nav class=" bg-gray-800 relative flex items-center justify-between h-16">
        <div class="items-center pl-5 font-extrabold text-white ">
            <h2>
                <a href="">Project Manager</a>
            </h2>
        </div>
        <ul class="flex items-center">
            <x-nav-element   :active="request()->routeIs('home')">
                <x-nav-link href={{ route('home') }} >
                    {{ __('Home') }}
                </x-nav-link>
            </x-nav-element>

            <x-nav-element   :active="request()->routeIs('dashboard')">
                <x-nav-link :href="route('dashboard')" >
                    {{ __('Dashboard') }}
                </x-nav-link>
            </x-nav-element>

              <x-nav-element   :active="request()->routeIs('tasks')">
                <x-nav-link :href="route('tasks')" >
                    {{ __('Tasks') }}
                </x-nav-link>
            </x-nav-element>

        </ul>
        <ul class="flex items-center">
            <x-nav-element   :active="request()->routeIs('profile')">
                <x-nav-link :href="route('profile')" >
                    {{ __('Razvan') }}
                </x-nav-link>
            </x-nav-element>
            <x-nav-element  :active="request()->routeIs('login')">
                <x-nav-link :href="route('login')" >
                    {{ __('Login') }}
                </x-nav-link>
            </x-nav-element>

            <x-nav-element  :active="request()->routeIs('register')">
                <x-nav-link :href="route('register')" >
                    {{ __('Register') }}
                </x-nav-link>
            </x-nav-element>

            <x-nav-element >
                <x-nav-link >
                    {{ __('Logout') }}
                </x-nav-link>
            </x-nav-element>

        </ul>
    </nav>
    @yield('content')
</body>
</html>
