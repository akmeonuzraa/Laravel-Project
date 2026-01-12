@extends('layouts.app')

@section('content')

<div class="d-flex justify-content-between align-items-center mb-4">

    <h2>Gestion des notes</h2>

    <div>
        <a href="{{ route('etudiants.index') }}" class="btn btn-primary me-2">
            Gestion des étudiants
        </a>

        <a href="{{ route('modules.index') }}" class="btn btn-success">
            Gestion des modules
        </a>
    </div>

</div>


<a href="{{ route('notes.create') }}" class="btn btn-warning mb-3">
    + Ajouter des notes
</a>

<table class="table table-bordered table-striped">
    <thead class="table-dark">
        <tr>
            <th>Étudiant</th>
            <th>Module</th>
            <th>Intra</th>
            <th>Projet</th>
            <th>Final</th>
            <th>Moyenne</th>
            <th>Décision</th>
            <th>Actions</th>
        </tr>
    </thead>
    <tbody>
        @foreach($notes as $note)
        <tr>
            <td>{{ $note->etudiant->nom }} {{ $note->etudiant->prenom }}</td>
            <td>{{ $note->module->intitule }}</td>
            <td>{{ $note->note_intra }}</td>
            <td>{{ $note->note_projet }}</td>
            <td>{{ $note->note_final }}</td>
            <td class="fw-bold">{{ $note->moyenne }}</td>
            <td>
                @if($note->moyenne >= 10)
                    <span class="text-success">Admis</span>
                @else
                    <span class="text-danger">Ajourné</span>
                @endif
            </td>
            <td>
                <a href="{{ route('notes.edit', $note->id) }}" class="btn btn-primary btn-sm">Modifier</a>

                <form action="{{ route('notes.destroy', $note->id) }}"
                      method="POST" style="display:inline-block">
                    @csrf
                    @method('DELETE')
                    <button class="btn btn-danger btn-sm"
                            onclick="return confirm('Supprimer cette note ?')">
                        Supprimer
                    </button>
                </form>
            </td>
        </tr>
        @endforeach
    </tbody>
</table>

@endsection
