@extends('layouts.app')

@section('content')
<div>
    <h1 class="text-3xl font-bold mb-4">Our Classes</h1>
    <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-4">
        @foreach($classes as $class)
            <div class="bg-white p-4 shadow rounded-lg">
                <h2 class="text-xl font-semibold">{{ $class->name }}</h2>
                <p>{{ $class->description }}</p>
                <p class="mt-2 text-blue-800">{{ $class->schedule }}</p>
            </div>
        @endforeach
    </div>
@endsection

