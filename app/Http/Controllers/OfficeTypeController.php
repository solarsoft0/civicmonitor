<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreOfficeTypeRequest;
use App\Http\Requests\UpdateOfficeTypeRequest;
use App\OfficeType;
use Illuminate\Http\Request;

/**
 * @resource OfficeType
 *
 * OfficeType CRUD Resource and ...
 */

class OfficeTypeController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {

        $offices = OfficeType::paginate(15);

        return response($offices);

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
    public function store(StoreOfficeTypeRequest $request)
    {
        $officeType = OfficeType::create($request->all());

        if (request()->wantsJson()) {
            return response($officeType, 201);
        }
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\OfficeType  $officeType
     * @return \Illuminate\Http\Response
     */
    public function show(OfficeType $officeType)
    {
        return response($officeType);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\OfficeType  $officeType
     * @return \Illuminate\Http\Response
     */
    public function edit(OfficeType $officeType)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\OfficeType  $officeType
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateOfficeTypeRequest $request, OfficeType $officeType)
    {
        $officeType->update($request->all());
        return $officeType;
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\OfficeType  $officeType
     * @return \Illuminate\Http\Response
     */
    public function destroy(OfficeType $officeType)
    {
        $officeType->delete();

        if (request()->wantsJson()) {
            return response([], 204);
        }

        return redirect()->back();
        //
    }
}
