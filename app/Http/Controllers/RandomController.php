<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreRandomRequest;
use App\Http\Requests\UpdateRandomRequest;
use App\Models\Random;
use Inertia\Inertia;

class RandomController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     *
     */
    public function index()
    {
        $url = 'https://www.thecocktaildb.com/api/json/v2/9973533/randomselection.php';
        $random = file_get_contents(($url));
        $json = json_decode($random);
        $randomData = $json->drinks;


        return Inertia::render(
            'Random/Index',
            [
                'random' => $randomData,


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
     * @param \App\Http\Requests\StoreRandomRequest $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreRandomRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param \App\Models\Random $random
     * @return \Illuminate\Http\Response
     */
    public function show(Random $random)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param \App\Models\Random $random
     * @return \Illuminate\Http\Response
     */
    public function edit(Random $random)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param \App\Http\Requests\UpdateRandomRequest $request
     * @param \App\Models\Random $random
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateRandomRequest $request, Random $random)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param \App\Models\Random $random
     * @return \Illuminate\Http\Response
     */
    public function destroy(Random $random)
    {
        //
    }
}
