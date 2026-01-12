@extends('layouts.app')

@section('content')

<h2 class="mb-4">Modifier les notes</h2>

<div class="card">
<div class="card-body">

<form action="{{ route('notes.update', $note->id) }}" method="POST">
@csrf
@method('PUT')

<div class="mb-3">
    <label>Étudiant</label>
    <input class="form-control" value="{{ $note->etudiant->nom }} {{ $note->etudiant->prenom }}" readonly>
</div>

<div class="mb-3">
    <label>Module</label>
    <input class="form-control" value="{{ $note->module->intitule }}" readonly>
</div>

<div class="mb-3">
    <label>Note Intra</label>
    <input type="number" step="0.01" name="note_intra" class="form-control"
           value="{{ $note->note_intra }}" required>
</div>

<div class="mb-3">
    <label>Note Projet</label>
    <input type="number" step="0.01" name="note_projet" class="form-control"
           value="{{ $note->note_projet }}" required>
</div>

<div class="mb-3">
    <label>Note Examen Final</label>
    <input type="number" step="0.01" name="note_final" class="form-control"
           value="{{ $note->note_final }}" required>
</div>

<div class="text-end">
    <a href="{{ route('notes.index') }}" class="btn btn-secondary">Annuler</a>
    <button class="btn btn-warning">Enregistrer les modifications</button>
</div>

</form>

</div>
</div>

@endsection
