@extends('site.layout')
@section('title', 'Home 2')
@section('conteudo')

@include('includes.materialize')

@include('includes.navDropdown')

<div class="row container">
    @foreach ($produtos as $produto)
        @include('includes.produto')
    @endforeach
</div>

@endsection
