<?php

namespace App\Http\Controllers;

use App\IssuePosition;
use Illuminate\Http\Request;
use App\Http\Resources\Resource;

/**
 * @resource IssuePosition
 *
 * IssuePosition CRUD Resource and ...
 */

class IssuePositionController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {

        $issuePositions = IssuePosition::paginate(15);

        return new Resource($issuePositions);

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
    public function store(Request $request)
    {
        $issuePosition = IssuePosition::create($request->all());

        if (request()->wantsJson()) {
            return response($issuePosition, 201);
        }

    }

    /**
     * Display the specified resource.
     *
     * @param  \App\IssuePosition  $issuePosition
     * @return \Illuminate\Http\Response
     */
    public function show(IssuePosition $issuePosition)
    {
        return response($issuePosition);

    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\IssuePosition  $issuePosition
     * @return \Illuminate\Http\Response
     */
    public function edit(IssuePosition $issuePosition)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\IssuePosition  $issuePosition
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, IssuePosition $issuePosition)
    {
        $issuePosition->update($request->all());
        return $issuePosition;
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\IssuePosition  $issuePosition
     * @return \Illuminate\Http\Response
     */
    public function destroy(IssuePosition $issuePosition)
    {
        $issuePosition->delete();

        if (request()->wantsJson()) {
            return response([], 204);
        }

        return redirect()->back();

    }


    
}
