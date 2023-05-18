<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\Subject;
use App\Models\Students;
use App\Models\Classroom;
use Illuminate\Http\Request;
use Illuminate\Validation\Rule;
use Illuminate\Support\Facades\DB;
use App\Http\Requests\StudentUpdateForm;
use App\Http\Requests\StudentFormRequest;

class StudentController extends Controller
{
    public function index()
    {
        //the studens::all : access all the data from the table students in the database

        //if you want to only access one specific perspadon you can use:'where('id', 15)->get();'
        //use can also use:  $data = Students::all();
        // $data = Students::where('id', 15)->get();
        // dd($data); //user: for debugging purposes
        //to access the student data from resources: student the folder name: index: the file name


        //wildcard query::select only specifi data from the table
        //$data = Students::where('age', '>', 19)->orderBy('first_name', 'asc')->get();

        //wildcard query::select only specifi data from the table and some limit
        // $data = Students::where('age', '>', 19)->orderBy('last_name', 'asc')->limit(4)->get();

        // $data = Students::where('first_name', 'like','%a%')->limit(5)->orderBy('first_name', 'asc')->
        // get();

        // $data = DB::table('students')
        // ->select(DB::raw('count(*) as gender_count, gender'))->groupBy('gender')->get();

        //show all students
        // $data = Students::all();
        // return view('students.index', ['students' => $data]);

        // $data = array("students" => DB::table('students')->orderBy('created_at', 'desc')->paginate(10));
        // $subject = Subject::all();
        // return view('students.index', $data, $subject);

        // $students = Students::get('students')->get();
        // $subject = Subject::get('subject')->get();
         $classroom = Classroom::all();
         $students = Students::all();
         $subject = Subject::all();
        return view('admin.student', compact('students', 'subject', 'classroom'));


    }

    public function create()
    {
        $classroom = Classroom::all();
        $subject = Subject::all();
        return view('students.create', compact('subject', 'classroom'))->with('title', 'Add New');

    }
    public function show($id)
    {

        $data = Students::findOrFail($id);
        return view('students.edit', ['student' => $data])->with('title', 'Edit Student');
    }
    //add function


    public function update(StudentUpdateForm $request, Students $student)
    {
        $validatedData = $request->validated();

        $student = Students::findOrFail($student);

        $student->first_name = $validatedData['first_name'];
        $student->last_name = $validatedData['last_name'];
        $student->gender = $validatedData['gender'];
        $student->age = $validatedData['age'];
        $student->email = $validatedData['email'];

        $student->update();
        return back()->with('message', 'Data was updated successfully');
    }

    public function store(StudentFormRequest $request)
    {
        //this is where u validate the content of the form
        $validatedData = $request->validated();
        $subject = Subject::findOrFail($validatedData['subject_id']);
        $classroom = Classroom::findOrFail($validatedData['classroom_id']);

        $classroom and $subject->students()->create([
            'classroom_id' => $validatedData['classroom_id'],
            'subject_id' => $validatedData['subject_id'],
            'first_name' => $validatedData['first_name'],
            'last_name' => $validatedData['last_name'],
            'gender' => $validatedData['gender'],
            'age' => $validatedData['age'],
            'email' => $validatedData['email']
        ]);

        return redirect('/')->with('message', 'Student Added Successfully')->with('message', 'Student Added Successfully');
    }



public function destroy (Request $request, Students $student) {
        $student->delete();
        return redirect('/')->with('message', 'Student Deleted Successfully');


}

    public function dashboard()
    {
        return view('index');
    }


}
