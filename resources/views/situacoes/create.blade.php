@extends('layouts.app')

@section('content')
    <h1>Criar Situação</h1>

    <form action="{{ route('situacoes.store') }}" method="POST">
        @csrf

        <div class="form-group">
            <label for="descricao">Descrição</label>
            <input type="text" name="descricao" id="descricao" class="form-control">
        </div>

        <button type="submit" class="btn btn-primary">Criar</button>
    </form>
@endsection
