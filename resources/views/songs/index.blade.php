@extends('layouts.app')

@section('title', 'All Songs')

@section('content')
    <div class="flex justify-between items-center mb-6">
        <h2 class="text-2xl font-bold">All Songs</h2>

        <a href="{{ route('songs.create') }}" dusk="to-create"
           class="px-4 py-2 bg-green-500 text-white font-semibold rounded hover:bg-green-600 transition">
            Add New Song
        </a>
    </div>

    <!-- Flash message -->
    @if(session('success'))
        <div
            x-data="{ show: true }"
            x-show="show"
            x-init="setTimeout(() => show = false, 3000)"
            class="bg-green-100 border border-green-400 text-green-700 px-4 py-2 rounded mb-4"
        >
            {{ session('success') }}
        </div>
    @endif

    <div class="overflow-x-auto bg-white rounded shadow-md">
        <table class="min-w-full divide-y divide-gray-200">
            <thead class="bg-gray-200">
                <tr>
                    <th class="px-6 py-3 text-left text-xs font-medium text-gray-700 uppercase tracking-wider">ID</th>
                    <th class="px-6 py-3 text-left text-xs font-medium text-gray-700 uppercase tracking-wider">Title</th>
                    <th class="px-6 py-3 text-left text-xs font-medium text-gray-700 uppercase tracking-wider">Artist</th>
                    <th class="px-6 py-3 text-left text-xs font-medium text-gray-700 uppercase tracking-wider">Album</th>
                    <th class="px-6 py-3 text-left text-xs font-medium text-gray-700 uppercase tracking-wider">Actions</th>
                </tr>
            </thead>
            <tbody class="bg-white divide-y divide-gray-200">
                @foreach($songs as $song)
                    <tr dusk="song-{{ $song->id }}" class="hover:bg-gray-50">
                        <td class="px-6 py-4 whitespace-nowrap">{{ $song->id }}</td>
                        <td class="px-6 py-4 whitespace-nowrap">{{ $song->title }}</td>
                        <td class="px-6 py-4 whitespace-nowrap">{{ $song->artist }}</td>
                        <td class="px-6 py-4 whitespace-nowrap">{{ $song->album }}</td>
                        <td class="px-6 py-4 whitespace-nowrap space-x-2">
                            <a href="{{ route('songs.show', $song->id) }}" dusk="to-show"
                               class="px-3 py-1 bg-blue-500 text-white rounded hover:bg-blue-600 transition">
                                Show
                            </a>
                            <a href="{{ route('songs.edit', $song->id) }}" dusk="to-edit"
                               class="px-3 py-1 bg-yellow-400 text-white rounded hover:bg-yellow-500 transition">
                                Edit
                            </a>
                            <form action="{{ route('songs.destroy', $song->id) }}" method="POST" class="inline">
                                @csrf
                                @method('DELETE')
                                <button type="submit" dusk="to-delete"
                                        class="px-3 py-1 bg-red-500 text-white rounded hover:bg-red-600 transition"
                                        onclick="return confirm('Are you sure?')">
                                    Delete
                                </button>
                            </form>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>

    <!-- Pagination links -->
    <div class="mt-4">
        {{ $songs->links() }}
    </div>
@endsection

@section('footer')
    Developed by Shahem B. Jahjah
@endsection
