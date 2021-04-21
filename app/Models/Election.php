<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\ElectionOrganizer;
use App\Models\Question;
use App\Models\Elector;
use App\Models\Participant;


class Election extends Model
{
    use HasFactory;


    protected $fillable = [
        'elect_org_id',
        'name'
    ];




    public function electionorganizers()
    {
        return $this->belongsTo(ElectionOrganizer::class, 'elect_org_id');
    }

    public function electors()
    {
        return $this->hasMany(Elector::class, 'election_id');
    }

    public function questions()
    {
        return $this->hasMany(Question::class, 'election_id');
    }

    public function participants()
    {
        return $this->belongsToMany(Participant::class, 'election_participants', 'election_id', 'participant_id')->withTimestamps();;
    }
}
