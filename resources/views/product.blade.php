@extends('layout')

@section('title', 'Editar Produto')

@section('conteudo')

    <form class="row g-3" action="{{ url("/produtos/$produto->id") }}" method="POST">
      @csrf
      @method('PUT')
      <div class="col-md-12">
        <label for="nome" class="form-label">Nome</label>
        <input type="text" class="form-control" name="nome" id="nome" value="{{ $produto->nome }}">
      </div>
      <div class="col-md-12">
        <label for="descricao" class="form-label">Descrição</label>
        <input type="text" class="form-control" name="descricao" id="descricao" value="{{ $produto->descricao }}">
      </div>
      <div class="col-6">
        <label for="custo" class="form-label">Custo</label>
        <input type="text" class="form-control" name="custo" id="custo" value="{{ $produto->custo }}">
      </div>
      <div class="col-6">
        <label for="preco" class="form-label">Preço</label>
        <input type="text" class="form-control" name="preco" id="preco" value="{{ $produto->preco }}">
      </div>
      <div class="col-4">
        <button type="submit" class="btn btn-primary">Atualizar</button>
      </div>
    </form>

    <form class="row g-3" action="{{ url("/produtos/$produto->id") }}" method="POST">
      @csrf
      @method('DELETE')
      <div class="col-4">
        <button type="submit" class="btn btn-danger">Excluir</button>
      </div>
    </form>

@endsection
