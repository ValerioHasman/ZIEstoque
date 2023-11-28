<?php

use App\Http\Controllers\CarrinhoController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\PecasController;
use App\Http\Controllers\ProdutoController;
use App\Http\Controllers\SiteController;
use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::resource('pecas', PecasController::class);
Route::resource('users', UserController::class);

// Route::get('/', [SiteController::class, 'index']);
// Route::get('/inicio', [SiteController::class, 'inicio']);
Route::get('/', [SiteController::class, 'paginado'])->name('site.index');
Route::get('/produto/{slug}', [SiteController::class, 'detalhes'])->name('site.detalhes');
Route::get('/categoria/{id}', [SiteController::class, 'categoria'])->name('site.categoria');
Route::get('/carrinho', [CarrinhoController::class, 'carrinhoLista'])->name('site.carrinho');
Route::post('/carrinho', [CarrinhoController::class, 'adicionaCarrinho'])->name('site.addCarrinho');
Route::post('/remover', [CarrinhoController::class, 'removeCarrinho'])->name('site.deleteCarrinho');
Route::post('/atualizar', [CarrinhoController::class, 'atualizaCarrinho'])->name('site.updateCarrinho');
Route::get('/limpar', [CarrinhoController::class, 'limpaCarrinho'])->name('site.cleanCarrinho');
Route::view('/login', 'login.formulario')->name('login.formulario');
Route::post('/auth', [LoginController::class, 'auth'])->name('login.auth');
Route::get('/logout', [LoginController::class, 'logout'])->name('login.logout');
Route::post('/registrar', [LoginController::class, 'registrar'])->name('login.registrar');
Route::get('/admin/dashboard', [DashboardController::class, 'index'])->name('admin.dashboard');
Route::get('/admin/produtos', [ProdutoController::class, 'index'])->name('admin.produtos');


/*
Route::get('/itens/{id?}', [SiteController::class, 'itens']);

Route::view('/sobre', '/sobre');

Route::redirect('/empresa', './sobre');

Route::any('/qualquer', function () {
    return "Qualquer acesso http é permitido (put, delete, get, post)";
});

Route::match(['get','post'], '/restrito', function () {
    return "Permite os acessos ['get','post']";
});

Route::get('/produto/{id}/{categoria?}', function ($id, $categoria = null) {
    return "Produto Nº: " . $id . ' de ' . $categoria;
});

Route::get('/noticias', function() {
    return view('noticias');
})->name('novidades');

Route::get('/new', function() {
    return redirect()->route('novidades');
});

Route::get('admin/tabelas', function(){
    return "tabelas";
});

Route::get('admin/usuarios', function(){
    return "usuarios";
});

Route::get('admin/clientes', function(){
    return "clientes";
});

Route::group(['prefix' => 'admin', 'as' => 'admin'], function(){
    Route::get('admin/tabelas', function(){
        return "tabelas";
    })->name("tabelas");
    
    Route::get('admin/usuarios', function(){
        return "usuarios";
    })->name("usuarios");
    
    Route::get('admin/clientes', function(){
        return "clientes";
    })->name("clientes");
});
*/