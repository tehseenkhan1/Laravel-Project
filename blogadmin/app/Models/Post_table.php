<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Post_table extends Model
{
    use HasFactory;
    protected $table = "post_table";
    // protected $fillable = [
    //     'user_id',
    //     'post_name',
    //     'post_image',
    //     'post_description',
    //     'status',
    // ];
}
