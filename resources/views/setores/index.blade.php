@extends('layouts.app')

@section('content')
    <h1>Setores</h1>

    <a href="{{ route('setores.create') }}" class="btn btn-primary">Criar Setor</a>

    <table class="table">
        <thead>
            <tr>
                <th>ID</th>
                <th>Descrição</th>
                <th>Ações</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($setores as $setor)
                <tr>
                    <td>{{ $setor->id }}</td>
                    <td>{{ $setor->descricao }}</td>
                    <td>
                        <a href="{{ route('setores.edit', $setor) }}" class="btn btn-sm btn-primary">Editar</a>
                        <a href="{{ route('setores.delete', $setor) }}" class="btn btn-sm btn-danger">Excluir</a>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
@endsection
