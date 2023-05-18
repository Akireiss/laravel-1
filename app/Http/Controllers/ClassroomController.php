<?php

namespace App\Http\Controllers;

use App\Http\Requests\ClasssroomFormRequest;
use App\Models\Teacher;
use App\Models\Classroom;
use Illuminate\Http\Request;

class ClassroomController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $adviser = Teacher::all();
        $classroom = Classroom::all();
        return view('classroom.index', compact('classroom', 'adviser'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $advisers = Teacher::all();
        return view('classroom.create', compact('advisers'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(ClasssroomFormRequest $request)
    {
        $validatedData = $request->validated();
        $adviser = Teacher::findOrFail($validatedData['adviser_id']);

        $adviser->classroom()->create([
            'adviser_id' => $validatedData['adviser_id'],
            'grade' => $validatedData['grade'],
            'section' => $validatedData['section']
        ]);

        return redirect('/classroom')->with('message', 'Student Added Successfully');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($classroom)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($classroom)
    {
        dd($request);
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
