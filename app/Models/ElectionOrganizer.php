<?php

namespace App\Models;

use App\Http\Controllers\UserRegController;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Election;

class ElectionOrganizer extends Model
{
    use HasFactory;

    public function elections()
    {
        return $this->hasMany(Election::class, 'elect_org_id');
    }
    public function electionorganizers()
    {
        return $this->belongsTo(UserRegController::class, 'user_reg_id');
    }
}
