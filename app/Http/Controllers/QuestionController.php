<?php

namespace App\Http\Controllers;

use App\Models\Question;
use Illuminate\Http\Request;

class QuestionController extends Controller
{
    public function store(Request $request)
    {
        $Question = new Question();
        $Question->election_id = $request->input('election_id');
        $Question->title = $request->input('title');
        $Question->image = $request->input('image');
        $Question->type = $request->input('type');
        $Question->allow_abstain = $request->input('allow_abstain');
        $Question->has_instructions = $request->input('has_instructions');
        $Question->save();
        return response()->json(['message' => 'Question registered successfully'], 200);
    }
}
