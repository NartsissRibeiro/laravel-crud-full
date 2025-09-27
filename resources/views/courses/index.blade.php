@extends('layouts.app')

@section('title', 'Lista de Cursos')

@section('content')

    <h1>Lista de Cursos</h1>

    <a href="{{ route('courses.create') }}" class="btn btn-primary mb-3">Adicionar Curso</a>

    <table class="table table-bordered">
        <thead>
            <tr>
                <th>Nome</th>
                <th>Descrição</th>
                <th>Ações</th>
            </tr>
    </thead>
    <tbody>
        @forelse($courses as $course)
            <tr>
                <td>{{ $course->name }}</td>
                <td>{{ \Illuminate\Support\Str::limit($course->description, 50) }}</td> {{-- Limita texto --}}
                <td>
                    <a href="{{ route('courses.show', $course) }}" class="btn btn-info btn-sm">Ver</a>
                    <a href="{{ route('courses.edit', $course) }}" class="btn btn-
warning btn-sm">Editar</a>

                {{-- Form para deletar --}}

                <form action="{{ route('courses.destroy', $course) }}" method="POST" class="d-inline" onsubmit="return confirm('Confirma exclusão?')">
                    @csrf
                    @method('DELETE')
                    <button class="btn btn-danger btn-sm" type="submit">Deletar</button>
                </form>
                </td>
            </tr>
            @empty
                <tr>
                    <td colspan="3">Nenhum curso cadastrado.</td>
                </tr>
            @endforelse
    </tbody>
    </table>
{{-- Links de paginação --}}
{{ $courses->links() }}
@endsection            