@extends('layouts.app')

@section('content')

<h2 class="mb-4 text-center">Modifier le module</h2>

<div class="card shadow">
    <div class="card-body">

        <form action="{{ route('modules.update', $module->id) }}" method="POST">
            @csrf
            @method('PUT')

            <div class="mb-3">
                <label class="form-label">Intitulé du module</label>
                <input type="text"
                       name="intitule"
                       class="form-control"
                       value="{{ $module->intitule }}"
                       required>
            </div>

            <div class="mb-3">
                <label class="form-label">Semestre</label>
                <input type="text"
                       name="semestre"
                       class="form-control"
                       value="{{ $module->semestre }}"
                       required>
            </div>

            <div class="text-end">
                <a href="{{ route('modules.index') }}" class="btn btn-secondary">
                    Annuler
                </a>
                <button type="submit" class="btn btn-primary">
                    Mettre à jour
                </button>
            </div>

        </form>

    </div>
</div>

@endsection
