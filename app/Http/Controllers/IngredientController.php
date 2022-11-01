<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreIngredientRequest;
use App\Http\Requests\UpdateIngredientRequest;
use App\Models\Drink;
use App\Models\Ingredient;
use Inertia\Inertia;

class IngredientController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param \App\Http\Requests\StoreIngredientRequest $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreIngredientRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     *
     *
     */
    public function show($name)
    {

        $url = 'https://www.thecocktaildb.com/api/json/v2/9973533/search.php?i=' . $name;
        $ingredient = file_get_contents(($url));
        $json = json_decode($ingredient);
        $ingredientsData = $json->ingredients;


        return Inertia::render(
            'Ingredients/Show',
            [
                'ingredient' => $ingredientsData,
            ]
        );
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param \App\Models\Ingredient $ingredient
     * @return \Illuminate\Http\Response
     */
    public function edit(Ingredient $ingredient)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param \App\Http\Requests\UpdateIngredientRequest $request
     * @param \App\Models\Ingredient $ingredient
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateIngredientRequest $request, Ingredient $ingredient)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param \App\Models\Ingredient $ingredient
     * @return \Illuminate\Http\Response
     */
    public function destroy(Ingredient $ingredient)
    {
        //
    }
}
