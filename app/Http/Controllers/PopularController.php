<?php

namespace App\Http\Controllers;

use App\Http\Requests\StorePopularRequest;
use App\Http\Requests\UpdatePopularRequest;
use App\Models\Popular;
use Inertia\Inertia;

class PopularController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     *
     */
    public function index()
    {
        $url = 'https://www.thecocktaildb.com/api/json/v2/9973533/popular.php';
        $popular = json_decode(file_get_contents(storage_path() . "/app/public/popular.json"));
        $popularData = $popular->drinks;

        return Inertia::render(
            'Popular/Index',
            [
                'popular' => $popularData,


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
     * @param \App\Http\Requests\StorePopularRequest $request
     * @return \Illuminate\Http\Response
     */
    public function store(StorePopularRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param \App\Models\Popular $popular
     * @return \Illuminate\Http\Response
     */
    public function show(Popular $popular)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param \App\Models\Popular $popular
     * @return \Illuminate\Http\Response
     */
    public function edit(Popular $popular)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param \App\Http\Requests\UpdatePopularRequest $request
     * @param \App\Models\Popular $popular
     * @return \Illuminate\Http\Response
     */
    public function update(UpdatePopularRequest $request, Popular $popular)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param \App\Models\Popular $popular
     * @return \Illuminate\Http\Response
     */
    public function destroy(Popular $popular)
    {
        //
    }
}
