<?php

namespace App\Http\Controllers;

use App\Models\Ingredient;
use App\Http\Requests\StoreIngredientRequest;
use App\Http\Requests\UpdateIngredientRequest;

class IngredientController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $ingredients = Ingredient::all();
        return view('Ingredient.index', compact('ingredients'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        

        return view('Ingredient.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreIngredientRequest $request)
    {
        // $data = $request->validated();

        // $ingredient = new Ingredient();
    }

    /**
     * Display the specified resource.
     */
    public function show(Ingredient $ingredient)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Ingredient $ingredient)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateIngredientRequest $request, Ingredient $ingredient)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Ingredient $ingredient)
    {
        $ingredient->delete();
        return redirect()->route('ingredients.index');
    }
}
