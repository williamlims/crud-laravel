@extends('layout')

@section('title', 'Produto')

@section('conteudo')
    

    {{ $produto->nome }} <br> 
    {{ $produto->descricao }} <br>
    {{ $produto->custo }} <br>
    {{ $produto->preco }} <br>


@endsection
