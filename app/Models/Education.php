<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Education extends Model
{
    use HasFactory;
    protected $table = "education";

    public function resumes()
    {
        return $this->hasMany(Resume::class, 'education_id', 'id');
    }
}
