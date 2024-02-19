<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    use HasFactory;
    
    /*
        If you used $guarded null you don't have to use $fillable
        becuse the $guarded allow to any field to go in the database
    */

    // $fillable mean: the fields allowed to go in database
    protected $fillable = [
        'title',
        'image',
        'content',
    ];

    // $//fillable mean: the fields allowed to go in database mean: the fields dose not allowed to go int database
    protected $guarded = [];
}
