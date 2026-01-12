@extends('layouts.app')

@section('content')

<div class="d-flex justify-content-between mb-3">
    <h2>Liste des étudiants</h2>
    <a href="{{ route('etudiants.create') }}" class="btn btn-success">
        + Ajouter étudiant
    </a>
</div>

<table class="table table-bordered table-striped">
    <thead class="table-dark">
        <tr>
            <th>Nom</th>
            <th>Prénom</th>
            <th>Email</th>
            <th>Filière</th>
            <th class="text-center">Actions</th>
        </tr>
    </thead>
    <tbody>
        @foreach($etudiants as $etudiant)
        <tr>
            <td>{{ $etudiant->nom }}</td>
            <td>{{ $etudiant->prenom }}</td>
            <td>{{ $etudiant->email }}</td>
            <td>{{ $etudiant->filiere }}</td>
            <td class="text-center">
                <a href="{{ route('etudiants.edit', $etudiant->id) }}" class="btn btn-primary btn-sm">
                    Modifier
                </a>

                <form action="{{ route('etudiants.destroy', $etudiant->id) }}"
                      method="POST"
                      style="display:inline-block">
                    @csrf
                    @method('DELETE')
                    <button class="btn btn-danger btn-sm"
                            onclick="return confirm('Supprimer cet étudiant ?')">
                        Supprimer
                    </button>
                </form>
            </td>
        </tr>
        @endforeach
    </tbody>
</table>

@endsection
