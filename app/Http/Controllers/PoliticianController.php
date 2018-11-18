<?php

namespace App\Http\Controllers;

use App\Http\Requests\StorePoliticianRequest;
use App\Http\Requests\UpdatePoliticianRequest;
use App\Politician;
use App\Http\Resources\Resource;
use Illuminate\Http\Request;

/**
 * @resource Politician
 *
 * Politician CRUD Resource and ...
 */

class PoliticianController extends Controller
{
    /**
     * Display a listing of the Politician resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {


        $politicians = Politician::with("politician","memberships")->paginate(15);

        return response($politicians);

    }

    /**
     * Show the form for creating a new Politician resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created Politician resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StorePoliticianRequest $request)
    {
        $politician = Politician::create($request->all());

        if (request()->wantsJson()) {
            return response($politician, 201);
        }
        //
    }

    /**
     * Display the specified Politician resource.
     *
     * @param  \App\Politician  $politician
     * @return \Illuminate\Http\Response
     */
    public function show(Politician $politician)
    {
        return response($politician);

    }

    /**
     * Show the form for editing the specified Politician resource.
     *
     * @param  \App\Politician  $politician
     * @return \Illuminate\Http\Response
     */
    public function edit(Politician $politician)
    {
        //
    }

    /**
     * Update the specified Politician resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Politician  $politician
     * @return \Illuminate\Http\Response
     */
    public function update(UpdatePoliticianRequest $request, Politician $politician)
    {

        $politician->update($request->all());
        return $politician;
        //
    }

    /**
     * Remove the specified Politician resource from storage.
     *
     * @param  \App\Politician  $politician
     * @return \Illuminate\Http\Response
     */
    public function destroy(Politician $politician)
    {
        $politician->delete();

        if (request()->wantsJson()) {
            return response([], 204);
        }

        return redirect()->back();
//

    }



     public function search(Request $request)
    {
// First we define the error message we are going to show if no keywords
        // existed or if no results found.
        $error = ['error' => 'No results found, please try with different keywords.'];

        // Making sure the user entered a keyword.
        if($request->has('q')) {

            // Using the Laravel Scout syntax to search the politician table.
            $politician = Politician::search($request->get('q'))->get();

            // If there are results return them, if none, return the error message.
            return $politician->count() ? new Resource($politician) : $error;

        }

        // Return the error message if no keywords existed
        return $error;    }
}
