<?php

namespace App\Models;
use App\Models\Subject;
use App\Models\Classroom;
use Illuminate\Database\Eloquent\Model;
use App\Http\Controllers\StudentController;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Students extends Model
{

    //you need to make permission here to access the database: create: update: delete:
    //it is only for specific area
    // protected $fillable = ['first_name', 'last_name', 'age', 'gender', 'email'];
    //if you want to select all to edit use
    protected $table = 'students';
    protected $fillable = [
        'subject_id',
        'classroom_id',
        'LRN',
        'first_name',
        'last_name',
        'gender',
        'age',
        'email'
    ];
    use HasFactory;

    public function subject() {
        return $this->belongsTo(Subject::class, 'subject_id', 'id');
    }

    public function classroom(){
        return $this->belongsTo(Classroom::class, 'classroom_id', 'id');
    }





}



