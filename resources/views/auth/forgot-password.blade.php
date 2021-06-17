@extends('layouts.app')

@section('content')

<div class="w-full max-w-sm p-6 m-auto bg-white rounded-md shadow-md dark:bg-gray-800 mt-5">
    <h1 class="text-3xl font-semibold text-center text-gray-700 dark:text-white">Reset Password</h1>
    @if (session('status'))
    <div class=" bg-red-500 w-full mt-4">
        <p class="block w-full px-4 py-2 mt-2 text-gray-700 border border-gray-300 rounded-md ">
            {{ session('status')}}
        </p>
    </div>
    @endif
    <form class="mt-6" method="POST" action="{{route('password.request')}}">
        @csrf
        <div>
            <label for="email" class="block text-sm text-gray-800 dark:text-gray-200">Enter your email</label>
            <input type="email" id="email" name="email" class="block w-full px-4 py-2 mt-2 text-gray-700 bg-white border border-gray-300 
            rounded-md focus:border-blue-500 focus:outline-none focus:ring  
            @error('email') border-red-500 @enderror">
            @error('email')
            <div class="text-red-500 mt-2 text-sm">
                {{ $message }}
            </div>
            @enderror
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
</div>

@endsection