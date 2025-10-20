@extends('layouts.app')

@section('title', 'Painel Principal')

@section('content')
<div class="container mt-5 text-center">
    <h1 class="mb-4">Painel de Controle</h1>

    <div class="row justify-content-center g-3">
        <div class="col-md-3 col-sm-6">
            <a href="{{ route('students.index') }}" class="btn btn-primary w-100 py-3">
                <i class="bi bi-people-fill me-2"></i> Estudantes
            </a>
        </div>

        <div class="col-md-3 col-sm-6">
            <a href="{{ route('classrooms.index') }}" class="btn btn-success w-100 py-3">
                <i class="bi bi-door-open-fill me-2"></i> Classes
            </a>
        </div>

        <div class="col-md-3 col-sm-6">
            <a href="{{ route('courses.index') }}" class="btn btn-warning w-100 py-3 text-dark">
                <i class="bi bi-book-fill me-2"></i> Cursos
            </a>
        </div>
    </div>
</div>
@endsection
