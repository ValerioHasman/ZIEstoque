<!-- Modal -->
<div class="modal fade" id="novoProduto" tabindex="-1" aria-labelledby="novoProdutoLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h1 class="modal-title fs-5" id="novoProdutoLabel"><i class="bi bi-plus-lg me-2"></i>Novo produto</h1>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        <form action="{{ route('admin.produto.store') }}" method="POST" enctype="multipart/form-data">
          @csrf
          <input type="hidden" name="id_user" value="{{ auth()->user()->id }}">
          <label class="form-label" for="nome">Nome:</label>
          <input class="form-control" type="text" name="nome" id="nome" required />
          <label class="form-label pt-3" for="nome">Preco:</label>
          <input class="form-control" type="number" inputmode="numeric" name="preco" id="preco" required />
          <label class="form-label pt-3" for="nome">Descrição:</label>
          <textarea class="form-control" rows="4" name="descricao" id="preco" required></textarea>
          <label class="form-label pt-3" for="preco">Categotia:</label>
          <select class="form-select" name="id_categoria" required>
            <option selected></option>
            @foreach ($categorias as $categoria)
            <option value="{{ $categoria->id }}">{{ $categoria->nome }}</option>
            @endforeach
          </select>
          <label for="formFile" class="form-label pt-3">Imagem:</label>
          <input class="form-control" type="file" id="formFile" name="imagem">
          <button type="submit" class="btn btn-primary mt-3">Cadastrar</button>
        </form>
      </div>
    </div>
  </div>
</div>