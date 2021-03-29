<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Election;
use App\Models\Option;

class Question extends Model
{
    protected $fillable = [
        'election_id',
        'title',
        'image',
        'type',
        'allow_abstain',
        'has_instructions'
    ];


    use HasFactory;

    public function elections()
    {
        return $this->belongsTo(Election::class, 'election_id');
    }
    public function options()
    {
        return $this->hasMany(Option::class, 'question_id');
    }
}
