@extends('layouts.app')
@section('title', 'Detalhes das Classes')
@section('content')
<h1>Detalhes das Classes</h1>
<ul class="list-group mb-3">
<li class="list-group-item"><strong>Nome:</strong> {{ $classroom->name }}</li>
<li class="list-group-item"><strong>Cursos:</strong> {{ $classroom->course_id }}</li>
</ul>
<a href="{{ route('classrooms.index') }}" class="btn btn-secondary">Voltar</a>
@endsection