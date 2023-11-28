<form class="py-3" action="{{ route('users.store') }}" method="POST">
  @csrf
  <div class="row">
    <div class="col-auto">
      <label class="col-form-label" for="nomec">Nome:</label>
    </div>
    <div class="col-12 col-sm">
      <input class="form-control" type="text" name="nome" id="nomec" />
    </div>
  </div> 
  <div class="row">
    <div class="col-auto">
      <label class="col-form-label" for="sobrenome">Sobrenome:</label>
    </div>
    <div class="col-12 col-sm">
      <input class="form-control" type="text" name="sobrenome" id="sobrenome" />
    </div>
  </div> 
  <div class="row mt-3">
    <div class="col-auto">
      <label class="col-form-label" for="emailc">Email:</label>
    </div>
    <div class="col-12 col-sm">
      <input class="form-control" type="email" name="email" id="emailc" />
    </div>
  </div> 
  <div class="row mt-3">
    <div class="col-auto">
      <label class="col-form-label" for="passwordc">Senha:</label>
    </div>
    <div class="col-12 col-sm">
      <input class="form-control" type="password" name="password" id="passwordc" />
    </div>
  </div>
    <button class="btn btn-primary mt-3" type="submit">Cadastrar</button>
</form>