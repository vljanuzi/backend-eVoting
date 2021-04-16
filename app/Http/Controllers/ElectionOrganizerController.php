<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\ElectionOrganizer;




class ElectionOrganizerController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return ElectionOrganizer::all();
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
            'user_reg_id' => ['required', 'integer'],
            'election_name' => ['required', 'string'],
            'status' => ['required', 'string'],
            'start_date' => ['required', 'after:yesterday'],
            'end_date' => ['required', 'after:start_date'],
        ]);

        return ElectionOrganizer::create($request->all());
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        return ElectionOrganizer::find($id);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $elect_org = ElectionOrganizer::find($id);
        $elect_org->update($request->all());
        return $elect_org;
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        return ElectionOrganizer::destroy($id);
    }
}
