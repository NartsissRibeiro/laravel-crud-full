@extends('layouts.app')
@section('title', 'Detalhes do Curso')
@section('content')
<h1>Detalhes do Curso</h1>
<ul class="list-group mb-3">
<li class="list-group-item"><strong>Nome:</strong> {{ $course->name }}</li>
<li class="list-group-item"><strong>Descrição:</strong> {{ $course->description }}</li>
</ul>
<a href="{{ route('courses.index') }}" class="btn btn-secondary">Voltar</a>
@endsection