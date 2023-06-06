@extends('layouts.app')

@section('content')
    <h1>Excluir Setor</h1>

    <p>Tem certeza de que deseja excluir o setor?</p>

    <table class="table">
        <tr>
            <th>ID</th>
            <td>{{ $setor->id }}</td>
        </tr>
        <tr>
            <th>Descrição</th>
            <td>{{ $setor->descricao }}</td>
        </tr>
    </table>

    <form action="{{ route('setores.destroy', $setor) }}" method="POST" class="d-inline">
        @csrf
        @method('DELETE')
        <button type="submit" class="btn btn-danger">Excluir</button>
    </form>
    <a href="{{ route('setores.index') }}" class="btn btn-secondary">Cancelar</a>
@endsection
