<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Classroom extends Model
{
    use HasFactory;
    protected $fillable = ['name', 'course_id'];

    public function course() {
        return $this->belongsTo(Course::class);
    }

    public function students() {
        return $this->hasMany(Student::class);
    }
}
