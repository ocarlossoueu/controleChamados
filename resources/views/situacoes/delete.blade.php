@extends('layouts.app')

@section('content')
    <h1>Excluir Situação</h1>

    <p>Tem certeza de que deseja excluir a situação?</p>

    <table class="table">
        <tr>
            <th>ID</th>
            <td>{{ $situacao->id }}</td>
        </tr>
        <tr>
            <th>Descrição</th>
            <td>{{ $situacao->descricao }}</td>
        </tr>
    </table>

    <form action="{{ route('situacoes.destroy', $situacao) }}" method="POST" class="d-inline">
        @csrf
        @method('DELETE')
        <button type="submit" class="btn btn-danger">Excluir</button>
    </form>
    <a href="{{ route('situacoes.index') }}" class="btn btn-secondary">Cancelar</a>
@endsection
