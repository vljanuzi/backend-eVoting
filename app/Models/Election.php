<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\ElectionOrganizer;
use App\Models\Question;
use App\Models\Elector;


class Election extends Model
{
    protected $fillable = [
        'elect_org_id',
        'name'
    ];


    use HasFactory;

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
}
