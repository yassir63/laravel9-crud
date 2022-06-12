<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Student;


class StudentController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data['students'] = student::orderBy('id','desc')->paginate(5);
        return view('students.index', $data);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('students.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
            'nom' => 'required',
            'prenom' => 'required',
            'filiere' => 'required',
            'email' => 'required',
            'address' => 'required'
            ]);
            $student = new Student;
            $student->nom = $request->nom;
            $student->prenom = $request->prenom;
            $student->filiere = $request->filiere;
            $student->email = $request->email;
            $student->address = $request->address;
            $student->save();
            return redirect()->route('students.index')
            ->with('success','student has been created successfully.');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(Student $student)
    {
        return view('students.show',compact('student'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(Student $student)
    {
        return view('students.edit',compact('student'));
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
        $request->validate([
            'nom' => 'required',
            'prenom' => 'required',
            'filiere' => 'required',
            'email' => 'required',
            'address' => 'required'
            ]);
            $student = Student::find($id);
            $student->nom = $request->nom;
            $student->prenom = $request->prenom;
            $student->filiere = $request->filiere;
            $student->email = $request->email;
            $student->address = $request->address;
            $student->save();
            return redirect()->route('students.index')
            ->with('success','student has been updated successfully.');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Student $student)
    {
        $student->delete();
return redirect()->route('students.index')
->with('success','student has been deleted successfully');
    }
}
