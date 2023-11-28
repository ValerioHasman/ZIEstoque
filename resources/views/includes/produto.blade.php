<div class="col s12 m6 l4">
  <div class="card">
    <div class="card-image" >
      <img src="{{ $produto->imagem }}" class="imagem" />
      <span class="card-title titulo">{{ $produto->nome }}</span>
      @can('verProduto', $produto)
        <a href="{{ route('site.detalhes', $produto->slug); }}" class="btn-floating halfway-fab waves-effect waves-light red"><i class="material-icons">visibility</i></a>
      @endcan
    </div>
    <div class="card-content descricao">
      <p>{{ $produto->descricao }}</p>
    </div>
  </div>
</div>
