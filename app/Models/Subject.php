<?php

namespace App\Models;

use App\Models\Lesson;
use App\Models\Students;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Subject extends Model
{
    use HasFactory;

    protected $table = 'subject';

    protected $fillable = [
        'subject',
        'code'
    ];

    public function students() {
        return $this->hasMany(Students::class, 'subject_id', 'id');
    }

    public function lessons(){
        return $this->hasMany(Lesson::class, 'subject_id', 'id');
    }


}
