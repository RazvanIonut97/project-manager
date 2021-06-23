<div class="w-full max-w-sm p-6 m-auto bg-white rounded-md shadow-md  mt-5">
    <h1 class="text-3xl font-semibold text-center text-gray-700 dark:text-white">Register</h1>
        <form action="{{ route('register') }}" method="post" wire:submit.prevent="onSubmit">
            @csrf
            <div class="mb-4">
                <label for="name">Name</label>
                <input wire:model="name" type="text"  placeholder="Your name"
                class="w-full px-4 py-2 mt-2 text-gray-700 bg-white border border-gray-300 
                rounded-md focus:border-blue-500 focus:outline-none focus:ring 
                @error('name') border-red-500 @enderror"  autocomplete="off">

                @error('name')
                    <div class="text-red-500 mt-2 text-sm">
                        {{ $message }}
                    </div>
                @enderror
            </div>

            <div class="mb-4">
                <label for="username" >Surname</label>
                <input wire:model="surname" type="text"placeholder="Surname" 
                class="w-full px-4 py-2 mt-2 text-gray-700 bg-white border border-gray-300 
                rounded-md focus:border-blue-500 focus:outline-none focus:ring @error('surname') border-red-500 
                @enderror"  autocomplete="off" >

                @error('surname')
                    <div class="text-red-500 mt-2 text-sm">
                        {{ $message }}
                    </div>
                @enderror
            </div>

            <div>
                <button type="submit"  class="w-full px-4 py-2 tracking-wide text-white transition-colors
                duration-200 transform bg-gray-700 rounded-md hover:bg-gray-600 
                focus:outline-none focus:bg-gray-600">Update</button>
            </div>
        </form>
    
        <p class="mt-8 text-xs font-light text-center text-gray-400"> Do you want to change your password? <a href="{{route('login')}}"
                class="font-medium text-gray-800 dark:text-gray-200 hover:underline">Change Password</a></p>
</div>