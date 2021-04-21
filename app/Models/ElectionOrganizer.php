<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Election;
use App\Models\User;


class ElectionOrganizer extends Model
{
    use HasFactory;


    protected $fillable = [
        'user_id',
        'election_name',
        'status',
        'start_date',
        'end_date',
    ];




    public function elections()
    {
        return $this->hasMany(Election::class, 'elect_org_id');
    }
    public function electionorganizers()
    {
        return $this->belongsTo(User::class, 'user_id');
    }
}
