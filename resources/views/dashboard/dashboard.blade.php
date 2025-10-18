@extends('layouts.app')

@section('title', 'Painel Principal')

@section('content')
<div class="container mt-5">
    <div class="card shadow-lg border-0 rounded-4">
        <div class="card-body text-center p-5">
            <h1>Painel de Controle</h1>

            <div class="row justify-content-center g-4">
                <div class="col-md-3 col-sm-6">
                    <a href="{{ route('students.index') }}" class="btn btn-outline-primary btn-lg w-100 py-4 rounded-4 shadow-sm">
                        <i class="bi bi-people-fill display-5 d-block mb-2"></i>
                        <span class="fw-semibold fs-5">Estudantes</span>
                    </a>
                </div>

                <div class="col-md-3 col-sm-6">
                    <a href="{{ route('classrooms.index') }}" class="btn btn-outline-success btn-lg w-100 py-4 rounded-4 shadow-sm">
                        <i class="bi bi-door-open-fill display-5 d-block mb-2"></i>
                        <span class="fw-semibold fs-5">Classes</span>
                    </a>
                </div>

                <div class="col-md-3 col-sm-6">
                    <a href="{{ route('courses.index') }}" class="btn btn-outline-warning btn-lg w-100 py-4 rounded-4 shadow-sm">
                        <i class="bi bi-book-fill display-5 d-block mb-2"></i>
                        <span class="fw-semibold fs-5">Cursos</span>
                    </a>
                </div>
            </div>