@extends('layouts.app')

@section('content')
<livewire:profile :user="auth()->user()"/>
@endsection