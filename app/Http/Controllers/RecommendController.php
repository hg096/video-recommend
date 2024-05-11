<?php

namespace App\Http\Controllers;

use App\Models\Recommend;
use App\Http\Requests\StoreRecommendRequest;
use App\Http\Requests\UpdateRecommendRequest;

class RecommendController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreRecommendRequest $request)
    {
        $Recommend = Recommend::create([
            'name' => $request->name,
            'description' => $request->description,
            'url' => $request->url,
            'is_ad' => empty( $request->is_ad) ? $request->is_ad : 0,
        ]);
    }

    /**
     * Display the specified resource.
     */
    public function show(Recommend $recommend)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Recommend $recommend)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateRecommendRequest $request, Recommend $recommend)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Recommend $recommend)
    {
        //
    }
}
