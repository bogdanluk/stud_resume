<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Gender extends Model
{
    use HasFactory;
    protected $table = "genders";

    public function resumes()
    {
        return $this->hasMany(Resume::class, 'gender_id', 'id');
    }
}
