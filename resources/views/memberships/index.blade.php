@extends('layouts.app')

@section('content')
<div>
    <h1 class="text-3xl font-bold mb-4">Membership Options</h1>
    <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-4">
        @foreach($memberships as $membership)
            <div class="bg-white p-4 shadow rounded-lg">
                <h2 class="text-xl font-semibold">{{ $membership->name }}</h2>
                <p>{{ $membership->description }}</p>
                <p class="mt-2 text-blue-800">${{ $membership->price }}</p>
                <a href="{{ route('purchase.membership', $membership->id) }}" class="bg-blue-800 text-white px-4 py-2 rounded hover:bg-blue-700">Purchase</a>
            </div>
        @endforeach
    </div>
@endsection

