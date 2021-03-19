<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Election;
use App\Models\Option;

class Question extends Model
{
    use HasFactory;

    public function election()
    {
        return $this->belongsTo(Election::class, 'election_id');
    }
    public function option()
    {
        return $this->hasMany(Option::class, 'question_id');
    }
}
