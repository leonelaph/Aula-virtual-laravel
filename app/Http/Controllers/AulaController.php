<?php

namespace App\Http\Controllers;

use App\Models\Aula;
use Illuminate\Http\Request;
use Illuminate\Validation\Rule;

class AulaController extends Controller
{
    public function index()
    {
        $aulas = Aula::orderBy('nombre')->get();
        return view('aulas.index', compact('aulas'));
    }

    public function create()
    {
        return view('aulas.create');
    }

    public function store(Request $request)
    {
        $validated = $request->validate([
            'nombre' => 'required|string|max:100|unique:aulas',
            'ubicacion' => 'required|string|max:200',
            'capacidad' => 'required|integer|min:1'
        ]);

        Aula::create($validated);

        return redirect()->route('aulas.index')
            ->with('success', 'Aula creada exitosamente.');
    }

    public function show(Aula $aula)
    {
        return view('aulas.show', compact('aula'));
    }

    public function edit(Aula $aula)
    {
        return view('aulas.edit', compact('aula'));
    }

    public function update(Request $request, Aula $aula)
    {
        $validated = $request->validate([
            'nombre' => [
                'required',
                'string',
                'max:100',
                Rule::unique('aulas')->ignore($aula->id)
            ],
            'ubicacion' => 'required|string|max:200',
            'capacidad' => 'required|integer|min:1'
        ]);

        $aula->update($validated);

        return redirect()->route('aulas.index')
            ->with('success', 'Aula actualizada exitosamente.');
    }

    public function destroy(Aula $aula)
    {
        $aula->delete();

        return redirect()->route('aulas.index')
            ->with('success', 'Aula eliminada exitosamente.');
    }
}