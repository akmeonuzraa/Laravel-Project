@extends('layouts.app')

@section('content')

<h2 class="mb-4">Modifier l’étudiant</h2>

<div class="card">
    <div class="card-body">

        <form action="{{ route('etudiants.update', $etudiant->id) }}" method="POST">
            @csrf
            @method('PUT')

            <div class="mb-3">
                <label class="form-label">Nom</label>
                <input type="text" name="nom" class="form-control"
                       value="{{ $etudiant->nom }}" required>
            </div>

            <div class="mb-3">
                <label class="form-label">Prénom</label>
                <input type="text" name="prenom" class="form-control"
                       value="{{ $etudiant->prenom }}" required>
            </div>

            <div class="mb-3">
                <label class="form-label">Email</label>
                <input type="email" name="email" class="form-control"
                       value="{{ $etudiant->email }}" required>
            </div>

            <div class="mb-3">
                <label class="form-label">Filière</label>
                <input type="text" name="filiere" class="form-control"
                       value="{{ $etudiant->filiere }}" required>
            </div>

            <div class="text-end">
                <a href="{{ route('etudiants.index') }}" class="btn btn-secondary">Retour</a>
                <button class="btn btn-primary">Mettre à jour</button>
            </div>

        </form>

    </div>
</div>

@endsection
