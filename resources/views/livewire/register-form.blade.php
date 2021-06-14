<div class="w-full max-w-sm p-6 m-auto bg-white rounded-md shadow-md  mt-5">
    <h1 class="text-3xl font-semibold text-center text-gray-700 dark:text-white">Register</h1>
        <form action="{{ route('register') }}" method="post" wire:submit.prevent="onSubmit">
            @csrf
            <div class="mb-4">
                <label for="name" class="sr-only">Name</label>
                <input wire:model="name" type="text" name="name" id="name" placeholder="Your name"
                class="w-full px-4 py-2 mt-2 text-gray-700 bg-white border border-gray-300 
                rounded-md focus:border-blue-500 focus:outline-none focus:ring 
                @error('name') border-red-500 @enderror" value="{{ old('name') }}" autocomplete="off">

                @error('name')
                    <div class="text-red-500 mt-2 text-sm">
                        {{ $message }}
                    </div>
                @enderror
            </div>

            <div class="mb-4">
                <label for="username" class="sr-only">Surname</label>
                <input wire:model="surname" type="text" name="surname" id="surname" placeholder="Surname" 
                class="w-full px-4 py-2 mt-2 text-gray-700 bg-white border border-gray-300 
                rounded-md focus:border-blue-500 focus:outline-none focus:ring @error('surname') border-red-500 
                @enderror" value="{{ old('surname') }}"autocomplete="off">

                @error('surname')
                    <div class="text-red-500 mt-2 text-sm">
                        {{ $message }}
                    </div>
                @enderror
            </div>

            <div class="mb-4">
                <label for="email" class="sr-only">Email</label>
                <input wire:model="email" type="text" name="email" id="email" placeholder="Your email" 
                class="w-full px-4 py-2 mt-2 text-gray-700 bg-white border border-gray-300 
                rounded-md focus:border-blue-500 focus:outline-none focus:ring @error('email') border-red-500 @enderror" value="{{ old('email') }}">

                @error('email')
                    <div class="text-red-500 mt-2 text-sm">
                        {{ $message }}
                    </div>
                @enderror
            </div>

            <div class="mb-4">
                <label for="password" class="sr-only">Password</label>
                <input  wire:model="password" type="password" name="password" id="password" 
                placeholder="Choose a password" class="w-full px-4 py-2 mt-2 text-gray-700 bg-white border border-gray-300 
                rounded-md focus:border-blue-500 focus:outline-none focus:ring @error('password') border-red-500 @enderror" value="">

                @error('password')
                    <div class="text-red-500 mt-2 text-sm">
                        {{ $message }}
                    </div>
                @enderror
            </div>

            <div class="mb-4">
                <label for="password_confirmation" class="sr-only">Password again</label>
                <input wire:model="password_confirmation"type="password" name="password_confirmation" 
                id="password_confirmation" placeholder="Repeat your password" 
                class="w-full px-4 py-2 mt-2 text-gray-700 bg-white border border-gray-300 
                rounded-md focus:border-blue-500 focus:outline-none focus:ring @error('password_confirmation') border-red-500 @enderror" value="">

                @error('password_confirmation')
                    <div class="text-red-500 mt-2 text-sm">
                        {{ $message }}
                    </div>
                @enderror
            </div>

            <div>
                <button type="submit"  class="w-full px-4 py-2 tracking-wide text-white transition-colors
                duration-200 transform bg-gray-700 rounded-md hover:bg-gray-600 
                focus:outline-none focus:bg-gray-600">Register</button>
            </div>
        </form>
    
        <p class="mt-8 text-xs font-light text-center text-gray-400"> Alleready have an account? <a href="{{route('login')}}"
                class="font-medium text-gray-800 dark:text-gray-200 hover:underline">Login</a></p>
</div>