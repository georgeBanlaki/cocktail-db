<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreDrinkRequest;
use App\Http\Requests\UpdateDrinkRequest;
use App\Models\Drink;
use Inertia\Inertia;

class DrinkController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     *
     */
    public function index()
    {
//        $url = 'https://www.thecocktaildb.com/api/json/v2/9973533/popular.php';
//        $popular = json_decode(file_get_contents(storage_path() . "/app/public/popular.json"));
//        $popularData = $popular->drinks;
//
//        $url = 'https://www.thecocktaildb.com/api/json/v2/9973533/latest.php';
//        $latest = json_decode(file_get_contents(storage_path() . "/app/public/latest.json"));
//        $latestData = $latest->drinks;

        $url = 'https://www.thecocktaildb.com/api/json/v2/9973533/random.php';
        $random = json_decode(file_get_contents($url));
        $randomDrink = $random->drinks;


        return Inertia::render(
            'Drinks/Index',
            [
                'randomDrink' => $randomDrink

            ]
        );
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
     * @param \App\Http\Requests\StoreDrinkRequest $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreDrinkRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     *
     */
    public function show($id)
    {
        $url = 'https://www.thecocktaildb.com/api/json/v2/9973533/lookup.php?i=' . $id;
        $drink = file_get_contents($url);
        $json = json_decode($drink);
        $drinkData = $json->drinks;

//        $ingredientArray = ['strIngredient1', 'strIngredient2', 'strIngredient3', 'strIngredient4', 'strIngredient5', 'strIngredient6', 'strIngredient7', 'strIngredient8', 'strIngredient9', 'strIngredient10', 'strIngredient11', 'strIngredient12', 'strIngredient13', 'strIngredient14', 'strIngredient15'];
//        $ingredientValues = [];
//        foreach ($ingredientArray as $ingredient) {
//            if (!is_null($ingredient)) {
//                $ingredientValues[] = $drinkData[0]->$ingredient;
//            }
//        }
//        $ingredientData = [];
//        foreach ($ingredientValues as $ingredient) {
//            if (!is_null($ingredient)) {
//                $urlIngredient = 'https://www.thecocktaildb.com/api/json/v2/9973533/search.php?i=' . $ingredient;
//                $ingredient = file_get_contents(($urlIngredient));
//                $jsonIngredient = json_decode($ingredient);
//                $ingredientData[] = $jsonIngredient;
//
//            }
//        }


        return Inertia::render(
            'Drinks/Show',
            [
                'drink' => $drinkData,
            ]
        );
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param \App\Models\Drink $drink
     * @return \Illuminate\Http\Response
     */
    public function edit(Drink $drink)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param \App\Http\Requests\UpdateDrinkRequest $request
     * @param \App\Models\Drink $drink
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateDrinkRequest $request, Drink $drink)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param \App\Models\Drink $drink
     * @return \Illuminate\Http\Response
     */
    public function destroy(Drink $drink)
    {
        //
    }
}
