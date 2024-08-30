@extends('admin.dashboard')

@section('content')
<div class="bg-white p-4 shadow rounded-lg">
    <h1 class="text-3xl font-bold mb-4">Manage Classes</h1>
    <a href="{{ route('admin.classes.create') }}" class="bg-blue-800 text-white px-4 py-2 rounded hover:bg-blue-700 mb-4">Add New Class</a>
    <table class="w-full border-collapse">
        <thead>
            <tr class="bg-gray-200">
                <th class="border p-2">Class Name</th>
                <th class="border p-2">Description</th>
                <th class="border p-2">Actions</th>
            </tr>
        </thead>
        <tbody>
            @foreach($classes as $class)
                <tr>
                    <td class="border p-2">{{ $class->name }}</td>
                    <td class="border p-2">{{ $class->description }}</td>
                    <td class="border p-2">
                        <a href="{{ route('admin.classes.edit', $class->id) }}" class="text-blue-800 hover:underline">Edit</a>
                        <form action="{{ route('admin.classes.destroy', $class->id) }}" method="POST" style="display:inline;">
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

