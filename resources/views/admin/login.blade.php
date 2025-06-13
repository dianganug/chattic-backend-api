@extends('layouts.app')

@section('content')
<div class="container mx-auto max-w-md mt-10">
    <div class="bg-white p-8 rounded shadow">
        <h2 class="text-2xl font-bold mb-6 text-center">Admin Login</h2>
        @if($errors->any())
            <div class="mb-4 text-red-600">{{ $errors->first() }}</div>
        @endif
        <form method="POST" action="{{ url('admin/login') }}">
            @csrf
            <div class="mb-4">
                <label for="email" class="block mb-1">Email</label>
                <input id="email" type="email" name="email" value="{{ old('email', 'demo@smart-it.co.id') }}" required autofocus class="w-full border rounded px-3 py-2">
            </div>
            <div class="mb-4">
                <label for="password" class="block mb-1">Password</label>
                <input id="password" type="password" name="password" value="demo@2025!@#" required class="w-full border rounded px-3 py-2">
            </div>
            <div class="mb-4 flex items-center">
                <input type="checkbox" name="remember" id="remember" class="mr-2">
                <label for="remember">Remember Me</label>
            </div>
            <button type="submit" class="w-full bg-blue-600 text-white py-2 rounded">Login</button>
        </form>
    </div>
</div>
@endsection
