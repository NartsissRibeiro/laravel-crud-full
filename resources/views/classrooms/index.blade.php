@extends('layouts.app')

@section('title', 'Lista de Classe')

@section('content')

    <h1>Lista de Classes</h1>

    <a href="{{ route('classrooms.create') }}" class="btn btn-primary mb-3">Adicionar Classes</a>

    <table class="table table-bordered">
        <thead>
            <tr>
                <th>Nome</th>
                <th>Cursos</th>
                <th>Ações</th>
            </tr>
    </thead>
    <tbody>
        @forelse($classrooms as $classroom)
            <tr>
                <td>{{ $classroom->name }}</td>
                <td>{{ $classroom->course_id }}</td>
                <td>
                    <a href="{{ route('classrooms.show', $classroom) }}" class="btn btn-info btn-sm">Ver</a>
                    <a href="{{ route('classrooms.edit', $classroom) }}" class="btn btn-warning btn-sm">Editar</a>

                {{-- Form para deletar --}}

                <form action="{{ route('classrooms.destroy', $classroom) }}" method="POST" class="d-inline" onsubmit="return confirm('Confirma exclusão?')">
                    @csrf
                    @method('DELETE')
                    <button class="btn btn-danger btn-sm" type="submit">Deletar</button>
                </form>
                </td>
            </tr>
            @empty
                <tr>
                    <td colspan="3">Nenhuma classe cadastrado.</td>
                </tr>
            @endforelse
    </tbody>
    </table>
{{ $classrooms->links() }}
@endsection            