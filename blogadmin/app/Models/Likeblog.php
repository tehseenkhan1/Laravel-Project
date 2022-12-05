<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Likeblog extends Model
{
    use HasFactory;
    protected $table = "likeblog";
    // protected $fillable = [
    //     'user_id',
    //     'post_name',
    //     'post_image',
    //     'post_description',
    //     'status',
    // ];
}
