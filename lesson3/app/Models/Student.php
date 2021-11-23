<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Work;

class Student extends Model
{
    use HasFactory;

    public function works(){
        return $this->hasMany(Work::class, 'student_id', 'id');
    }
    
}
