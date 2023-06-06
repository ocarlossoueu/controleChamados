@extends('layouts.app')

@section('content')
    <h1>Editar Setor</h1>

    <form action="{{ route('setores.update', $setor) }}" method="POST">
        @csrf
        @method('PUT')

        <div class="form-group">
            <label for="descricao">Descrição</label>
            <input type="text" name="descricao" id="descricao" class="form-control" value="{{ $setor->descricao }}">
        </div>

        <button type="submit" class="btn btn-primary">Atualizar</button>
    </form>
@endsection
