@extends('layout')

@section('title', 'Novo Produto')

@section('conteudo')
  <div class="container-fluid">
    <form class="row" action="{{ url('/produtos') }}" method="POST">
      @csrf
      <div class="col-md-12 form-group">
        <label for="nome" class="form-label">Nome</label>
        <input type="text" class="form-control" name="nome" id="nome" required>
      </div>
      <div class="col-md-12 form-group">
        <label for="descricao" class="form-label">Descrição</label>
        <input type="text" class="form-control" name="descricao" id="descricao" required>
      </div>
      <div class="col-6 form-group">
        <label for="custo" class="form-label">Custo</label>
        <input type="number" class="form-control" name="custo" id="custo" required>
      </div>
      <div class="col-6 form-group">
        <label for="preco" class="form-label">Preço</label>
        <input type="number" class="form-control" name="preco" id="preco" required>
      </div>
      <div class="col-12">
        <button type="submit" class="btn btn-primary">Cadastrar</button>
      </div>
    </form>
  </div>
@endsection
