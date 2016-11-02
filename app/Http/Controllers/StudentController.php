<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Student;
use App\StudentMark;
use Auth;
use Redirect;
class StudentController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $students = Student::all();
        foreach($students as $st){
            $st->marks = StudentMark::where('student_id',$st->id)->first();
        }
        $action = "Students";
        $name = Auth::user()->name;
        return view('students.index',compact('students','name','action'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $action = "Add New Student";
        return view('students.create',compact('action')); 
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $data = $request->all();
        $student = new Student;
        if(isset($data['name']))
        $student->name = $data['name'];
        if(isset($data['rollno']))
        $student->rollno = $data['rollno'];
        if(isset($data['email']))
        $student->email = $data['email'];
        if(isset($data['contact']))
        $student->contact = $data['contact'];
        if(isset($data['course']))
        $student->course = $data['course'];
        if(isset($data['branch']))
        $student->branch = $data['branch'];
        $student->save();
        $studentMark = new StudentMark;

        $studentMark->student_id = $student->id;
        if(isset($data['diploma']))
        $studentMark->diploma = $data['diploma'];
        if(isset($data['Xmarkstype']))
        $studentMark->Xmarkstype = $data['Xmarkstype'];
        if(isset($data['Xmarks']))
        $studentMark->Xmarks = $data['Xmarks'];
        if(isset($data['XIImarkstype']))
        $studentMark->XIImarkstype = $data['XIImarkstype'];
        if(isset($data['XIImarks']))
        $studentMark->XIImarks = $data['XIImarks'];
        if(isset($data['diplomayr1']))
        $studentMark->diplomayr1 = $data['diplomayr1'];
        if(isset($data['diplomayr2']))
        $studentMark->diplomayr2 = $data['diplomayr2'];
        if(isset($data['sem1']))
        $studentMark->sem1 = $data['sem1'];
        if(isset($data['sem2']))
        $studentMark->sem2 = $data['sem2'];
        if(isset($data['sem3']))
        $studentMark->sem3 = $data['sem3'];
        if(isset($data['sem4']))
        $studentMark->sem4 = $data['sem4'];
        if(isset($data['sem5']))
        $studentMark->sem5 = $data['sem5'];
        if(isset($data['sem6']))
        $studentMark->sem6 = $data['sem6'];
        if(isset($data['sem7']))
        $studentMark->sem7 = $data['sem7'];
        if(isset($data['sem8']))
        $studentMark->sem8 = $data['sem8'];
        $studentMark->save();
        return Redirect::route('students.index')->with('success',"New Student Successfully Added");

    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
       
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
         $action = "Edit Student";
        $student = Student::find($id);
        $studentMark = StudentMark::where('student_id',$student->id)->first();
        return view('students.edit',compact('student','studentMark','action')); 
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
        $student = Student::find($id);
        $studentMark = StudentMark::where('student_id', $student->id)->first();
        $data = $request->all();
        $student->name = $data['name'];
        $student->rollno = $data['rollno'];
        $student->email = $data['email'];
        $student->contact = $data['contact'];
        $student->course = $data['course'];
        $student->branch = $data['branch'];
        $student->save();
        $studentMark->diploma = $data['diploma'];
        $studentMark->Xmarkstype = $data['Xmarkstype'];
        $studentMark->Xmarks = $data['Xmarks'];
        $studentMark->XIImarkstype = $data['XIImarkstype'];
        $studentMark->XIImarks = $data['XIImarks'];
        $studentMark->diplomayr1 = $data['diplomayr1'];
        $studentMark->diplomayr2 = $data['diplomayr2'];
        $studentMark->sem1 = $data['sem1'];
        $studentMark->sem2 = $data['sem2'];
        $studentMark->sem3 = $data['sem3'];
        $studentMark->sem4 = $data['sem4'];
        $studentMark->sem5 = $data['sem5'];
        $studentMark->sem6 = $data['sem6'];
        $studentMark->sem7 = $data['sem7'];
        $studentMark->sem8 = $data['sem8'];
        $studentMark->save();
        return Redirect::route('students.index')->with('success',"Student Record Successfully Updated");
    }


    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $student = Student::find($id);
        $student->delete();
        return Redirect::route('students.index')->with('success',"Student Record Successfully Deleted");

    }
}
