@extends('layout')

@section('title', 'Editar Produto')

@section('conteudo')
  <div class="container-fluid">
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
      <div class="col-6">
        <button type="submit" class="btn btn-primary">Atualizar</button>
      </div>
    </form><br>

    <form class="row g-3" action="{{ url("/produtos/$produto->id") }}" method="POST">
      @csrf
      @method('DELETE')
      <div class="col-6">  
        <!-- Button trigger modal -->
        <button type="button" class="btn btn-danger" data-bs-toggle="modal" data-bs-target="#exampleModal">Excluir</button>

        <!-- Modal -->
        <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
          <div class="modal-dialog">
            <div class="modal-content">
              <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Exclusão de registro</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
              </div>
              <div class="modal-body">
                Você tem certeza que deseja excluir este registro?
              </div>
              <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cancelar</button>
                <button type="submit" class="btn btn-danger">Excluir</button>
              </div>
            </div>
          </div>
        </div>
      </div>
    </form>
  </div>
@endsection
