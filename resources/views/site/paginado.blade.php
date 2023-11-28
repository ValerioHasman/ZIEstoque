@extends('site.layout')
@section('title', 'Home 2')

@include('includes.materialize')

@section('conteudo')

@include('includes.navDropdown')

<div class="row container">
    @foreach ($produtos as $produto)
        @include('includes.produto')
    @endforeach
</div>

@include('includes.paginador')

@endsection
