<div class="w-full max-w-sm p-6 m-auto bg-white rounded-md shadow-md dark:bg-gray-800 mt-5">
    <h1 class="text-3xl font-semibold text-center text-gray-700 dark:text-white">Login</h1>
    @if (session('status'))
    <div class=" bg-red-500 w-full mt-4">
        <p class="block w-full px-4 py-2 mt-2 text-gray-700 bg-red-500 border border-gray-300 rounded-md ">
            {{ session('status')}}
        </p>
    </div>
    @endif
    <form class="mt-6" wire:submit.prevent="onSubmit">
        <div>
            <label for="username" class="block text-sm text-gray-800 dark:text-gray-200">Email</label>
            <input wire:model="email" type="text" class="block w-full px-4 py-2 mt-2 text-gray-700 bg-white border border-gray-300 
            rounded-md focus:border-blue-500 focus:outline-none focus:ring  
            @error('email') border-red-500 @enderror"value="{{ old('email') }}" autocomplete="off">
            @error('email')
            <div class="text-red-500 mt-2 text-sm">
                {{ $message }}
            </div>
            @enderror
        </div>

        <div class="mt-4">
            <div class="flex items-center justify-between">
                <label for="password" class="block text-sm text-gray-800 ">Password</label>
                <a href="{{route('password.request')}}" class="text-xs text-gray-600  hover:underline">Forget Password?</a>
            </div>

            <input type="password" wire:model="password"
                class="block w-full px-4 py-2 mt-2 text-gray-700 bg-white border border-gray-300 rounded-md
                 focus:border-blue-500  focus:outline-none focus:ring @error('password') border-red-500 @enderror"value="{{ old('email') }}" autocomplete="off">
                 @error('password')
                 <div class="text-red-500 mt-2 text-sm">
                     {{ $message }}
                 </div>
                 @enderror
        </div>

        <div class="flex items-center  text-gray-800 mt-2">
            <input wire:model="remember" type="checkbox" name="remember" id="remember" class="mr-2 ">
            <label for="remember" class="text-sm">Remember me</label>
        </div>
        <div class="mt-6">
            <button
                class="w-full px-4 py-2 tracking-wide text-white transition-colors
                 duration-200 transform bg-gray-700 rounded-md hover:bg-gray-600 
                 focus:outline-none focus:bg-gray-600">
                Login
            </button>
        </div>
    </form>
    <p class="mt-8 text-xs font-light text-center text-gray-400"> Don't have an account? <a href="{{route('register')}}"
            class="font-medium text-gray-800 dark:text-gray-200 hover:underline">Create One</a></p>
</div>
