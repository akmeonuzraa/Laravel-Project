<?php

namespace App\Http\Controllers;

use App\Models\Note;
use App\Models\Etudiant;
use App\Models\Module;
use Illuminate\Http\Request;

class NoteController extends Controller
{
    public function index()
    {
        $notes = Note::with(['etudiant', 'module'])->get();
        $etudiants = Etudiant::all();
        $modules = Module::all();

        return view('notes.index', compact('notes','etudiants','modules'));
    }

    public function create()
    {
        $etudiants = Etudiant::all();
        $modules = Module::all();

        return view('notes.create', compact('etudiants','modules'));
    }

    public function store(Request $request)
    {
        $moyenne =
            ($request->note_intra * 0.35) +
            ($request->note_projet * 0.25) +
            ($request->note_final * 0.40);

        Note::create([
            'etudiant_id' => $request->etudiant_id,
            'module_id'   => $request->module_id,
            'note_intra'  => $request->note_intra,
            'note_projet' => $request->note_projet,
            'note_final'  => $request->note_final,
            'moyenne'     => $moyenne
        ]);

        return redirect()->route('notes.index')
            ->with('success', 'Note ajoutée avec succès');
    }

    public function edit(Note $note)
    {
        return view('notes.edit', compact('note'));
    }

    public function update(Request $request, Note $note)
    {
        $moyenne =
            ($request->note_intra * 0.35) +
            ($request->note_projet * 0.25) +
            ($request->note_final * 0.40);

        $note->update([
            'note_intra'  => $request->note_intra,
            'note_projet' => $request->note_projet,
            'note_final'  => $request->note_final,
            'moyenne'     => $moyenne
        ]);

        return redirect()->route('notes.index')
            ->with('success', 'Note modifiée avec succès');
    }

    public function destroy(Note $note)
    {
        $note->delete();

        return redirect()->route('notes.index')
            ->with('success', 'Note supprimée avec succès');
    }
}
