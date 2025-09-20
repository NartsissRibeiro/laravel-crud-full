@extends('layouts.app')
@section('title', 'Editar Curso')
@section('content')
<h1>Editar Curso</h1>
<form action="{{ route('courses.update', $course) }}" method="POST">
@csrf {{-- Proteção contra CSRF --}}
@method('PUT') {{-- Define método PUT para atualização --}}
<div class="mb-3">
<label for="name" class="form-label">Nome</label>
<input type="text" name="name" value="{{ old('name', $course->name) }}"
class="form-control @error('name') is-invalid @enderror" id="name" />
@error('name')
<div class="invalid-feedback">{{ $message }}</div>
@enderror
</div>
<div class="mb-3">
<label for="description" class="form-label">Descrição</label>

<textarea name="description" class="form-control @error('description') is-
invalid @enderror"

id="description">{{ old('description', $course->description) }}</textarea>
@error('description')
<div class="invalid-feedback">{{ $message }}</div>
@enderror
</div>
<button type="submit" class="btn btn-primary">Atualizar</button>
<a href="{{ route('courses.index') }}" class="btn btn-secondary">Voltar</a>
</form>
@endsection