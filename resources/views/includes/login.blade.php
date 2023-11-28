<form class="py-3" action="{{ route('login.auth') }}" method="POST">
  @csrf
  <div class="row">
    <div class="col-auto">
      <label class="col-form-label" for="email">Email:</label>
    </div>
    <div class="col-12 col-sm">
      <input class="form-control" type="email" name="email" id="email" />
    </div>
  </div> 
  <div class="row mt-3">
    <div class="col-auto">
      <label class="col-form-label" for="password">Senha:</label>
    </div>
    <div class="col-12 col-sm">
      <input class="form-control" type="password" name="password" id="password" />
    </div>
  </div>
  <div class="form-check mt-3">
    <input class="form-check-input" id="checkboxlembrar" type="checkbox" name="lembrar"  />
    <label class="form-check-label" for="checkboxlembrar">Lembrar</label>
  </div>
    <button class="btn btn-primary mt-3" type="submit">Entrar agora</button>
</form>