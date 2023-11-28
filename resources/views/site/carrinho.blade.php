@extends('site.layout')
@section('title', 'Categoria')
@section('conteudo')

@include('includes.materialize')

@include('includes.navDropdown')

<div class="row container">
  @if ($mensagem = Session::get('Sucesso'))
  <div class="card green">
    <div class="card-content white-text">
      <p>{{ $mensagem }}</p>
    </div>
  </div>
  @endif
  @if ($mensagem = Session::get('Aviso'))
  <div class="card orange darken-3">
    <div class="card-content white-text">
      <p>{{ $mensagem }}</p>
    </div>
  </div>
  @endif

  @if ($itens->count() > 0)

    <h2>Seu carrinho possui {{ $itens->count() }} produtos.</h2>
    <table class="responsive-table">
      <thead>
        <tr>
            <th></th>
            <th>Nome</th>
            <th>Preço</th>
            <th>Quantidade</th>
        </tr>
      </thead>
      <tbody>
        @foreach ($itens as $iten)

        <tr>
          <td><img src="{{ $iten->attributes->image }}" alt="foto" class="responsive-img circle" width="70" /></td>
          <td>{{ $iten->name }}</td>
          <td>R$ {{ number_format($iten->price, 2, ',', '.') }}</td>
          <form action="{{ route('site.updateCarrinho') }}" method="post">
            <td>
              <input style="width: 11ch" type="number" name="quantidade" min="1" value="{{ $iten->quantity }}" required />
            </td>
            <td>
              @csrf
              <input type="hidden" name="id" value="{{ $iten->id }}" />
              <button class="btn-floating waves-effect waves-light blue"><i class="material-icons">refresh</i></button>
            </td>
          </form>
          <td>
            <form action="{{ route('site.deleteCarrinho') }}" method="post">
              @csrf
              <input type="hidden" name="id" value="{{ $iten->id }}" />
              <button class="btn-floating waves-effect waves-light red"><i class="material-icons">remove_shopping_cart</i></button>
            </form>
          </td>
        </tr>
        @endforeach
      </tbody>
    </table>

    <h3>Valor total: R$ {{ number_format(\Cart::getTotal(), 2, ',', '.') }}</h3>

    <div class="center sticky-bottom">
      <a href="" class="btn waves-effect waves-light blue">Continuar comprando <i class="material-icons right">arrow_back</i></a>
      <a href="{{ route('site.cleanCarrinho') }}" class="btn waves-effect waves-light red">Limpar carrinho<i class="material-icons right">delete</i></a>
      <button class="btn waves-effect waves-light green">Finalizar compra<i class="material-icons right">check</i></button>
    </div>
  
  @else

    <h2 class="center">Carrinho vazio</h2>
    <div class="center"><a href=""><i class="large material-icons">add_shopping_cart</i></a></div>
      
  @endif



</div>

@endsection
