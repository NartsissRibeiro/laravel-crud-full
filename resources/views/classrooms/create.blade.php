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
<button type="submit" class="btn btn-success">Salvar</button>
<a href="{{ route('classrooms.index') }}" class="btn btn-secondary">Voltar</a>
</form>
@endsection