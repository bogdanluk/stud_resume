<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class City extends Model
{
    use HasFactory;

    protected $table = "cities";

    public function jobs()
    {
        return $this->hasMany(Job::class, 'city_id', 'id');
    }

    public function resumes()
    {
        return $this->hasMany(Resume::class, 'city_id', 'id');
    }
}
