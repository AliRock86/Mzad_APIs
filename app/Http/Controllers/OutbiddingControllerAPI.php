<?php

namespace App\Http\Controllers;

use App\Models\Outbidding;
use App\Http\Resources\OutbiddingResource;
use App\Http\Controllers\Controller;
use App\Http\Requests\OutbiddingRequest;
use App\Http\Resources\Collections\OutbiddingCollection;

class OutbiddingControllerAPI extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return App\Http\Resources\Collections\OutbiddingCollection
     */
    public function index()
    {
        $this->authorize('viewAny', Outbidding::class);

        $outbidding = Outbidding::all();

        return new OutbiddingCollection($outbidding);

    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \App\Http\Requests\OutbiddingRequest  $request
     * @return \App\Http\Resources\OutbiddingResource
     */
    public function store(OutbiddingRequest $request)
    {
        $this->authorize('create', Outbidding::class);

        $outbidding = Outbidding::create($request->validated());

        return new OutbiddingResource($outbidding);

    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Outbidding  $outbidding
     * @return \App\Http\Resources\OutbiddingResource
     */
    public function show(Outbidding $outbidding)
    {
        $this->authorize('view', $outbidding);

        return new OutbiddingResource($outbidding);

    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\OutbiddingRequest  $request
     * @param  \App\Models\Outbidding  $outbidding
     * @return \App\Http\Resources\OutbiddingResource
     */
    public function update(OutbiddingRequest $request, Outbidding $outbidding)
    {
        $this->authorize('update', $outbidding);

        $outbidding->update($request->validated());

        return new OutbiddingResource($outbidding);

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Outbidding  $outbidding
     * @return \App\Http\Resources\OutbiddingResource
     */
    public function destroy(Outbidding $outbidding)
    {
        $this->authorize('delete', $outbidding);

        $outbidding->delete();

        return new OutbiddingResource($outbidding);

    }
}
