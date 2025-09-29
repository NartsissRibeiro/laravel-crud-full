<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ClassroomController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $classrooms = Classroom::orderBy('created_at', 'desc')->paginate(5);
        return view('Classrooms.index', compact('classroom'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('Classrooms.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(ClassroomRequest $request)
    {
        Classroom::create($request->validated());
        return redirect()->route('classrooms.index')->with('success', 'Classe criado com sucesso!');
    }

    /**
     * Display the specified resource.
     */
    public function show(Classroom $classroom)
    {
         $course = $classroom->Course;
         return view('classrooms.show', compact('classroom', 'course'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Classroom $classroom)
    {
         return view('classrooms.edit', compact('classroom'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(ClassroomRequest $request, Classroom $classroom)
    {
       Classroom::update($request->validated());
       return redirect()->route('classrooms.index')->with('success', 'Classe atualizada com sucesso!'); 
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Classroom $classroom)
    {
        $classroom->delete();
        return redirect()->route('classrooms.index')->with('success', 'Classe deletada com sucesso!');
    }
}
