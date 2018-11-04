<?php

namespace App\Http\Controllers;

use App\ElectionType;
use Illuminate\Http\Request;
use App\Http\Requests\StoreElectionTypeRequest;
use App\Http\Requests\UpdateElectionTypeRequest;


/**
 * @resource ElectionType
 *
 * ElectionType CRUD Resource and ...
 */


class ElectionTypeController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $electionTypes = ElectionType::paginate(15);


        return response($electionTypes);
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
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreElectionTypeRequest $request)
    {
        $election = ElectionType::create($request->all());

        if (request()->wantsJson()) {
            return response($election, 201);
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\ElectionType  $electionType
     * @return \Illuminate\Http\Response
     */
    public function show(ElectionType $electionType)
    {
        return response($electionType);

    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\ElectionType  $electionType
     * @return \Illuminate\Http\Response
     */
    public function edit(ElectionType $electionType)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\ElectionType  $electionType
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateElectionTypeRequest $request, ElectionType $electionType)
    {

        $election->update($request->all());

        return $election;
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\ElectionType  $electionType
     * @return \Illuminate\Http\Response
     */
    public function destroy(ElectionType $electionType)
    {
        $electionType->delete();

        if (request()->wantsJson()) {
            return response([], 204);
        }

        return redirect()->back();
    }
}
