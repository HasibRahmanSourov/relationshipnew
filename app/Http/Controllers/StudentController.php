<?php

namespace App\Http\Controllers;

use App\Student;
use App\District;
use Illuminate\Http\Request;

class StudentController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('student.index', ['students'=>Student::all()]);

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $districts = District::all();
        return view('student.create', compact('districts'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $student = new Student;
        $this->validate($request, [
            'fullname' => 'required|max:50|',
            'batch' => 'required',
            'phone' => 'required',
            'address' => 'max:300',
            'district' => 'required',
            'photo' => 'mimes:jpg,png|max:1000',

        ]);
        $path = $request->file('photo')->store('public/images');

        $student->name = $request->fullname;
        $student->batch_id = $request->batch;
        $student->phone = $request->phone;
        $student->address = $request->address;
        $student->district_id = $request->district;
        $student->photo = $request->photo;
        $student->photo = "storage/images/".$request->file('photo')->hashName();
        $student->save();
        return redirect()->route('student.create')->with('success', 'Successfully submited');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Student  $student
     * @return \Illuminate\Http\Response
     */
    public function show(Student $student)
    {
        return "Hello";
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Student  $student
     * @return \Illuminate\Http\Response
     */
    public function edit(Student $student)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Student  $student
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Student $student)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Student  $student
     * @return \Illuminate\Http\Response
     */
    public function destroy(Student $student)
    {
        //
    }
}
