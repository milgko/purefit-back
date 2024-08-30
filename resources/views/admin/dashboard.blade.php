@extends('layouts.app')

@section('content')
<div class="bg-white p-4 shadow rounded-lg">
    <h1 class="text-3xl font-bold mb-4">Admin Dashboard</h1>
    <ul>
        <li><a href="{{ route('admin.classes.index') }}" class="text-blue-800 hover:underline">Manage Classes</a></li>
        <li><a href="{{ route('admin.memberships.index') }}" class="text-blue-800 hover:underline">Manage Memberships</a></li>
       
    </ul>
</div>
@endsection

