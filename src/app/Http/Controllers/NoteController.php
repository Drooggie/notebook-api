<?php

namespace App\Http\Controllers;

use App\Http\Requests\NoteStoreRequest;
use App\Http\Requests\NoteUpdateRequest;
use App\Http\Resources\NoteResource;
use App\Models\Note;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class NoteController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $note_data = Note::latest()->paginate(10);
        $metadata = collect($note_data)->except('data');

        return response()->json([
            "data" => NoteResource::collection($note_data),
            "meta" => $metadata
        ]);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(NoteStoreRequest $request)
    {
        $attributes = $request->validated();

        $created_note = Note::create([
            "user_id" => Auth::id(),
            ...$attributes,
        ]);

        return response()->json([
            "message" => "You successfully created note",
            "data" => new NoteResource($created_note),
        ]);
    }

    /**
     * Display the specified resource.
     */
    public function show(Note $note)
    {
        return response()->json([
            "data" => new NoteResource($note),
        ]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(NoteUpdateRequest $request, Note $note)
    {
        $updated_note = $request->validated();

        $note->update($updated_note);

        return response()->json([
            "message" => "You successfully updated Note",
            "data" => new NoteResource($note),
        ]);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Note $note)
    {
        $verified_note = $note->user->notes->findOrFail($note->id);

        $verified_note->delete();

        return response()->json(null, 204);
    }
}
