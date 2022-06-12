<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Teacher;

class TeacherController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data['teachers'] = teacher::orderBy('id','desc')->paginate(5);
        return view('teachers.index', $data);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('teachers.create');
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
            'matiere' => 'required',
            'email' => 'required',
            'address' => 'required'
            ]);
            $teacher = new teacher;
            $teacher->nom = $request->nom;
            $teacher->prenom = $request->prenom;
            $teacher->matiere = $request->matiere;
            $teacher->email = $request->email;
            $teacher->address = $request->address;
            $teacher->save();
            return redirect()->route('teachers.index')
            ->with('success','teacher has been created successfully.');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(Teacher $teacher)
    {
        return view('teachers.show',compact('teacher'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(Teacher $teacher)
    {
        return view('teachers.edit',compact('teacher'));
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
            'matiere' => 'required',
            'email' => 'required',
            'address' => 'required'
            ]);
            $teacher = teacher::find($id);
            $teacher->nom = $request->nom;
            $teacher->prenom = $request->prenom;
            $teacher->matiere = $request->matiere;
            $teacher->email = $request->email;
            $teacher->address = $request->address;
            $teacher->save();
            return redirect()->route('teachers.index')
            ->with('success','teacher has been updated successfully.');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Teacher $teacher)
    {
        $teacher->delete();
return redirect()->route('teachers.index')
->with('success','teacher has been deleted successfully');
    }
}
