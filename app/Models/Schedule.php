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
        'admin_id',
        'user_id',
        'proffessor',
        'subjects',
        'units',
        'days',
        'timeStart',
        'timeEnd',
        'room',
    ];
    public function user(){
        return $this->belongsTo(User::class);
    }
    public function admin(){
        return $this->belongsTo(Admin::class);
    }
}
