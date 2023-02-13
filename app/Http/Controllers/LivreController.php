<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Livre;

class LivreController extends Controller
{
    public function index()
    {
        $livres = Livre::all();
        return view('livres.index', compact('livres'));
    }
    public function create()
    {
        return view('livres.create');
    }
    public function store(Request $request)
    {
        Livre::create($request->all());
        return redirect()->route('livres.index');
    }
    public function show($id)
    {
        $livre = Livre::findOrFail($id);
        return view('livres.show', compact('livre'));
    }
    public function edit($id)
    {
        $livre = Livre::findOrFail($id);
        return view('livres.edit', compact('livre'));
    }
    public function update(Request $request, $id)
    {
        $livre = Livre::findOrFail($id);
        $livre->update($request->all());
        return redirect()->route('livres.index');
    }
    public function destroy($id)
    {
        $livre = Livre::findOrFail($id);
        $livre->delete();
        return redirect()->route('livres.index');
    }
}