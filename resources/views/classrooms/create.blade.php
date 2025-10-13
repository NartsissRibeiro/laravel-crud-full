@extends('layouts.app')
@section('title', 'Criar Classe')
@section('content')
<h1>Criar Classe</h1>
<form action="{{ route('classrooms.store') }}" method="POST">
@csrf 
@method('POST')
<div class="mb-3">
<label for="name" class="form-label">Nome</label>

<input type="text" name="name" value="{{ old('name') }}"
class="form-control @error('name') is-invalid @enderror" id="name" />
@error('name')
<div class="invalid-feedback">{{ $message }}</div>
@enderror
</div>
<div class="mb-3">
<label for="course_id" class="form-label">Curso</label>

<select id="course_id" name="course_id"
    class="form-control @error('course_id') is-invalid @enderror">
    <option value="">Selecione um Curso</option>
    @foreach ($courses as $course)
    <option value="{{$course->id}}" {{ old('course_id') == $course->id ? 'selected' : '' }}>
        {{ $course->name }}
    </option>
    @endforeach
</select>
@error('course_id')
<div class="invalid-feedback">{{ $message }}</div>
@enderror
</div>
<button type="submit" class="btn btn-success">Salvar</button>
<a href="{{ route('classrooms.index') }}" class="btn btn-secondary">Voltar</a>
</form>
@endsection