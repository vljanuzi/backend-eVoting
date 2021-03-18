<?php

namespace App\Http\Controllers;

use App\Models\Elector;
use Illuminate\Http\Request;

class ElectorController extends Controller
{
    public function store(Request $request)
    {
        $Elector = new Elector();
        $Elector->election_id = $request->input('election_id');
        $Elector->name = $request->input('name');
        $Elector->email = $request->input('email');
        $Elector->joined_at = $request->input('joined_at');
        $Elector->response_at = $request->input('response_at');
        $Elector->save();
        return response()->json(['message' => 'Elector registered successfully'], 200);
    }
}
