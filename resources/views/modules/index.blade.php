@extends('layouts.app')

@section('content')

<div class="d-flex justify-content-between mb-3">
    <h2>Liste des modules</h2>
    <a href="{{ route('modules.create') }}" class="btn btn-success">
        + Ajouter module
    </a>
</div>

<table class="table table-bordered">
    <thead class="table-dark">
        <tr>
            <th>Intitulé</th>
            <th>Semestre</th>
            <th class="text-center">Actions</th>
        </tr>
    </thead>
    <tbody>
        @foreach($modules as $module)
        <tr>
            <td>{{ $module->intitule }}</td>
            <td>{{ $module->semestre }}</td>
            <td class="text-center">
                <a href="{{ route('modules.edit', $module->id) }}" class="btn btn-primary btn-sm">Modifier</a>

                <form action="{{ route('modules.destroy', $module->id) }}"
                      method="POST" style="display:inline-block">
                    @csrf
                    @method('DELETE')
                    <button class="btn btn-danger btn-sm"
                            onclick="return confirm('Supprimer ce module ?')">
                        Supprimer
                    </button>
                </form>
            </td>
        </tr>
        @endforeach
    </tbody>
</table>

@endsection
