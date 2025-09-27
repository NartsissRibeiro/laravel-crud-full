@extends('layouts.app')
@section('title', 'Editar Estudante')
@section('content')
    <h1>Editar Estudante</h1>
<form action="{{ route('students.update', $student) }}" method="POST">
    @csrf
    @method('PUT')
<div class="mb-3">
<label for="name" class="form-label">Nome</label>
<input type="text" name="name" value="{{ old('name', $student->name) }}"
class="form-control @error('name') is-invalid @enderror" id="name" />
@error('name')
<div class="invalid-feedback">{{ $message }}</div>
@enderror
</div>
<div class="mb-3">
<label for="email" class="form-label">Email</label>
<input type="email" name="email" class="form-control @error('email') is-invalid @enderror" id="email">
{{ old('email', $student->email) }}
</input>
@error('email')
<div class="invalid-feedback">{{ $message }}</div>
@enderror
</div>
<button type="submit" class="btn btn-primary">Atualizar</button>
<a href="{{ route('students.index') }}" class="btn btn-secondary">Voltar</a>
</form>
@endsection