@extends('layouts.app')

@section('content')

<h2 class="mb-4">Ajouter un étudiant</h2>

<div class="card">
    <div class="card-body">

        <form action="{{ route('etudiants.store') }}" method="POST">
            @csrf

            <div class="mb-3">
                <label class="form-label">Nom</label>
                <input type="text" name="nom" class="form-control" required>
            </div>

            <div class="mb-3">
                <label class="form-label">Prénom</label>
                <input type="text" name="prenom" class="form-control" required>
            </div>

            <div class="mb-3">
                <label class="form-label">Email</label>
                <input type="email" name="email" class="form-control" required>
            </div>

            <div class="mb-3">
                <label class="form-label">Filière</label>
                <input type="text" name="filiere" class="form-control" required>
            </div>

            <div class="text-end">
                <a href="{{ route('etudiants.index') }}" class="btn btn-secondary">Retour</a>
                <button class="btn btn-success">Enregistrer</button>
            </div>

        </form>

    </div>
</div>

@endsection
