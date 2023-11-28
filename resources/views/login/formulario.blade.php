@extends('site.layout')
@include('includes.bootstrap')
@section('conteudo')

<div class="container pt-5 justify-content-start">
  <div class="row justify-content-center mb-5">
    <div class="col col-md-8 col-lg-6 mt-5 border rounded-3">
      <ul class="nav nav-tabs mt-2" id="myTab" role="tablist">
        <li class="nav-item" role="presentation">
          <button class="nav-link active" id="login-tab" data-bs-toggle="tab" data-bs-target="#login-tab-pane" type="button" role="tab" aria-controls="login-tab-pane" aria-selected="true">Login</button>
        </li>
        <li class="nav-item" role="presentation">
          <button class="nav-link" id="criar-tab" data-bs-toggle="tab" data-bs-target="#criar-tab-pane" type="button" role="tab" aria-controls="criar-tab-pane" aria-selected="false">Criar</button>
        </li>
      </ul>
      <div class="tab-content" id="myTabContent">
        <div class="tab-pane fade show active" id="login-tab-pane" role="tabpanel" aria-labelledby="login-tab" tabindex="-1">
          @include('includes.login')
        </div>
        <div class="tab-pane fade" id="criar-tab-pane" role="tabpanel" aria-labelledby="criar-tab" tabindex="-1">
          @include('includes.criar')
        </div>
      </div>
    </div>
  </div>
  @if ($mensagem = Session::get('Erro'))
  <div class="alert py-1 sticky-bottom alert-warning alert-dismissible fade show" role="alert">
    {{ $mensagem }}
    <button type="button" class="btn-close py-2" data-bs-dismiss="alert" aria-label="Close"></button>
  </div>
  @endif

  @if ($errors->any())
      @foreach ($errors->all() as $erro)
        <div class="alert py-1 sticky-bottom alert-warning alert-dismissible fade show" role="alert">
          {{ $erro }}
          <button type="button" class="btn-close py-2" data-bs-dismiss="alert" aria-label="Close"></button>
        </div>
      @endforeach
  @endif

</div>

@endsection



{{--
            <form action="{{ route('login.auth') }}" method="POST">
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
            <div class="col-12">
              <button class="btn btn-primary mt-3" type="submit">Entrar</button>
            </div>
          </form>

  --}}