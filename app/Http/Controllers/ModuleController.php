<?php

namespace App\Http\Controllers;

use App\Models\Module;
use Illuminate\Http\Request;

class ModuleController extends Controller
{
    public function index()
    {
        $modules = Module::all();
        return view('modules.index', compact('modules'));
    }

    public function create()
    {
        return view('modules.create');
    }

    public function store(Request $request)
    {
        Module::create($request->all());

        return redirect()->route('modules.index')
            ->with('success', 'Module ajouté avec succès');
    }

    public function edit(Module $module)
    {
        return view('modules.edit', compact('module'));
    }

    public function update(Request $request, Module $module)
    {
        $module->update($request->all());

        return redirect()->route('modules.index')
            ->with('success', 'Module modifié avec succès');
    }

    public function destroy(Module $module)
    {
        $module->delete();

        return redirect()->route('modules.index')
            ->with('success', 'Module supprimé avec succès');
    }
}
