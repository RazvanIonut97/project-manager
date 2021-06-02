<div class="flex justify-center px-6 my-6">
    <div class="w-5/12 bg-white p-5 rounded">
        <h3 class="pt-2 text-2xl text-center">Create an Account!</h3>


        <form class="px-6 pt-4 pb-6 mb-4 bg-white rounded" wire:submit.prevent="onSubmit">

            <div class="mb-4 md:flex md:justify-between">

                <div class="mb-4 md:mr-2 ">
                    <label class="block mb-2 text-sm font-bold text-gray-700 " for="name">
                        First Name
                    </label>
                    <input  wire:model="name" autocomplete="off"
                        class="w-full px-3 py-2 text-sm leading-tight text-gray-700 border rounded shadow 
                        appearance-none focus:outline-none focus:shadow-outline @error('name') border-red-500 @enderror"
                        id="name" type="text" placeholder="First Name" />
                        @error('name')  <p class="text-xs italic text-red-500">{{$message}}</p> @enderror
                </div>

                <div class="md:ml-2">
                    <label class="block mb-2 text-sm font-bold text-gray-700" for="surname">
                        Last Name
                    </label>
                    <input  wire:model="surname" autocomplete="off"
                        class="w-full px-3 py-2 text-sm leading-tight text-gray-700 border rounded
                         shadow appearance-none focus:outline-none focus:shadow-outline @error('surname') border-red-500 @enderror"
                        id="surname" type="text" placeholder="Last Name" />
                        @error('surname')  <p class="text-xs italic text-red-500">{{$message}}</p> @enderror
                </div>

            </div>

            <div class="mb-4">
                <label class="block mb-2 text-sm font-bold text-gray-700" for="email">
                    Email
                </label>
                <input  wire:model="email"  autocomplete="off"
                    class="w-full px-3 py-2 mb-3 text-sm leading-tight text-gray-700 border rounded
                     shadow appearance-none focus:outline-none focus:shadow-outline @error('email') border-red-500 @enderror"
                    id="email" type="email" placeholder="Email" />
                    @error('email')  <p class="text-xs italic text-red-500">{{$message}}</p> @enderror
            </div>
            <div class="mb-4 md:flex md:justify-between">
                <div class="mb-4 md:mr-2 md:mb-0">
                    <label class="block mb-2 text-sm font-bold text-gray-700" for="password">
                        Password
                    </label>
                    <input  wire:model="password"
                        class="w-full px-3 py-2 mb-3 text-sm leading-tight text-gray-700
                         border  rounded shadow appearance-none focus:outline-none focus:shadow-outline @error('password') border-red-500 @enderror"
                        id="password" type="password" placeholder="******************" />
                        @error('password')  <p class="text-xs italic text-red-500">{{$message}}</p> @enderror
                 
                </div>
                <div class="md:ml-2">
                    <label class="block mb-2 text-sm font-bold text-gray-700" for="password_confirmation">
                        Confirm Password
                    </label>
                    <input  wire:model="password_confirmation"
                        class="w-full px-3 py-2 mb-3 text-sm leading-tight text-gray-700 
                        border rounded shadow appearance-none focus:outline-none focus:shadow-outline @error('password_confirmation') border-red-500 @enderror"
                        id="password_confirmation" type="password" placeholder="******************" />
                        @error('password_confirmation')  <p class="text-xs italic text-red-500">{{$message}}</p> @enderror
                </div>
            </div>
            <div class="mb-6 text-center">
                <button
                    class="w-full px-4 py-2 font-bold text-white bg-blue-500 rounded-full hover:bg-blue-700 focus:outline-none focus:shadow-outline"
                    type="submit">
                    Register Account
                </button>
            </div>
            <hr class="mb-6 border-t" />
            <div class="text-center">
                <a class="inline-block text-sm text-blue-500 align-baseline hover:text-blue-800" href="#">
                    Forgot Password?
                </a>
            </div>
            <div class="text-center">
                <a class="inline-block text-sm text-blue-500 align-baseline hover:text-blue-800" href="./index.html">
                    Already have an account? Login!
                </a>
            </div>
        </form>
    </div>
</div>
