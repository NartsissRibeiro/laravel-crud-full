<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Course;
use App\Models\Classroom;
use App\Http\Requests\ClassroomRequest;

class ClassroomController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $classrooms = Classroom::orderBy('created_at', 'desc')->paginate(5);
        return view('classrooms.index', compact('classrooms'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {   
        $courses = Course::all();
        return view('classrooms.create', compact('courses'));
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
         $courses = $classroom->course;
         return view('classrooms.show', compact('classroom', 'courses'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Classroom $classroom)
    {   $courses = Course::all();
         return view('classrooms.edit', compact('classroom','courses'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(ClassroomRequest $request, Classroom $classroom)
    {
       $classroom->update($request->validated());
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
