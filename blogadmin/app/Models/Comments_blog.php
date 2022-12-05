<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Comments_blog extends Model
{
    use HasFactory;
    protected $table = "comments_blog";
    // protected $fillable = [
    //     'user_id',
    //     'post_name',
    //     'post_image',
    //     'post_description',
    //     'status',
    // ];
}
