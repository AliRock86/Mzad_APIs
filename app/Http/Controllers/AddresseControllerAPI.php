<?php

namespace App\Http\Controllers;

use App\Models\Addresse;
use App\Http\Resources\AddresseResource;
use App\Http\Controllers\Controller;
use App\Http\Requests\AddresseRequest;
use App\Http\Resources\Collections\AddresseCollection;

class AddresseControllerAPI extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return App\Http\Resources\Collections\AddresseCollection
     */
    public function index()
    {
        $this->authorize('viewAny', Addresse::class);

        $addresse = Addresse::all();

        return new AddresseCollection($addresse);

    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \App\Http\Requests\AddresseRequest  $request
     * @return \App\Http\Resources\AddresseResource
     */
    public function store(AddresseRequest $request)
    {
        $this->authorize('create', Addresse::class);

        $addresse = Addresse::create($request->validated());

        return new AddresseResource($addresse);

    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Addresse  $addresse
     * @return \App\Http\Resources\AddresseResource
     */
    public function show(Addresse $addresse)
    {
        $this->authorize('view', $addresse);

        return new AddresseResource($addresse);

    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\AddresseRequest  $request
     * @param  \App\Models\Addresse  $addresse
     * @return \App\Http\Resources\AddresseResource
     */
    public function update(AddresseRequest $request, Addresse $addresse)
    {
        $this->authorize('update', $addresse);

        $addresse->update($request->validated());

        return new AddresseResource($addresse);

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Addresse  $addresse
     * @return \App\Http\Resources\AddresseResource
     */
    public function destroy(Addresse $addresse)
    {
        $this->authorize('delete', $addresse);

        $addresse->delete();

        return new AddresseResource($addresse);

    }
}
