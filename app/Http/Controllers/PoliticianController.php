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
    public function index(Request $request)
    {
       if ($request->query('all') === "true" && $request->query('lite') === "true" && $request->query('paginate') === "true"){
$politicians = Politician::select('id', 'name', 'image')->with("candidates","memberships:id,politician_id,political_party_id,position_id", "memberships.political_party:id,name,acronym,logo")->inRandomOrder()->paginate(24);
        return new Resource ($politicians);
        }
       else if ($request->query('all') === "true" && $request->query('lite') === "true"){
$politicians = Politician::select('id', 'name', 'image')->with("candidates","memberships:id,politician_id,political_party_id,position_id", "memberships.political_party:id,name,acronym,logo")->inRandomOrder()->get();
        return new Resource($politicians);
        }
        else if($request->query('all') === "true"){
              $politicians = Politician::with("candidates","memberships.political_party")->inRandomOrder()->get();
        return new Resource($politicians);
        }
        $politicians = Politician::with("candidates","memberships.political_party")->inRandomOrder()->paginate(24);
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
            return $politician->count() ? new Resource($politician->load("candidates","memberships")) : $error;

        }

        // Return the error message if no keywords existed
        return $error;    }
}
