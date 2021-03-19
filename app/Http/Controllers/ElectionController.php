<?php

namespace App\Http\Controllers;

use App\Models\Election;
use Illuminate\Http\Request;

class ElectionController extends Controller
{
    public function store(Request $request)
    {
        $Elections = new Election();
        $Elections->elect_org_id = $request->input('elect_org_id');
        $Elections->name = $request->input('name');
        $Elections->save();
        return response()->json(['message' => 'Election registered successfully'], 200);
    }
}
