@extends('layouts.app')

@section('content')

<h2 class="mb-4">Ajouter des notes</h2>

<div class="card">
<div class="card-body">

<form action="{{ route('notes.store') }}" method="POST">
@csrf

<div class="mb-3">
    <label>Étudiant</label>
    <select name="etudiant_id" class="form-select" required>
        @foreach($etudiants as $etudiant)
            <option value="{{ $etudiant->id }}">
                {{ $etudiant->nom }} {{ $etudiant->prenom }}
            </option>
        @endforeach
    </select>
</div>

<div class="mb-3">
    <label>Module</label>
    <select name="module_id" class="form-select" required>
        @foreach($modules as $module)
            <option value="{{ $module->id }}">{{ $module->intitule }}</option>
        @endforeach
    </select>
</div>

<div class="mb-3">
    <label>Note Intra (35%)</label>
    <input type="number" step="0.01" name="note_intra" class="form-control" required>
</div>

<div class="mb-3">
    <label>Note Projet (25%)</label>
    <input type="number" step="0.01" name="note_projet" class="form-control" required>
</div>

<div class="mb-3">
    <label>Note Examen Final (40%)</label>
    <input type="number" step="0.01" name="note_final" class="form-control" required>
</div>

<div class="text-end">
    <a href="{{ route('notes.index') }}" class="btn btn-secondary">Retour</a>
    <button class="btn btn-success">Enregistrer</button>
</div>

</form>

</div>
</div>

@endsection
