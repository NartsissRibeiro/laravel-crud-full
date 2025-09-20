@extends('layouts.app')
@section('title', 'Criar Curso')
@section('content')
<h1>Criar Curso</h1>
{{-- Formulário POST para adicionar novo curso --}}
<form action="{{ route('courses.store') }}" method="POST">
@csrf {{-- Proteção contra CSRF --}}
@method('POST') {{-- Define método POST para inclusão --}}
<div class="mb-3">
<label for="name" class="form-label">Nome</label>
{{-- Campo texto --}}
<input type="text" name="name" value="{{ old('name') }}"
class="form-control @error('name') is-invalid @enderror" id="name" />
{{-- Mensagem de erro --}}
@error('name')
<div class="invalid-feedback">{{ $message }}</div>
@enderror
</div>
<div class="mb-3">
<label for="description" class="form-label">Descrição</label>
{{-- Área de texto --}}

<textarea name="description" class="form-control @error('description') is-
invalid @enderror"

id="description">{{ old('description') }}</textarea>
{{-- Mensagem de erro --}}
@error('description')
<div class="invalid-feedback">{{ $message }}</div>
@enderror
</div>
<button type="submit" class="btn btn-success">Salvar</button>
<a href="{{ route('courses.index') }}" class="btn btn-secondary">Voltar</a>
</form>
@endsection