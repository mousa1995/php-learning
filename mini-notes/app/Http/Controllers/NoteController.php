<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Note;

class NoteController extends Controller
{
    public function index()
    {
        return Note::all();
    }

    public function store(Request $request)
    {
        $validated = $request->validate([
            'title' => 'required|string|max:255',
            'body' => 'required|string',
        ]);
        $note = Note::create($validated);

        return $$note;
    }

    public function show(Note $note)
    {
        return $note;
    }

    public function destroy(Note $note)
    {
        $note->delete();

        return response()->json([
            'message' => 'Note deleted successfully',
        ]);
    }
}
