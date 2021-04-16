<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Election;
use App\Models\Option;
use App\Models\Response;

class Question extends Model
{
    use HasFactory;

    protected $fillable = [
        'election_id',
        'title',
        'image',
        'type',
        'allow_abstain',
        'has_instructions'
    ];




    public function elections()
    {
        return $this->belongsTo(Election::class, 'election_id');
    }
    public function options()
    {
        return $this->hasMany(Option::class, 'question_id');
    }

    public function responses()
    {
        return $this->hasMany(Response::class, 'question_id');
    }
}
