<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Candidate extends Model
{
    use HasFactory;
    protected $fillable = [
        'name', 'email', 'phone', 'year', 'job_id'
    ];

    public function job()
    {
        return $this->belongsTo(Job::class);
    }

    public function skills()
    {
        return $this->belongsToMany(Skill::class, 'skill_sets');
    }
}
