@extends('site.layout')
@section('title', 'Lista de coisas')

@include('includes.bootstrap')

@section('conteudo')



{{-- Exemplo de comentário --}}

<h1>Home</h1>
<a class="p-5" href="./inicio">Inicio!</a>
<p>{{ $nome }} tem {{ $idade }} de idade</p>
{{ isset($texto) ? 'texto' : 'não há ' }}
{{ $texto ?? 'texto' }}

{{-- Estrutura de controle --}}

@unless ($nome != 'rodrigo')
    true
@else
    false
@endunless

@switch($idade)
    @case(28)
        idade está ok <br />
        @break
    @default
        idade errada <br />
        @break
@endswitch

@isset($nome)
    Nome existe <br />
@endisset

@empty($nome)
    Nome não existe <br />
@endempty

@auth
    está autenticado <br />
@endauth

@guest
    Não está autenticado <br />
@endguest

{{-- Estruturas de repetição --}}

@for ($i = 0; $i < 10; $i++)
    valor atual é {{ $i }} <br />
@endfor

@php
  $i = 0;
@endphp

@while ($i <= 10)
    valor é {{ $i }} <br />
    @php
        $i++
    @endphp
@endwhile

@foreach ($frutas as $fruta)
    fruta: {{ $fruta }} <br />
@endforeach

@forelse ($frutas as $fruta)
    
@empty
    array vasio
@endforelse

@include('includes.mensagem', ['titulo' => 'Mensagem de sucesso!'])

@component('components.sidebar')
    @slot('paragrafo')
        Lorem ipsum dolor, sit amet consectetur adipisicing elit. Explicabo iste magnam voluptate esse neque ad quam fuga.
    @endslot
@endcomponent
    
@endsection

