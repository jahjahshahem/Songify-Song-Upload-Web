@extends('layouts.app')

@section('title')
    {{ isset($song) ? 'Edit Song' : 'Add Song' }}
@endsection

@section('content')
    <h2>{{ isset($song) ? 'Edit Song' : 'Add New Song' }}</h2>

    <!-- Validation Errors -->
    @if ($errors->any())
        <div style="color: red;">
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif

    <!-- Form -->
    <form action="{{ isset($song) ? route('songs.update', $song->id) : route('songs.store') }}" method="POST">
        @csrf

        @if(isset($song))
            @method('PUT')
        @endif

        <div>
            <label for="title">Title:</label>
            <input type="text" name="title" id="title" value="{{ old('title', $song->title ?? '') }}" required>
        </div>

        <div>
            <label for="artist">Artist:</label>
            <input type="text" name="artist" id="artist" value="{{ old('artist', $song->artist ?? '') }}" required>
        </div>

        <div>
            <label for="album">Album:</label>
            <input type="text" name="album" id="album" value="{{ old('album', $song->album ?? '') }}" required>
        </div>

        <div>
            <button type="submit">{{ isset($song) ? 'Update Song' : 'Add Song' }}</button>
        </div>
    </form>
@endsection

@section('footer')
    Developed by Shahem B. Jahjah
@endsection
