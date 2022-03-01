<?php

namespace App\Models;

use App\Models\User;
use App\Models\Admin;
use App\Models\Teacher;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Schedule extends Model
{
    use HasFactory, SoftDeletes;
    protected $fillable = [
        'teacher_id',
        'user_id',
        'department',
        'semester',
        'curriculum_year',
        'student_type',
        'student_status',
        'civil_status',
        'subjects',
        'units',
        'age',
        'days',
        'time',
        'section',
        'room',
    ];
    public function user(){
        return $this->belongsTo(User::class);
    }
    public function teacher(){
        return $this->belongsTo(Teacher::class);
    }
}
