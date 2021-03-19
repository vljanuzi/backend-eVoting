<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\ElectionOrganizer;
use App\Models\Question;
use App\Models\Elector;


class Election extends Model
{
    use HasFactory;

    public function electionorganizer()
    {
        return $this->belongsTo(ElectionOrganizer::class, 'elect_org_id');
    }

    public function elector()
    {
        return $this->hasMany(Elector::class, 'election_id');
    }

    public function question()
    {
        return $this->hasMany(Question::class, 'election_id');
    }
}
