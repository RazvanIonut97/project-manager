<nav class=" bg-gray-800 relative flex items-center justify-between h-16">
    <div class="items-center pl-5 font-extrabold text-white ">
        <h2>
            <a href="">Project Manager</a>
        </h2>
    </div>
    
@if (auth()->user())
<ul class="flex items-center">

    <x-nav-element  :href="route('home')" :active="request()->routeIs('home')">
            {{ __('Home') }}
    </x-nav-element>

    <x-nav-element  :href="route('dashboard')" :active="request()->routeIs('dashboard')">
        {{ __('Dashboard') }}
    </x-nav-element>

    <x-nav-element :href="route('tasks')" :active="request()->routeIs('tasks')">
        {{ __('Tasks') }}
    </x-nav-element>

</ul>

<ul class="flex items-center mr-3">
    <x-nav-element :href="route('profile')" :active="request()->routeIs('profile')">
        {{ __('Razvan') }}
    </x-nav-element>
    <li class="text-gray-200 hover:bg-red-500 hover:text-white px-3  py-2 rounded-md ml-3">
        <a href="#">
            Logout
        </a>
    </li>

</ul>
@else
<ul class="flex items-center mr-3">
    <x-nav-element :href="route('login')" :active="request()->routeIs('login')">
        {{ __('Login') }}
    </x-nav-element>

    <x-nav-element :href="route('register')" :active="request()->routeIs('register')">
            {{ __('Register') }}
    </x-nav-element>
</ul>
@endif
</nav>