<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class JobType extends Model
{
    use HasFactory;
    protected $table = "job_types";
    protected $guarded = false;

    public function jobs(){
        return $this->hasMany(Job::class, 'job_types_id', 'id');
    }
}
