<?php

namespace App\Http\Controllers;

use App\Models\Student;
use App\Models\Study;
use Illuminate\Http\Request;

class StudentController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('student.index', [
            'title' => 'Student Page',
            'students' => Student::latest()->get()
        ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('student.create', [
            'title' => 'Student Create',
            'studies' => Study::all()
        ]);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $validated = $request->validate(
            [
                'name' => 'required',
                'nim' => 'required|numeric|digits:12',
                'study_id' => 'required|numeric',
            ]
        );

        Student::create($validated);
        return redirect()->route('student.index')->with('success', 'Data added successfully');
    }

    /**
     * Display the specified resource.
     */
    public function show(Student $student)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Student $student)
    {
        return view('student.edit', [
            'title' => 'Student Edit',
            'studies' => Study::all(),
            'student' => $student
        ]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Student $student)
    {
        $validated = $request->validate(
            [
                'name' => 'required',
                'nim' => 'required|numeric|digits:12',
                'study_id' => 'required|numeric',
            ]
        );

        $student->update($validated);
        return redirect()->route('student.index')->with('success', 'Data updated successfully');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Student $student)
    {
        $student->delete();
        return redirect()->route('student.index')->with('success', 'Data deleted successfully');
    }
}
