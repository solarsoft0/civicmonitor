<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreIssueRequest;
use App\Http\Requests\UpdateIssueRequest;
use App\Issue;
use App\Http\Resources\Resource;

use Illuminate\Http\Request;

/**
 * @resource Issue
 *
 * Issue CRUD Resource and ...
 */

class IssueController extends Controller
{
    /**
     * Display a listing of the Issue resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $issues = Issue::all();
          return new Resource($issues);

    }

    /**
     * Show the form for creating a new Issue resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created Issue resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreIssueRequest $request)
    {
        $issue = Issue::create($request->all());

        if (request()->wantsJson()) {
                      return new Resource($issue);

        }
        
    }

    /**
     * Display the specified Issue resource.
     *
     * @param  \App\Issue  $issue
     * @return \Illuminate\Http\Response
     */
    public function show(Issue $issue)
    {
                      return new Resource($issue);

    }

    /**
     * Show the form for editing the specified Issue resource.
     *
     * @param  \App\Issue  $issue
     * @return \Illuminate\Http\Response
     */
    public function edit(Issue $issue)
    {
        //
    }

    /**
     * Update the specified Issue resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Issue  $issue
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateIssueRequest $request, Issue $issue)
    {

        $issue->update($request->all());
                      return new Resource($issue);

    }

    /**
     * Remove the specified Issue resource from storage.
     *
     * @param  \App\Issue  $issue
     * @return \Illuminate\Http\Response
     */
    public function destroy(Issue $issue)
    {
        $issue->delete();

        if (request()->wantsJson()) {
            return response([], 204);
        }

        return redirect()->back();

    }
}
