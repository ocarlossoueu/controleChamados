@extends('layouts.app')

@section('content')
    <h1>Excluir Chamado</h1>

    <p>Tem certeza de que deseja excluir o chamado?</p>

    <table class="table">
        <tr>
            <th>ID</th>
            <td>{{ $chamado->id }}</td>
        </tr>
        <tr>
            <th>Setor</th>
            <td>{{ $chamado->setor->descricao }}</td>
        </tr>
        <tr>
            <th>Situação</th>
            <td>{{ $chamado->situacao->descricao }}</td>
        </tr>
        <tr>
            <th>Título</th>
            <td>{{ $chamado->titulo }}</td>
        </tr>
        <tr>
            <th>Descrição</th>
            <td>{{ $chamado->descricao }}</td>
        </tr>
        <tr>
            <th>Prazo de Término</th>
            <td>{{ $chamado->prazo_termino }}</td>
        </tr>
        <tr>
            <th>Data de Criação</th>
            <td>{{ $chamado->created_at }}</td>
        </tr>
        <tr>
            <th>Data de Atualização</th>
            <td>{{ $chamado->updated_at }}</td>
        </tr>
    </table>

    <form action="{{ route('chamados.destroy', $chamado) }}" method="POST" class="d-inline">
        @csrf
        @method('DELETE')
        <button type="submit" class="btn btn-danger">Excluir</button>
    </form>
    <a href="{{ route('chamados.index') }}" class="btn btn-secondary">Cancelar</a>
@endsection
