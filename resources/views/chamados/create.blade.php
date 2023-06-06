@extends('layouts.app')

@section('content')
    <h1>Novo Chamado</h1>

    <form action="{{ route('chamados.store') }}" method="POST">
        @csrf

        <div class="form-group">
            <label for="setor_id">Setor</label>
            <select name="setor_id" id="setor_id" class="form-control">
                @foreach ($setores as $setor)
                    <option value="{{ $setor->id }}">{{ $setor->descricao }}</option>
                @endforeach
            </select>
        </div>

        <div class="form-group">
            <label for="situacao_id">Situação</label>
            <select name="situacao_id" id="situacao_id" class="form-control">
                @foreach ($situacoes as $situacao)
                    <option value="{{ $situacao->id }}">{{ $situacao->descricao }}</option>
                @endforeach
            </select>
        </div>

        <div class="form-group">
            <label for="titulo">Título</label>
            <input type="text" name="titulo" id="titulo" class="form-control">
        </div>

        <div class="form-group">
            <label for="descricao">Descrição</label>
            <textarea name="descricao" id="descricao" class="form-control"></textarea>
        </div>

        <div class="form-group">
            <label for="prazo_termino">Prazo de Término</label>
            <input type="date" name="prazo_termino" id="prazo_termino" class="form-control">
        </div>

        <button type="submit" class="btn btn-primary">Criar</button>
    </form>
@endsection
