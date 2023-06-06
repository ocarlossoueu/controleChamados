@extends('layouts.app')

@section('content')
    <h1>Situações</h1>

    <a href="{{ route('situacoes.create') }}" class="btn btn-primary">Criar Situação</a>

    <table class="table">
        <thead>
            <tr>
                <th>ID</th>
                <th>Descrição</th>
                <th>Ações</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($situacoes as $situacao)
                <tr>
                    <td>{{ $situacao->id }}</td>
                    <td>{{ $situacao->descricao }}</td>
                    <td>
                        <a href="{{ route('situacoes.edit', $situacao) }}" class="btn btn-sm btn-primary">Editar</a>
                        <a href="{{ route('situacoes.delete', $situacao) }}" class="btn btn-sm btn-danger">Excluir</a>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
@endsection
