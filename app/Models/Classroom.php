<?php

namespace App\Models;

use App\Models\Teacher;
use App\Models\Students;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Classroom extends Model
{
    use HasFactory;


    protected $table = 'classroom';

    protected $fillable = [
        'adviser_id',
        'grade',
        'section',
        'total_students'
        ];

    public function teacher() {
        return $this->belongsTo(Teacher::class, 'adviser_id', 'id');
    }

    public function students()
    {
        return $this->hasMany(Students::class, 'classroom_id', 'id');
    }






}
