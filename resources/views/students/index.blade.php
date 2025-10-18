@extends('layouts.app')
@section('title', 'Lista de Estudante')
@section('content')

    <h1>Lista de Estudante</h1>

    <a href="{{ route('students.create') }}" class="btn btn-primary mb-3">Adicionar Estudante</a>

    <table class="table table-bordered">
        <thead>
            <tr>
                <th>Nome</th>
                <th>Classes</th>
                <th>Ações</th>
            </tr>
    </thead>
    <tbody>
        @forelse($students as $student)
            <tr>
                <td>{{ $student->name }}</td>
                <td>{{ $student->classroom_id }}</td>
                <td>
                    <a href="{{ route('students.show', $student) }}" class="btn btn-info btn-sm">Ver</a>
                    <a href="{{ route('students.edit', $student) }}" class="btn btn-warning btn-sm">Editar</a>

                {{-- Form para deletar --}}

                <form action="{{ route('students.destroy', $student) }}" method="POST" class="d-inline" onsubmit="return confirm('Confirma exclusão?')">
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
{{ $students->links() }}
@endsection            