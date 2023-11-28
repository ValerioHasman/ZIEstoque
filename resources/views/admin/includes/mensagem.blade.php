@if ($mensagem = Session::get('sucesso'))
<div class="alert py-1 m-0 sticky-bottom alert-warning alert-dismissible fade show" role="alert">
  {{ $mensagem }}
  <button type="button" class="btn-close py-2" data-bs-dismiss="alert" aria-label="Close"></button>
</div>
@endif