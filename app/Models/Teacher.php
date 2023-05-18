<?php

namespace App\Models;

use App\Models\Classroom;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Teacher extends Model
{
    use HasFactory;

    protected $table = 'teacher';

    protected $fillable = [
        'adviser'
    ];

    public function classroom() {
        return $this->hasOne(Classroom::class, 'adviser_id', 'id');
    }



}
