@extends('layouts.app')

@section('content')

<h2 class="mb-4 text-center">Ajouter un module</h2>

<div class="card shadow">
    <div class="card-body">

        <form action="{{ route('modules.store') }}" method="POST">
            @csrf

            <div class="mb-3">
                <label class="form-label">Intitulé du module</label>
                <input type="text"
                       name="intitule"
                       class="form-control"
                       placeholder="Ex : Programmation Web"
                       required>
            </div>

            <div class="mb-3">
                <label class="form-label">Semestre</label>
                <input type="text"
                       name="semestre"
                       class="form-control"
                       placeholder="Ex : S5"
                       required>
            </div>

            <div class="text-end">
                <a href="{{ route('modules.index') }}" class="btn btn-secondary">
                    Retour
                </a>
                <button type="submit" class="btn btn-success">
                    Enregistrer
                </button>
            </div>

        </form>

    </div>
</div>

@endsection
