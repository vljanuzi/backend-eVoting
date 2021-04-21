<?php

namespace App\Models;

use App\Http\Controllers\UserRegController;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Election;
use App\Models\User;

class Elector extends Model
{
    use HasFactory;

    protected $fillable = [
        'election_id',
        'user_id',
        'name',
        'email',
        'joined_at',
        'response_at'

    ];



    public $timestamps = false;

    public function elections()
    {
        return $this->belongsTo(Election::class, 'election_id');
    }
    public function electors()
    {
        return $this->belongsTo(User::class, 'user_id');
    }
}
