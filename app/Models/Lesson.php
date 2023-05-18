<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Lesson extends Model
{
    use HasFactory;

    protected $table = 'lessons';

    protected $fillable = [
        'subject_id',
        'lessons',
        'files',
        'activities',
    ];

    public function subject()
    {
        return $this->belongsTo(Subject::class, 'subject_id','id');
    }


}
