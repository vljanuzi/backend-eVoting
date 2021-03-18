<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Election;

class ElectionOrganizer extends Model
{
    use HasFactory;

    public function election()
    {
        return $this->hasMany(Election::class, 'elect_org_id');
    }
}
