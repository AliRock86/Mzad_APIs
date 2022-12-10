<?php

namespace App\Http\Controllers;

use App\Models\MzadType;
use App\Http\Resources\MzadTypeResource;
use App\Http\Controllers\Controller;
use App\Http\Requests\MzadTypeRequest;
use App\Http\Resources\Collections\MzadTypeCollection;

class MzadTypeControllerAPI extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return App\Http\Resources\Collections\MzadTypeCollection
     */
    public function index()
    {
        $this->authorize('viewAny', MzadType::class);

        $mzadType = MzadType::all();

        return new MzadTypeCollection($mzadType);

    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \App\Http\Requests\MzadTypeRequest  $request
     * @return \App\Http\Resources\MzadTypeResource
     */
    public function store(MzadTypeRequest $request)
    {
        $this->authorize('create', MzadType::class);

        $mzadType = MzadType::create($request->validated());

        return new MzadTypeResource($mzadType);

    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\MzadType  $mzadType
     * @return \App\Http\Resources\MzadTypeResource
     */
    public function show(MzadType $mzadType)
    {
        $this->authorize('view', $mzadType);

        return new MzadTypeResource($mzadType);

    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\MzadTypeRequest  $request
     * @param  \App\Models\MzadType  $mzadType
     * @return \App\Http\Resources\MzadTypeResource
     */
    public function update(MzadTypeRequest $request, MzadType $mzadType)
    {
        $this->authorize('update', $mzadType);

        $mzadType->update($request->validated());

        return new MzadTypeResource($mzadType);

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\MzadType  $mzadType
     * @return \App\Http\Resources\MzadTypeResource
     */
    public function destroy(MzadType $mzadType)
    {
        $this->authorize('delete', $mzadType);

        $mzadType->delete();

        return new MzadTypeResource($mzadType);

    }
}
