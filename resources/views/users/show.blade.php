@extends('layouts.app')

@section('content')
    <h1 class="text-2xl font-bold mb-4">User Details</h1>
    <p><strong>ID:</strong> {{ $user->id }}</p>
    <p><strong>Name:</strong> {{ $user->name }}</p>
    <p><strong>Email:</strong> {{ $user->email }}</p>
    <a href="{{ route('users.edit', $user) }}" class="text-indigo-500">Edit</a>
@endsection
