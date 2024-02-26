<?php

namespace App\Models;

use App\Models\User;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Database\Eloquent\Factories\HasFactory;


class Post extends Model
{
    use HasFactory , SoftDeletes;
    
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

    public function comments() {
        return $this->hasMany(Comment::class);
    }

    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
