<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Election;

class Elector extends Model
{
    use HasFactory;

    public function election()
    {
        return $this->belongsTo(Election::class, 'election_id');
    }
}
