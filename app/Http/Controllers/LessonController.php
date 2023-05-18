<?php

namespace App\Http\Controllers;

use App\Http\Requests\LessonFormRequest;
use App\Models\Lesson;
use App\Models\Subject;
use Illuminate\Http\Request;

class LessonController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $subject = Subject::all();
        return view('lessons.create', compact('subject'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(LessonFormRequest $request)
    {
        $validatedData = $request->validated();
        $subject = Subject::findOrFail($validatedData['subject_id']);

        $lessons = $subject->lessons()->create([
            'subject_id' =>$validatedData['subject_id'],
            'lessons' => $validatedData['lessons'],
            'files' => $validatedData['files']
            ]);

         if ($request->hasFile('files')) {
            $uploadPath = 'files/lessons/';
            $i = 1;
            foreach ($request->file('files') as $filesFile) {
                $extention = $filesFile->getClientOriginalExtension();
                $filename = time() . $i++ . '.' . $extention;
                $filesFile->move($uploadPath, $filename);
                $finalImagePathName = $uploadPath.$filename;

                $lessons->lessons()->create([
                    'files' => $finalImagePathName
                ]);
            }
        }


        return redirect('lessons/create')->with('message', 'Lessons Added Successfully');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
