@extends('admin.dashboard')

@section('content')
<div class="bg-white p-4 shadow rounded-lg">
    <h1 class="text-3xl font-bold mb-4">Manage Memberships</h1>
    <a href="{{ route('admin.memberships.create') }}" class="bg-blue-800 text-white px-4 py-2 rounded hover:bg-blue-700 mb-4">Add New Membership</a>
    <table class="w-full border-collapse">
        <thead>
            <tr class="bg-gray-200">
                <th class="border p-2">Membership Name</th>
                <th class="border p-2">Description</th>
                <th class="border p-2">Price</th>
                <th class="border p-2">Actions</th>
            </tr>
        </thead>
        <tbody>
            @foreach($memberships as $membership)
                <tr>
                    <td class="border p-2">{{ $membership->name }}</td>
                    <td class="border p-2">{{ $membership->description }}</td>
                    <td class="border p-2">${{ $membership->price }}</td>
                    <td class="border p-2">
                        <a href="{{ route('admin.memberships.edit', $membership->id) }}" class="text-blue-800 hover:underline">Edit</a>
                        <form action="{{ route('admin.memberships.destroy', $membership->id) }}" method="POST" style="display:inline;">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="text-red-600 hover:underline">Delete</button>
                        </form>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
</div>
@endsection
