<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Question;

class Option extends Model
{
    protected $fillable = [
        'question_id',
        'name',
        'type',
    ];

    use HasFactory;

    public function options()
    {
        return $this->belongsTo(Question::class, 'question_id');
    }
}
