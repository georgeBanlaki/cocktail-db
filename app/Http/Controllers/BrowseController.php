<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreBrowseRequest;
use App\Http\Requests\UpdateBrowseRequest;
use App\Models\Browse;
use Inertia\Inertia;

class BrowseController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     *
     */
    public function index($name)
    {
        $url = 'https://www.thecocktaildb.com/api/json/v2/9973533/search.php?f=' . $name;
        $alphabetDrinks = json_decode(file_get_contents($url));
        $alphabetDrinksData = $alphabetDrinks->drinks;


        return Inertia::render(
            'Browse/Index',
            [
                'alphabetDrinksData' => $alphabetDrinksData

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
     * @param \App\Http\Requests\StoreBrowseRequest $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreBrowseRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param \App\Models\Browse $browse
     * @return \Illuminate\Http\Response
     */
    public function show(Browse $browse)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param \App\Models\Browse $browse
     * @return \Illuminate\Http\Response
     */
    public function edit(Browse $browse)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param \App\Http\Requests\UpdateBrowseRequest $request
     * @param \App\Models\Browse $browse
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateBrowseRequest $request, Browse $browse)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param \App\Models\Browse $browse
     * @return \Illuminate\Http\Response
     */
    public function destroy(Browse $browse)
    {
        //
    }
}
