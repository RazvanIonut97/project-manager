<div class="flex justify-center mt-5">
    <div class="w-4/12 bg-white p-6 rounded-lg">
        <form action="{{ route('register') }}" method="post" wire:submit.prevent="onSubmit">
            @csrf
            <div class="mb-4">
                <label for="name" class="sr-only">Name</label>
                <input wire:model="name" type="text" name="name" id="name" placeholder="Your name"
                class="bg-gray-100 border-2 w-full p-4 rounded-lg 
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
                class="bg-gray-100 border-2 w-full p-4 rounded-lg @error('surname') border-red-500 
                @enderror" value="{{ old('surname') }}"autocomplete="off">

                @error('surname')
                    <div class="text-red-500 mt-2 text-sm">
                        {{ $message }}
                    </div>
                @enderror
            </div>

            <div class="mb-4">
                <label for="email" class="sr-only">Email</label>
                <input wire:model="email" type="text" name="email" id="email" placeholder="Your email" class="bg-gray-100 border-2 w-full p-4 rounded-lg @error('email') border-red-500 @enderror" value="{{ old('email') }}">

                @error('email')
                    <div class="text-red-500 mt-2 text-sm">
                        {{ $message }}
                    </div>
                @enderror
            </div>

            <div class="mb-4">
                <label for="password" class="sr-only">Password</label>
                <input  wire:model="password" type="password" name="password" id="password" placeholder="Choose a password" class="bg-gray-100 border-2 w-full p-4 rounded-lg @error('password') border-red-500 @enderror" value="">

                @error('password')
                    <div class="text-red-500 mt-2 text-sm">
                        {{ $message }}
                    </div>
                @enderror
            </div>

            <div class="mb-4">
                <label for="password_confirmation" class="sr-only">Password again</label>
                <input wire:model="password_confirmation"type="password" name="password_confirmation" id="password_confirmation" placeholder="Repeat your password" class="bg-gray-100 border-2 w-full p-4 rounded-lg @error('password_confirmation') border-red-500 @enderror" value="">

                @error('password_confirmation')
                    <div class="text-red-500 mt-2 text-sm">
                        {{ $message }}
                    </div>
                @enderror
            </div>

            <div>
                <button type="submit" class="bg-gray-800 text-white px-4 py-3 rounded font-medium w-full">Register</button>
            </div>
        </form>
    </div>
</div>