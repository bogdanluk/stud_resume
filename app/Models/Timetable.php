<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Timetable extends Model
{
    use HasFactory;
    protected $table = "timetables";

    public function resumes()
    {
        return $this->hasMany(Resume::class, 'timetable_id', 'id');
    }
}
