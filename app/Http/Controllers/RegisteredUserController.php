<?php

namespace App\Http\Controllers;

use App\Models\RegisteredUser;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class RegisteredUserController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return RegisteredUser::all();
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $validated = request()->validate([
            'f_name' => ['required', 'string'],
            'l_name' => ['required', 'string'],
            'email' => ['required', 'unique:registered_users', 'max:255'],
            'password' => ['required', 'string'],
            'gender' => ['required', 'string'],
            'birthday' => ['required', 'date'],
            'user_privilege' => ['required', 'string'],
            'role' => ['required', 'string']
        ]);
        $validated['password'] = Hash::make($validated['password']);

        return RegisteredUser::create($request->all());
    }



    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        return RegisteredUser::find($id);
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
        $reg_user = RegisteredUser::find($id);
        $reg_user->update($request->all());
        return $reg_user;
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        return RegisteredUser::destroy($id);
    }
}
