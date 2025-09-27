@extends('layouts.app')
@section('title', 'Detalhes dos Alunos')
@section('content')
<h1>Detalhes dos Alunos</h1>
<ul class="list-group mb-3">
    <li class="list-group-item">
        <strong>Nome:</strong> {{ $student->name }}
    </li>
    <li class="list-group-item">
        <strong>Email:</strong> {{ $student->email }}
    </li>
    <li class="list-group-item">
        <strong>Sala:</strong> {{ $student->classroom->name }}
    </li>
</ul>
<a href="{{ route('students.index') }}" class="btn btn-secondary">Voltar</a>
@endsection