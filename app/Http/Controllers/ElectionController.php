<?php

namespace App\Http\Controllers;

use App\Election;
use App\Http\Requests\StoreElectionRequest;
use App\Http\Requests\UpdateElectionRequest;
use Illuminate\Http\Request;

// use App\Http\Resources

class ElectionController extends Controller
{
    /**
     * Display a listing of the election resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $elections = Election::all()->paginate(15);

        return response($elections);

    }

    /**
     * Show the form for creating a new election resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created election resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreElectionRequest $request)
    {
        $election = Election::create($request->all());

        if (request()->wantsJson()) {
            return response($election, 201);
        }

    }

    /**
     * Display the specified election resource.
     *
     * @param  \App\Election  $election
     * @return \Illuminate\Http\Response
     */
    public function show(Election $election)
    {
        //
    }

    /**
     * Show the form for editing the specified election resource.
     *
     * @param  \App\Election  $election
     * @return \Illuminate\Http\Response
     */
    public function edit(Election $election)
    {
        //
    }

    /**
     * Update the specified election resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Election  $election
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateElectionRequest $request, Election $election)
    {

        $election->update($request->all());

        return $election;
    }

    /**
     * Remove the specified election resource from storage.
     *
     * @param  \App\Election  $election
     * @return \Illuminate\Http\Response
     */
    public function destroy(Election $election)
    {
        $election->delete();

        if (request()->wantsJson()) {
            return response([], 204);
        }

        return redirect()->back();

    }
}
