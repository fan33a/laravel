<?php

namespace App\Models;

use App\Models\Subject;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Student extends Model
{
    use HasFactory;

    public function subjects() {
        return $this->belongsToMany(Subject::class); // if you chage the name of student_subject table you can use >belongsToMany(Subject::class, 'table_name')
    }
}
