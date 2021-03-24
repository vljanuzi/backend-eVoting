<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\ElectionOrganizer;
use App\Models\Elector;

class user_reg extends Model
{
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
