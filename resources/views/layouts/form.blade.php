@extends('layouts.app')

@section('title')
    {{ isset($song) ? 'Edit Song' : 'Add Song' }}
@endsection

@section('content')
    <div class="max-w-2xl mx-auto bg-white p-6 rounded shadow-md">
        <h2 class="text-2xl font-bold mb-6">{{ isset($song) ? 'Edit Song' : 'Add New Song' }}</h2>

        <!-- Validation Errors -->
        @if ($errors->any())
            <div class="bg-red-100 border border-red-400 text-red-700 px-4 py-3 rounded mb-4">
                <ul class="list-disc list-inside">
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif

        <!-- Form -->
        <form action="{{ isset($song) ? route('songs.update', $song->id) : route('songs.store') }}" method="POST" class="space-y-4">
            @csrf
            @if(isset($song))
                @method('PUT')
            @endif

            <!-- Title -->
            <div>
                <label for="title" class="block text-gray-700 font-semibold mb-1">Title</label>
                <input type="text" name="title" id="title"
                       value="{{ old('title', $song->title ?? '') }}"
                       class="w-full border border-gray-300 rounded px-3 py-2 focus:outline-none focus:ring-2 focus:ring-blue-500" required>
            </div>

            <!-- Artist -->
            <div>
                <label for="artist" class="block text-gray-700 font-semibold mb-1">Artist</label>
                <input type="text" name="artist" id="artist"
                       value="{{ old('artist', $song->artist ?? '') }}"
                       class="w-full border border-gray-300 rounded px-3 py-2 focus:outline-none focus:ring-2 focus:ring-blue-500" required>
            </div>

            <!-- Album -->
            <div>
                <label for="album" class="block text-gray-700 font-semibold mb-1">Album</label>
                <input type="text" name="album" id="album"
                       value="{{ old('album', $song->album ?? '') }}"
                       class="w-full border border-gray-300 rounded px-3 py-2 focus:outline-none focus:ring-2 focus:ring-blue-500" required>
            </div>

            <!-- Submit Button -->
            <div class="flex justify-end">
                <button type="submit"
                        class="px-6 py-2 bg-green-500 text-white font-semibold rounded hover:bg-green-600 transition">
                    {{ isset($song) ? 'Update Song' : 'Add Song' }}
                </button>
            </div>
        </form>
    </div>
@endsection

@section('footer')
    Developed by Shahem B. Jahjah
@endsection
