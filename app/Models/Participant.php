<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Election;

class Participant extends Model
{
    use HasFactory;

    protected $fillable = [
        'email'
    ];


    public function elections()
    {
        return $this->belongsToMany(Election::class, 'election_participants', 'participant_id', 'election_id')->withTimestamps();;
    }
}
