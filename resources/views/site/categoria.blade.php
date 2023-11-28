@extends('site.layout')
@section('title', 'Categoria')
@section('conteudo')

@include('includes.materialize')

@include('includes.navDropdown')

<div class="row container">
    <h2>{{ $categoria->nome }}</h2>
    <p>{{ $categoria->descricao }}</p>
    @foreach ($produtos as $produto)
        @include('includes.produto')
    @endforeach
</div>

@include('includes.paginador')

@endsection
