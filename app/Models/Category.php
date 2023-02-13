<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    use HasFactory;

    protected $table = "categories";

    public function jobs()
    {
        return $this->hasMany(Job::class, 'category_id', 'id');
    }

    public function resumes()
    {
        return $this->hasMany(Resume::class, 'category_id', 'id');
    }
}
