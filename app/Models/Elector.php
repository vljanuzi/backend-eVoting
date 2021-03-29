<?php

namespace App\Models;

use App\Http\Controllers\UserRegController;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Election;

class Elector extends Model
{
    protected $fillable = [
        'election_id',
        'user_reg_id',
        'name',
        'email',
        'joined_at',
        'response_at'

    ];

    use HasFactory;

    public $timestamps = false;

    public function elections()
    {
        return $this->belongsTo(Election::class, 'election_id');
    }
    public function electors()
    {
        return $this->belongsTo(UserRegController::class, 'user_reg_id');
    }
}
