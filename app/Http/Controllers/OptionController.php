<?php

namespace App\Http\Controllers;

use App\Models\Option;
use Illuminate\Http\Request;

class OptionController extends Controller
{
    public function store(Request $request)
    {
        $Option = new Option();
        $Option->question_id = $request->input('question_id');
        $Option->name = $request->input('name');
        $Option->type = $request->input('type');
        $Option->save();
        return response()->json(['message' => 'Option registered successfully'], 200);
    }
}
