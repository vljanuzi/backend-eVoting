<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\user_reg;

class UserRegController extends Controller
{
    public function store(Request $request)
    {
        $Regusers = new user_reg;
        $Regusers->f_name = $request->input('f_name');
        $Regusers->l_name = $request->input('l_name');
        $Regusers->email = $request->input('email');
        $Regusers->password = \Hash::make($request->input('password'));
        $Regusers->gender = $request->input('gender');
        $Regusers->birthday = $request->input('dateofbirth');
        $Regusers->user_privilege = $request->input('user_privilege');
        $Regusers->role = $request->input('role');
        $Regusers->save();
        return response()->json(['message' => 'Registered successfully'], 200);
    }
}
