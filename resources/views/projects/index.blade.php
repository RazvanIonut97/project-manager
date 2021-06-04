@extends('layouts.app')

@section('content')

<button onclick="Livewire.emit('openModal', 'add-project')" class="bg-red-800 text-white px-4 py-3 rounded font-medium ">Open Modal</button>
@endsection