<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\EntreeStock;

class EntreeStockController extends Controller
{
    public function index()
    {
        $entree_stocks = EntreeStock::all();
        return view('entree_stock.index', compact('entree_stocks'));
    }
    public function create()
    {
        return view('entree_stock.create');
    }
    public function store(Request $request)
    {
        EntreeStock::create($request->all());
        return redirect()->route('entree_stocks.index');
    }
    public function show($id)
    {
        $entree_stock = EntreeStock::findOrFail($id);
        return view('entree_stocks.show', compact('entree_stock'));
    }
    public function edit($id)
    {
        $entree_stock = EntreeStock::findOrFail($id);
        return view('entree_stock.edit', compact('entree_stock'));
    }
    public function update(Request $request, $id)
    {
        $entree_stock = EntreeStock::findOrFail($id);
        $entree_stock->update($request->all());
        return redirect()->route('entree_stocks.index');
    }
    public function destroy($id)
    {
        $entree_stock = EntreeStock::findOrFail($id);
        $entree_stock->delete();
        return redirect()->route('entree_stocks.index');
    }
}
