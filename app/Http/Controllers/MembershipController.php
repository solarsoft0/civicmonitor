<?php

namespace App\Http\Controllers;

use App\Membership;
use Illuminate\Http\Request;

/**
 * @resource Membership
 *
 * Membership CRUD Resource and ...
 */

class MembershipController extends Controller
{
    /**
     * Display a listing of the Membership resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $memberships = Membership::paginate(15);

        return response($memberships);

    }

    /**
     * Show the form for creating a new Membership resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created Membership resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $membership = Membership::create($request->all());

        if (request()->wantsJson()) {
            return response($membership, 201);
        }

    }

    /**
     * Display the specified Membership resource.
     *
     * @param  \App\Membership  $membership
     * @return \Illuminate\Http\Response
     */
    public function show(Membership $membership)
    {
                return response($membership);

        //
    }

    /**
     * Show the form for editing the specified Membership resource.
     *
     * @param  \App\Membership  $membership
     * @return \Illuminate\Http\Response
     */
    public function edit(Membership $membership)
    {
        //
    }

    /**
     * Update the specified Membership resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Membership  $membership
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Membership $membership)
    {
        $membership->update($request->all());
        return $membership;
    }

    /**
     * Remove the specified Membership resource from storage.
     *
     * @param  \App\Membership  $membership
     * @return \Illuminate\Http\Response
     */
    public function destroy(Membership $membership)
    {
        $membership->delete();

        if (request()->wantsJson()) {
            return response([], 204);
        }

        return redirect()->back();

    }
}
