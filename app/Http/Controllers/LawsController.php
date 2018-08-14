<?php

namespace App\Http\Controllers;

use App\law;
use Illuminate\Http\Request;

class LawsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $laws = Law::all();
        return $laws;
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $law = Law::create($request->all());

        return $law;
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\law  $law
     * @return \Illuminate\Http\Response
     */
    public function show(law $law)
    {
        return $law;
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\law  $law
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, law $law)
    {
        $law->update($request->all());
        return $law;
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\law  $law
     * @return \Illuminate\Http\Response
     */
    public function destroy(law $law)
    {
        $law->delete();
        return 'deleted';
    }
}
