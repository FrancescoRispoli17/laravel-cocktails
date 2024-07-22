<?php

namespace App\Http\Controllers\admin;

use App\Models\Cocktail;
use App\Http\Controllers\Controller;
use App\Http\Requests\StoreCocktailRequest;
use App\Http\Requests\UpdateCocktailRequest;

class CocktailController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $cocktails=Cocktail::all();
        return view('Cocktail.index', compact('cocktails'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('Cocktail.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreCocktailRequest $request)
    {
        $data=$request->validated();
        $cocktail=new Cocktail();
        $cocktail->nome=$data['nome'];
        $cocktail->tasso_alcolico=$data['tasso_alcolico'];
        $cocktail->prezzo=$data['prezzo'];
        $cocktail->descrizione=$data['descrizione'];
        $cocktail->ingredienti=$data['ingredienti'];
        $cocktail->save();

        return redirect()->route('cocktails.index')->with('message', 'creazione avvenuta con successo');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $cocktail = Cocktail::find($id);
        
        return view('cocktail.show', compact('cocktail'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Cocktail $cocktail)
    {
        return view('Cocktail.edit', compact('cocktail'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateCocktailRequest $request, Cocktail $cocktail)
    {
        $data = $request->all();
        $cocktail->update($data);

        return redirect()->route('cocktails.index');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Cocktail $cocktail)
    {
        $cocktail->delete();
        return redirect()->route('cocktails.index');
    }
}