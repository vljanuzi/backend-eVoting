<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Question;

class Response extends Model
{
    use HasFactory;

    protected $fillable = [
        'question_id',
        'elector_id',
        'option_id'
    ];

    public function responses()
    {
        return $this->belongsTo(Question::class, 'question_id');
    }
}
