<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Song;

class SongController extends Controller
{
    /**
     * Display a listing of songs.
     */
    public function index()
    {
        $songs = Song::all(); // Get all songs
        return view('songs.index', compact('songs'));
    }

    /**
     * Show the form for creating a new song.
     */
    public function create()
    {
        return view('songs.create');
    }

    /**
     * Store a newly created song in storage.
     */
    public function store(Request $request)
    {
        // Validate input
        $request->validate([
            'title'  => 'required|string|max:255',
            'artist' => 'required|string|max:255',
            'album'  => 'required|string|max:255',
        ]);

        // Create new song
        Song::create($request->all());

        return redirect()->route('songs.index')
                         ->with('success', 'Song created successfully.');
    }

    /**
     * Display the specified song.
     */
    public function show(Song $song)
    {
        return view('songs.show', compact('song'));
    }

    /**
     * Show the form for editing the specified song.
     */
    public function edit(Song $song)
    {
        return view('songs.edit', compact('song'));
    }

    /**
     * Update the specified song in storage.
     */
    public function update(Request $request, Song $song)
    {
        // Validate input
        $request->validate([
            'title'  => 'required|string|max:255',
            'artist' => 'required|string|max:255',
            'album'  => 'required|string|max:255',
        ]);

        // Update song
        $song->update($request->all());

        return redirect()->route('songs.index')
                         ->with('success', 'Song updated successfully.');
    }

    /**
     * Remove the specified song from storage.
     */
    public function destroy(Song $song)
    {
        $song->delete();

        return redirect()->route('songs.index')
                         ->with('success', 'Song deleted successfully.');
    }
}
