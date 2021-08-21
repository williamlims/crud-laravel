@extends('layout')

@section('title', 'Produtos')

@section('conteudo') 
  <div class="container-fluid">
    <div class="row">
      <div class="col-12">
        <table class="table table-dark table-striped table-hover">
          <thead>
            <tr>
              <th scope="col">ID</th>
              <th scope="col">NOME</th>
              <th scope="col">DESCRIÇÃO</th>
              <th scope="col">CUSTO</th>
              <th scope="col">PREÇO</th>
              <th scope="col">CADASTRO</th>
              <th scope="col">ATUALIZAÇÃO</th>
              <th scope="col">AÇÃO</th>
            </tr>
          </thead>
          <tbody>
            @foreach ($produtos as $pd)
            <tr>
              <th scope="row">{{ $pd->id }}</th>
              <td>{{ $pd->nome }}</td>
              <td>{{ $pd->descricao }}</td>
              <td>{{ $pd->custo }}</td>
              <td>{{ $pd->preco }}</td>
              <td>{{ $pd->created_at }}</td>
              <td>{{ $pd->updated_at }}</td>
              <td><a href="{{ url("/produtos/$pd->id") }}"><button type="button" class="btn btn-primary">Editar</button></a></td>
            </tr>
            @endforeach
          </tbody>
        </table>
      </div>      
    </div>
    <div class="row fixed-bottom">
      <div class="col-12 d-flex justify-content-center">
        {{ ($produtos->onEachSide(5)->links()) }}  
      </div>      
    </div>
  </div>
@endsection
