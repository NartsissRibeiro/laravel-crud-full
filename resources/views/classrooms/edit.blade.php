@extends('layouts.app')
@section('title', 'Editar Classe')
@section('content')
<h1>Editar Classe</h1>
<form action="{{ route('classrooms.update', $classroom) }}" method="POST">
@csrf
@method('PUT') 
<div class="mb-3">
<label for="name" class="form-label">Nome</label>
<input type="text" name="name" value="{{ old('name', $classroom->name) }}"
class="form-control @error('name') is-invalid @enderror" id="name" />
@error('name')
<div class="invalid-feedback">{{ $message }}</div>
@enderror
</div>
<button type="submit" class="btn btn-primary">Atualizar</button>
<a href="{{ route('classrooms.index') }}" class="btn btn-secondary">Voltar</a>
</form>
@endsection