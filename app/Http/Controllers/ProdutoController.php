<?php

namespace App\Http\Controllers;

use App\Models\Produto;
use Illuminate\Http\Request;

class ProdutoController extends Controller
{
  public function index() {

    $produtos = Produto::paginate(5);

    return view('admin.produtos', compact('produtos'));

  }
}
