@extends('layout')

@section('title', 'Editar Produto')

@section('conteudo')

    <form class="row g-3" action="{{ url('produtos') }}" method="POST">
      @csrf
      <div class="col-md-12">
        <label for="nome" class="form-label">Nome</label>
        <input type="text" class="form-control" name="nome" id="nome">
      </div>
      <div class="col-md-12">
        <label for="descricao" class="form-label">Descrição</label>
        <input type="text" class="form-control" name="descricao" id="descricao">
      </div>
      <div class="col-6">
        <label for="custo" class="form-label">Custo</label>
        <input type="text" class="form-control" name="custo" id="custo">
      </div>
      <div class="col-6">
        <label for="preco" class="form-label">Preço</label>
        <input type="text" class="form-control" name="preco" id="preco">
      </div>
      <div class="col-12">
        <button type="submit" class="btn btn-primary">Atualizar</button>
      </div>
    </form>

@endsection
