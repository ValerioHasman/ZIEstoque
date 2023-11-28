<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CarrinhoController extends Controller
{
    public function carrinhoLista()
    {
        $itens = \Cart::getContent();

        return view('site.carrinho', compact('itens'));
    }

    public function adicionaCarrinho(Request $request)
    {

        if(!($request->quantidade > 0)){
            return view('errors/404');
        }

        \Cart::add([
            'id' => $request->id,
            'name' => $request->nome,
            'price' => $request->preco,
            'quantity' => $request->quantidade,
            'attributes' => array(
                'image' => $request->imagem
            )
        ]);

        return redirect()->route('site.carrinho')->with('Sucesso', 'Produto adicionado ao carrinho com sucesso!');
    }

    public function removeCarrinho(Request $request) {

        \Cart::remove([
            'id' => $request->id,
        ]);

        return redirect()->route('site.carrinho')->with('Sucesso', 'Produto removido do carrinho com sucesso!');
    }

    public function atualizaCarrinho(Request $request) {

        if(!($request->quantidade > 0)){
            return view('errors/404');
        }

        \Cart::update(
            $request->id, [
            'quantity' => array(
                'relative' => false,
                'value' => $request->quantidade
            )
        ],);

        return redirect()->route('site.carrinho')->with('Sucesso', 'Produto atualizado no carrinho com sucesso!');

    }

    public function limpaCarrinho() {
        \Cart::clear();

        return redirect()->route('site.carrinho')->with('Aviso', 'Carrinho limpo com sucesso!');
    }
}
