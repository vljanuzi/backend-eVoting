<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\ElectionOrganizer;
use App\Models\Elector;
use Illuminate\Support\Facades\Hash;

class RegisteredUser extends Model
{
    public function setPasswordAttribute($password)
    {
        $this->attributes['password'] = Hash::make($password);
    }

    protected $fillable = [
        'f_name',
        'l_name',
        'email',
        'password',
        'gender',
        'birthday',
        'user_privilege',
        'role'
    ];

    use HasFactory;


    public function electionorganizers()
    {
        return $this->hasOne(ElectionOrganizer::class, 'user_reg_id');
    }

    public function electors()
    {
        return $this->hasOne(Elector::class, 'user_reg_id');
    }
}
