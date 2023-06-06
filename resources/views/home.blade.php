@extends('layouts.app')

@section('content')
<div class="container">
  <div class="text-center">
    <br><br>
    <h1>Controle de Chamados</h1>
  </div>

  <div class="card-group mt-4">
    <div class="card">
      <div class="card-body">
        <h5 class="card-title">Chamados</h5>
        <p class="card-text">Gerencie os chamados da sua empresa.</p>
        <a href="{{ route('chamados.index') }}" class="btn btn-primary">Acessar</a>
      </div>
    </div>
  
    <div class="card">
      <div class="card-body">
        <h5 class="card-title">Setores</h5>
        <p class="card-text">Gerencie os setores da sua empresa.</p>
        <a href="{{ route('setores.index') }}" class="btn btn-primary">Acessar</a>
      </div>
    </div>
  
    <div class="card">
      <div class="card-body">
        <h5 class="card-title">Situações</h5>
        <p class="card-text">Gerencie as situações dos chamados.</p>
        <a href="{{ route('situacoes.index') }}" class="btn btn-primary">Acessar</a>
      </div>
    </div>
  </div>
</div>
@endsection
