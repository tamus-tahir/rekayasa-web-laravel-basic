<?php

namespace App\Http\Controllers;

use App\Models\Study;
use Illuminate\Http\Request;

class StudyController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('study.index', [
            'title' => 'Study Page',
            'studies' => Study::latest()->get()
        ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('study.create', [
            'title' => 'Study Create',
        ]);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $validated = $request->validate(
            ['name' => 'required|max:255'],
        );

        Study::create($validated);
        return redirect()->route('study.index')->with('success', 'Data added successfuly');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Study $study)
    {
        return view('study.edit', [
            'title' => 'Study Edit',
            'study' => $study
        ]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Study $study)
    {
        $validated = $request->validate(
            ['name' => 'required|max:255'],
        );

        $study->update($validated);
        return redirect()->route('study.index')->with('success', 'Data updated successfuly');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Study $study)
    {
        $study->delete();
        return redirect()->route('study.index')->with('success', 'Data deleted successfuly');
    }
}
