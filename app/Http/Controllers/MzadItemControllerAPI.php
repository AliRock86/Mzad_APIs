<?php

namespace App\Http\Controllers;

use App\Models\MzadItem;
use App\Http\Resources\MzadItemResource;
use App\Http\Controllers\Controller;
use App\Http\Requests\MzadItemRequest;
use App\Http\Resources\Collections\MzadItemCollection;

class MzadItemControllerAPI extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return App\Http\Resources\Collections\MzadItemCollection
     */
    public function index()
    {
        $this->authorize('viewAny', MzadItem::class);

        $mzadItem = MzadItem::all();

        return new MzadItemCollection($mzadItem);

    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \App\Http\Requests\MzadItemRequest  $request
     * @return \App\Http\Resources\MzadItemResource
     */
    public function store(MzadItemRequest $request)
    {
        $this->authorize('create', MzadItem::class);

        $mzadItem = MzadItem::create($request->validated());

        return new MzadItemResource($mzadItem);

    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\MzadItem  $mzadItem
     * @return \App\Http\Resources\MzadItemResource
     */
    public function show(MzadItem $mzadItem)
    {
        $this->authorize('view', $mzadItem);

        return new MzadItemResource($mzadItem);

    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\MzadItemRequest  $request
     * @param  \App\Models\MzadItem  $mzadItem
     * @return \App\Http\Resources\MzadItemResource
     */
    public function update(MzadItemRequest $request, MzadItem $mzadItem)
    {
        $this->authorize('update', $mzadItem);

        $mzadItem->update($request->validated());

        return new MzadItemResource($mzadItem);

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\MzadItem  $mzadItem
     * @return \App\Http\Resources\MzadItemResource
     */
    public function destroy(MzadItem $mzadItem)
    {
        $this->authorize('delete', $mzadItem);

        $mzadItem->delete();

        return new MzadItemResource($mzadItem);

    }
}
