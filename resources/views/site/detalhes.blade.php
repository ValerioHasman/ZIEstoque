@extends('site.layout')
@section('title', 'Detalhes')
@section('conteudo')

@include('includes.materialize')

@include('includes.navDropdown')

<div class="row container" style="margin-top: 2em">
    <div class="col s12 m6">
      <img src="{{ $produto->imagem }}" alt="foto" class="materialboxed responsive-img" />
    </div>
    <div class="col s12 m6">
      <h1>{{ $produto->nome }}</h1>
      <h2>R$ {{ number_format($produto->preco, 2, ',', '.') }}</h2>
      <p>{{ $produto->descricao }}</p>
      <p>Postado por: {{ $produto->user->nome }}</p>
      <p>Categoria: {{ $produto->categoria->nome }}</p>

      <form action="{{ route('site.addCarrinho') }}" method="post" enctype="multipart/form-data">
        @csrf
        <input type="hidden" name="id" value="{{ $produto->id }}" />
        <input type="hidden" name="nome" value="{{ $produto->nome }}" />
        <input type="hidden" name="preco" value="{{ $produto->preco }}" />
        <input type="number" name="quantidade" min="1" value="1" required />
        <input type="hidden" name="imagem" value="{{ $produto->imagem }}" />
        <button class="btn btn-large orange waves-effect waves-light" type="submit">
          <i class="material-icons left">add_shopping_cart</i>Comprar
        </button>
  
      </form>

    </div>
</div>

@endsection
