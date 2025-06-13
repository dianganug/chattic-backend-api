@extends('layouts.app')

@section('content')
<div class="container mx-auto max-w-md mt-10">
    <div class="bg-white p-8 rounded shadow">
        <h2 class="text-2xl font-bold mb-6 text-center">Admin Dashboard</h2>
        <div class="mb-4 text-green-600">Welcome, {{ Auth::guard('admin')->user()->name }}!</div>
        <form method="POST" action="{{ route('admin.logout') }}">
            @csrf
            <button type="submit" class="w-full bg-red-600 text-white py-2 rounded">Logout</button>
        </form>
    </div>
</div>
@endsection
