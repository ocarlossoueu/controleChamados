@extends('layouts.app')

@section('content')
    <h1>Lista de Chamados</h1>

    @if (session('success'))
        <div class="alert alert-success">
            {{ session('success') }}
        </div>
    @endif

    <a href="{{ route('chamados.create') }}" class="btn btn-primary mb-3">Novo Chamado</a>

    <table class="table">
        <thead>
            <tr>
                <th>ID</th>
                <th>Setor</th>
                <th>Situação</th>
                <th>Título</th>
                <th>Descrição</th>
                <th>Prazo de Término</th>
                <th>Data de Criação</th>
                <th>Data de Atualização</th>
                <th>Ações</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($chamados as $chamado)
                <tr>
                    <td>{{ $chamado->id }}</td>
                    <td>{{ $chamado->setor->descricao }}</td>
                    <td>{{ $chamado->situacao->descricao }}</td>
                    <td>{{ $chamado->titulo }}</td>
                    <td>{{ $chamado->descricao }}</td>
                    <td>{{ $chamado->prazo_termino }}</td>
                    <td>{{ $chamado->created_at }}</td>
                    <td>{{ $chamado->updated_at }}</td>
                    <td>
                        <a href="{{ route('chamados.edit', $chamado) }}" class="btn btn-primary btn-sm">Editar</a>
                        <form action="{{ route('chamados.destroy', $chamado) }}" method="POST" class="d-inline">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="btn btn-danger btn-sm">Excluir</button>
                        </form>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
@endsection