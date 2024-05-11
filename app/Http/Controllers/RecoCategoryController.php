<?php

namespace App\Http\Controllers;

use App\Models\RecoCategory;
use App\Http\Requests\StoreRecoCategoryRequest;
use App\Http\Requests\UpdateRecoCategoryRequest;

class RecoCategoryController extends Controller
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
    public function store(StoreRecoCategoryRequest $request)
    {
        $Recommend = RecoCategory::create([
            'categories' => $request->categories,
            'recommend_id' => $request->recommend_id,
        ]);

    }

    /**
     * Display the specified resource.
     */
    public function show(RecoCategory $recoCategory)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(RecoCategory $recoCategory)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateRecoCategoryRequest $request, RecoCategory $recoCategory)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(RecoCategory $recoCategory)
    {
        //
    }
}
