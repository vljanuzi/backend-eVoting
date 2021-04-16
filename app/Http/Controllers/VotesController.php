<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\ElectionOrganizer;

class VotesController extends Controller
{
    protected $fillable = [
        'votes'
    ];

    public function increment($id)
    {
        ElectionOrganizer::find($id)->increment('votes');

        return response()->json(['message' => 'Incremented successfully'], 200);
    }
}
