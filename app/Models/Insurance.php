<?php

namespace App\Models;

use App\Models\User;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Insurance extends Model
{
    use HasFactory;
    
    function user() {
        return $this->belongsTo(User::class);
    }
}
