<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreLatestRequest;
use App\Http\Requests\UpdateLatestRequest;
use App\Models\Latest;
use Inertia\Inertia;

class LatestController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     *
     */
    public function index()
    {

        $url = 'https://www.thecocktaildb.com/api/json/v2/9973533/latest.php';
        $latest = json_decode(file_get_contents(storage_path() . "/app/public/latest.json"));
        $latestData = $latest->drinks;


        return Inertia::render(
            'Latest/Index',
            [

                'latest' => $latestData

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
     * @param \App\Http\Requests\StoreLatestRequest $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreLatestRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param \App\Models\Latest $latest
     * @return \Illuminate\Http\Response
     */
    public function show(Latest $latest)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param \App\Models\Latest $latest
     * @return \Illuminate\Http\Response
     */
    public function edit(Latest $latest)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param \App\Http\Requests\UpdateLatestRequest $request
     * @param \App\Models\Latest $latest
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateLatestRequest $request, Latest $latest)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param \App\Models\Latest $latest
     * @return \Illuminate\Http\Response
     */
    public function destroy(Latest $latest)
    {
        //
    }
}
