<?php

namespace App\Http\Controllers;

use App\Models\Categoria;
use App\Models\Produto;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class DashboardController extends Controller
{

    public function __construct() {
        $this->middleware(['auth', 'checkemail']);
    }

    public function index() {

        $usuarios = User::all()->count();

        $dodosUsuarios = User::select([
            DB::raw('YEAR(created_at) as ano'),
            DB::raw('count(*) as total')
        ])
        ->groupBy('ano')
        ->orderBy('ano','asc')
        ->get();

        foreach($dodosUsuarios as $user){
            $ano[] = $user->ano;
            $total[] = $user->total;
        }

        $userLabel = "'Comparativo de cadastros de usuários'";
        $userAno = implode(',', $ano);
        $userTotal = implode(',', $total);

        $catDados = Categoria::with('produtos')->get();

        foreach($catDados as $cat){
            $catNome[] = "'" . $cat->nome . "'";
            $catTotal[] = $cat->produtos->count();
        }

        $catLabel = implode(',', $catNome);
        $catTotal = implode(',', $catTotal);

        return view('admin.dashboard', compact('usuarios', 'userLabel', 'userAno', 'userTotal', 'catLabel', 'catTotal'));
    }
}
