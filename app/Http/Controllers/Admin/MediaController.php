<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Media;

class MediaController extends Controller
{
    public function index()
    {
        $medias = Media::latest()->paginate(10);
        return view('admin.media.index', compact('medias'));
    }

    public function create()
    {
        return view('admin.media.create');
    }

    public function store(Request $request)
    {
        $validated = $request->validate([
            'title' => 'required|string|max:255',
            'youtube_url' => 'required|url',
            'description' => 'nullable|string',
        ]);

        Media::create($validated);

        return redirect()->route('admin.media.index')->with('success', 'Media created successfully.');
    }

    public function show(Media $medium)
    {
        return view('admin.media.show', compact('medium'));
    }

    public function edit(Media $medium)
    {
        return view('admin.media.edit', compact('medium'));
    }

    public function update(Request $request, Media $medium)
    {
        $validated = $request->validate([
            'title' => 'required|string|max:255',
            'youtube_url' => 'required|url',
            'description' => 'nullable|string',
        ]);

        $medium->update($validated);

        return redirect()->route('admin.media.index')->with('success', 'Media updated successfully.');
    }

    public function destroy(Media $medium)
    {
        $medium->delete();
        return redirect()->route('admin.media.index')->with('success', 'Media deleted successfully.');
    }
}
