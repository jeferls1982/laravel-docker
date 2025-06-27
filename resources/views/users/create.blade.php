@extends('layouts.app')

@section('content')
    <h1 class="text-2xl font-bold mb-4">Create User</h1>
    <form method="POST" action="{{ route('users.store') }}" class="space-y-4">
        @csrf
        <div>
            <label class="block mb-1">Name</label>
            <input type="text" name="name" class="border w-full p-2" value="{{ old('name') }}">
            @error('name')
                <div class="text-red-500 text-sm">{{ $message }}</div>
            @enderror
        </div>
        <div>
            <label class="block mb-1">Email</label>
            <input type="email" name="email" class="border w-full p-2" value="{{ old('email') }}">
            @error('email')
                <div class="text-red-500 text-sm">{{ $message }}</div>
            @enderror
        </div>
        <div>
            <label class="block mb-1">Password</label>
            <input type="password" name="password" class="border w-full p-2">
            @error('password')
                <div class="text-red-500 text-sm">{{ $message }}</div>
            @enderror
        </div>
        <button type="submit" class="bg-blue-500 text-white px-4 py-2 rounded">Save</button>
    </form>
@endsection
