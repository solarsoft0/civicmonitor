<?php

namespace App\Http\Controllers;

use App\Candidate;
use App\Http\Requests\CandidateIssuePositionRequest;
use App\Http\Requests\CandidatePoliticalPartiesRequest;
use App\Http\Requests\StoreCandidateRequest;
use App\Http\Requests\UpdateCandidateRequest;
use App\Http\Resources\CandidateCollection;
use App\Http\Resources\CandidateResource;
use App\Issue;
use Illuminate\Http\Request;

/**
 * @resource Candidate
 *
 * Candidate CRUD Resource and ...
 */

class CandidateController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $candidates = Candidate::paginate(15);

        return new CandidateCollection($candidates);

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
    public function store(StoreCandidateRequest $request)
    {
        $candidate = Candidate::create($request->all());

// todo image
        if (request()->wantsJson()) {
            return new CandidateResource($candidate, 201);
        }

    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Candidate  $candidate
     * @return \Illuminate\Http\Response
     */
    public function show(Candidate $candidate)
    {

$candidate = $candidate->load('membership.political_party','membership.politician');
          return new CandidateResource($candidate);

    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Candidate  $candidate
     * @return \Illuminate\Http\Response
     */
    public function edit(Candidate $candidate)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Candidate  $candidate
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateCandidateRequest $request, Candidate $candidate)
    {
        $candidate->update(request()->validate([
            'name' => request('name'),
            'description' => request('description'),
        ]));

        return new CandidateResource($candidate);

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Candidate  $candidate
     * @return \Illuminate\Http\Response
     */
    public function destroy(Candidate $candidate)
    {
        $candidate->delete();

        if (request()->wantsJson()) {
            return response([], 204);
        }

        return redirect()->back();

    }

    /**
     * Get a Candidate Issue Positions.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */

    public function candidateIssuePositions(Candidate $candidate, CandidateIssuePositionRequest $request)
    {
        $candidateIssuePositions = $candidate->load('issue_positions','issue_positions.issue');
    
        if (request()->wantsJson()) {
            return new CandidateResource($candidateIssuePositions);
        }
            return new CandidateResource($candidateIssuePositions);

    }

    /**
     * Get a Candidate Political Parties.
     *
     * @param  \Illuminate\Http\Request  $request       
     * @return \Illuminate\Http\Response
     */

    public function candidatePoliticalParties(Candidate $candidate, CandidatePoliticalPartiesRequest $request)
    {
        $candidateIssuePositions = $candidate->load('membership.political_party');
        // $candidateIssuePositions =collect($candidateIssuePositions[0]->membership->political_party);

        if (request()->wantsJson()) {
            return new CandidateResource($candidateIssuePositions, 200);
        }

    }

}
