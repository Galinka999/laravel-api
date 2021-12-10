<?php

namespace App\Http\Controllers\Api\V2;

use App\Http\Controllers\Controller;
use App\Http\Requests\DeskStoreRequest;
use App\Http\Requests\DeskUpdateRequest;
use App\Http\Resources\DeskResource;
use App\Models\Desk;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;

class DeskController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Resources\Json\AnonymousResourceCollection
     */
    public function index()
    {
        return DeskResource::collection(Desk::all());
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return DeskResource
     */
    public function store(DeskStoreRequest $request)
    {
        $create_desk = Desk::create($request->validated());

        return new DeskResource($create_desk);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return DeskResource
     */
    public function show(Desk $desk)
    {
        return new DeskResource($desk);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return DeskResource
     */
    public function update(DeskUpdateRequest $request, Desk $desk)
    {
        $desk->update($request->validated());
        return new DeskResource($desk);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param Desk $desk
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\Routing\ResponseFactory|\Illuminate\Http\Response
     */
    public function destroy(Desk $desk)
    {
        $desk->delete();
        return response(null, Response::HTTP_NO_CONTENT);
    }

}
