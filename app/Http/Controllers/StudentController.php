<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class StudentController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $students = Student::orderBy('Created_at', 'desc')->paginate(5);
        return view('students.index', compact('student'));

    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('students.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StudentRequest $request)
    {
        Student::create($request->validated());
        return redirect()->route('students.index')->with('success', 'Estudante cadastrado com sucesso!');
    }

    /**
     * Display the specified resource.
     */
    public function show(Student $student)
    {
        return view('students.index');
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        return view('students.index');
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(StudentRequest $request, Student $Studen)
    {
        Student::update($request->validated());
       return redirect()->route('students.index')->with('success', 'Estudante atualizada com sucesso!'); 
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
         $student->delete();
        return redirect()->route('students.index')->with('success', 'Estudante deletada com sucesso!');
    }
}
