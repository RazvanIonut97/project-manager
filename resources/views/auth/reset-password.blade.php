@extends('layouts.app')

@section('content')

<div class="w-full max-w-sm p-6 m-auto bg-white rounded-md shadow-md  mt-5">
    <h1 class="text-3xl font-semibold text-center text-gray-700 dark:text-white">Reset Password</h1>
    @if (session('status'))
    <div class=" bg-red-500 w-full mt-4">
        <p class="block w-full px-4 py-2 mt-2 text-gray-700 bg-red-500 border border-gray-300 rounded-md ">
            {{ session('status')}}
        </p>
    </div>
    @endif
        <form action="{{ route('password.update') }}" method="POST">
            @csrf
            <input type="hidden" name="token" value="{{$token}}">
            <div class="mb-4">
                <label for="email" class="sr-only">Email</label>
                <input type="text" name="email" id="email" placeholder="Your email" 
                class="w-full px-4 py-2 mt-2 text-gray-700 bg-white border border-gray-300 
                rounded-md focus:border-blue-500 focus:outline-none focus:ring "  readonly value="{{$_GET['email']}}">

            </div>

            <div class="mb-4">
                <label for="password" class="sr-only">Password</label>
                <input type="password" name="password" id="password" 
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
                <input type="password" name="password_confirmation" 
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
                focus:outline-none focus:bg-gray-600">Reset</button>
            </div>
        </form>
</div>
@endsection