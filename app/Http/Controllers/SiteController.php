<?php

namespace App\Http\Controllers;

use App\Models\Categoria;
use App\Models\Produto;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Gate;

use function Laravel\Prompts\error;

class SiteController extends Controller
{
    // public function indexOff()
    // {
    //     //return "index";

    //     //$produtos = Produto::all();
    //     //return dd($produtos);

    //     $nome = "Jozé Ferreira";
    //     $idade = 33;
    //     $frutas = ['amora', 'banana', 'laranja', 'maçã', 'melancia'];
    //     $html = '<h2>Título h2</h2>';

    //     return view('site.home', compact('nome', 'idade', 'frutas', 'html'));
    // }

    // public function index() {

    //     $produtos = Produto::all();

    //     return view('site.inicio', compact('produtos'));
        
    // }

    public function paginado() {

        $produtos = Produto::paginate(12);

        return view('site.paginado', compact('produtos'));

    }

    function detalhes(string $slug) {

        $produto = Produto::where('slug', $slug)->first();

        // if ($produto === null) {
        //     return view('errors/404');
        // }

        //Gate::authorize('ver-preoduto', $produto);
        // $this->authorize('verProduto', $produto);

        /*
        if(Gate::allows('ver-produto', $produto)){
            return view('site.detalhes', compact( 'produto' ));
        }
        if(Gate::denies('ver-produto', $produto)){
            return redirect()->route('site.index');
        }
        */

        if(auth()->user()->can('verProduto', $produto)){
            return view('site.detalhes', compact( 'produto' ));
        }
        if(auth()->user()->cannot('verProduto', $produto)){
            return redirect()->route('site.index');
        }



    }

    function categoria(string $id) {

        $categoria = Categoria::find($id);
        $produtos = Produto::where('id_categoria', $id)->paginate(12);

        if ($produtos == null) {
            return view('errors/404');
        }

        return view('site.categoria', compact( 'produtos', 'categoria' ));

    }

}
