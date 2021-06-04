<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="{{asset('css/app.css')}}">
    @if(request()->routeIs('dashboard'))
    <script src="https://cdn.jsdelivr.net/gh/alpinejs/alpine@v2.x.x/dist/alpine.min.js" defer></script>
    @endif
    <title>Document</title>
    @livewireStyles
</head>
<body class="bg-gray-400 font-mono">
    <x-nav-bar/>
    @yield('content')

    @if(request()->routeIs('dashboard'))
    @livewire('livewire-ui-modal')
    @livewireUIScripts
    @endif

    @livewireScripts
</body>
</html>
