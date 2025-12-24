@extends('layouts.app')

@section('title', 'View Song')

@section('content')
    <div class="max-w-2xl mx-auto bg-white p-6 rounded shadow-md">
        <h2 class="text-2xl font-bold mb-6">Song Details</h2>

        <!-- Song Information -->
        <ul class="space-y-3">
            <li class="flex justify-between">
                <span class="font-semibold text-gray-700">ID:</span>
                <span>{{ $song->id }}</span>
            </li>
            <li class="flex justify-between">
                <span class="font-semibold text-gray-700">Title:</span>
                <span>{{ $song->title }}</span>
            </li>
            <li class="flex justify-between">
                <span class="font-semibold text-gray-700">Artist:</span>
                <span>{{ $song->artist }}</span>
            </li>
            <li class="flex justify-between">
                <span class="font-semibold text-gray-700">Album:</span>
                <span>{{ $song->album }}</span>
            </li>
            <li class="flex justify-between">
        <span class="font-semibold text-gray-700">Created At:</span>
         <span>{{ $song->created_at->diffForHumans() }}</span>
        </li>
        <li class="flex justify-between">
    <span class="font-semibold text-gray-700">Updated At:</span>
    <span>{{ $song->updated_at->diffForHumans() }}</span>
    </li>
            </li>
        </ul>

        <!-- Back Button -->
        <div class="mt-6">
            <a href="{{ route('songs.index') }}"
               class="px-4 py-2 bg-blue-500 text-white font-semibold rounded hover:bg-blue-600 transition">
                Back to All Songs
            </a>
        </div>
    </div>
@endsection

@section('footer')
    Developed by Shahem B. Jahjah
@endsection
