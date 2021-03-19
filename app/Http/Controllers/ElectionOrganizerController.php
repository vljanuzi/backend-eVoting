<?php

namespace App\Http\Controllers;

use App\Models\ElectionOrganizer;
use Illuminate\Http\Request;

class ElectionOrganizerController extends Controller
{
    public function store(Request $request)
    {
        $Electionorgs = new ElectionOrganizer();
        $Electionorgs->election_name = $request->input('election_name');
        $Electionorgs->status = $request->input('status');
        $Electionorgs->start_date = $request->input('start_date');
        $Electionorgs->end_date = $request->input('end_date');
        $Electionorgs->votes = $request->input('votes');
        $Electionorgs->save();
        return response()->json(['message' => 'Election organizer registered successfully'], 200);
    }
}
