@extends('site.layout')
@section('conteudo')
@include('includes.bootstrap')
@include('includes.navAdmin')

<style>

  .imagem {
    object-fit: cover;
    width: 4rem;
    height: 4rem;
  }

</style>

<div class="container">
  <h1>Produtos</h1>
  <form action="">
    <div class="input-group mb-3">
      <input class="form-control" type="search" name="pesquisa" list="pesquisa" placeholder="Pesquisar" />
      <button type="submit" class="input-group-text"><i class="bi bi-search"></i></button>      
    </div>
    <datalist id="pesquisa">
      <option value="Edge">
      <option value="Firefox">
      <option value="Chrome">
      <option value="Opera">
      <option value="Safari">
    </datalist>
  </form>
  <table class="table align-middle">
    <thead>
      <tr>
        <th scope="col"></th>
        <th scope="col">ID</th>
        <th scope="col">Produto</th>
        <th scope="col">Preço</th>
        <th scope="col">Categoria</th>
        <th scope="col"></th>
      </tr>
    </thead>
    <tbody>
      @foreach ($produtos as $produto)
      <tr>
        <td><img class="rounded-2 imagem" src="{{ $produto->imagem }}" alt="foto do produto"></td>
        <th scope="row">#{{ $produto->id }}</th>
        <td>{{ $produto->nome }}</td>
        <td>R$ {{ number_format($produto->preco, 2, ',', '.') }}</td>
        <td>{{ $produto->categoria->nome }}</td>
        <td>
          <button class="btn rounded-5 btn-warning mx-1"><i class="bi bi-pencil-fill"></i></button>
          <button class="btn rounded-5 btn-danger mx-1"><i class="bi bi-trash-fill"></i></button></td>
      </tr>
      @endforeach
    </tbody>
  </table>

  <nav class="sticky-bottom">
    {{ $produtos->links('custom.pagination2') }}
  </nav>
</div>

@endsection
