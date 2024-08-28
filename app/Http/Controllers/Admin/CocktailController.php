<?php

namespace App\Http\Controllers\admin;

use App\Models\Cocktail;
use App\Http\Controllers\Controller;
use App\Http\Requests\StoreCocktailRequest;
use App\Http\Requests\UpdateCocktailRequest;
use App\Mail\NewCocktail;
use App\Models\Ingredient;
use Illuminate\Support\Facades\Mail;

class CocktailController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $cocktails = Cocktail::all();
        return view('Cocktail.index', compact('cocktails'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $ingredients = Ingredient::all();

        return view('Cocktail.create', compact('ingredients'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreCocktailRequest $request)
    {
        $data = $request->validated();

        $cocktail = new Cocktail();

        $cocktail->nome = $data['nome'];
        $cocktail->tasso_alcolico = $data['tasso_alcolico'];
        $cocktail->prezzo = $data['prezzo'];
        $cocktail->descrizione = $data['descrizione'];

        $cocktail->save();
        if ($request->has('ingredients')) {
            $cocktail->ingredients()->attach($request->ingredients);
        }

        Mail::to('rispolifrancesco997@gmail.com')->send(new NewCocktail($cocktail));
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
        
        $ingredients = Ingredient::all();

        return view('Cocktail.edit', compact('cocktail','ingredients'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateCocktailRequest $request, Cocktail $cocktail)
    {
        $data = $request->all();
        $cocktail->update($data);

        if($request->has('ingredients')){
            $cocktail->ingredients()->sync($request->ingredients);
        }else{
            $cocktail->ingredients()->detach();
        }


        return redirect()->route('cocktails.show', $cocktail);
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
