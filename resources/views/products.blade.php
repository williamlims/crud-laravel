@extends('layout')

@section('title', 'Produtos')

@section('conteudo')
    
    @foreach ($produtos as $pd)
        {{ $pd->nome }} <br> 
    @endforeach

@endsection
