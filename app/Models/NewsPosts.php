<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class NewsPosts extends Model
{
    use HasFactory;

    protected $table = 'news_posts';
    protected $guarded = false;
}
