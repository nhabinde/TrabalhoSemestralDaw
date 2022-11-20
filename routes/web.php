<?php

use Illuminate\Support\Facades\Route;


/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

use App\Http\Controllers\PermissionController;
use \App\Http\Controllers\EstudanteController;
use \App\Http\Controllers\DocenteController;
use \App\Http\Controllers\DisciplinaController;
use \App\Http\Controllers\TurmaController;
use \App\Http\Controllers\CursoController;
use \App\Http\Controllers\AvaliacaoController;


Route::get('/', function () {
    return  redirect("/admin");
})->middleware("auth");

Route::get('/profile', function () {
    return view('general.profile');
});


// Route::prefix('ajax')->middleware(['auth'])->name('ajax.')->group(function (){
//     Route::get('/estudantes/pesquisa/{turma_id}', [\App\Http\Controllers\EstudanteController::class,'pesquisa'])->name("estudantes");
//     Route::get('/estudantes/{turma_id}', [\App\Http\Controllers\EstudanteController::class,'estudantesTurma'])->name("turma.estudantes");
//     Route::get('/avaliacoes/{turma_id}', [\App\Http\Controllers\AvaliacaoController::class,'avaliacoesTurma'])->name("turma.avaliacoes");
//     Route::post('/estudantes', [\App\Http\Controllers\EstudanteController::class,'inscrever'])->name("inscrever");
//     Route::post('/avaliacoes', [\App\Http\Controllers\AvaliacaoController::class,'store'])->name("avaliacao");

// //    docente
//     Route::get('/docentes/pesquisa/{turma_id}', [\App\Http\Controllers\DocenteController::class,'pesquisa'])->name("docentes.pesquisa");
//     Route::get('/docentes/{turma_id}', [\App\Http\Controllers\DocenteController::class,'docentesTurma'])->name("turma.docentes");
//     Route::post('/docentes', [\App\Http\Controllers\DocenteController::class,'inscrever'])->name("inscrever");
// });

Route::middleware(['auth'])->name('aluno.')->group(function () {
    Route::get('/escolas', [\App\Http\Controllers\EscolaController::class,'escolas'])->name("escolas");
    Route::get('/minhas/escolas', [\App\Http\Controllers\EscolaController::class,'escolas_aluno'])->name("escolas_aluno");
    Route::get('/estudante/escolas/{estudante_id}', [\App\Http\Controllers\EscolaController::class,'escolas_aluno_id'])->name("escolas_aluno_id");
    Route::post('/escola_estudante', [\App\Http\Controllers\EscolaEstudanteController::class,'store'])->name("escola_estudante");
    Route::post('/delete/escola', [\App\Http\Controllers\EscolaEstudanteController::class,'remover_escola'])->name("remover_escola");
});


Route::prefix('admin')->middleware(['auth'])->name('admin.')->group(function (){
    Route::get('/', [\App\Http\Controllers\HomeController::class,'index'])->name("dashboard");
//    Route::resource('/role', RoleController::class);
//    Route::resource('/permission', PermissionController::class);
    Route::resource('/estudantes', EstudanteController::class);
    Route::resource('/docentes', DocenteController::class);
    Route::resource('/disciplinas', DisciplinaController::class);
    Route::resource('/turmas', TurmaController::class);
    Route::resource('/cursos', CursoController::class);
    Route::resource('/avaliacoes', AvaliacaoController::class);
    Route::resource('/modulos', \App\Http\Controllers\ModuloController::class);
    Route::resource('/niveis', \App\Http\Controllers\NivelController::class);
    Route::resource('/pedidos', \App\Http\Controllers\PedidoController::class);
    Route::resource('/temas', \App\Http\Controllers\TemaController::class);
    Route::resource('/anuncios', \App\Http\Controllers\AnuncioController::class);
    Route::resource('/escolas', \App\Http\Controllers\EscolaController::class);
    Route::post('/pedidos/carregar/documento', [\App\Http\Controllers\PedidoController::class,"documento"]);
    Route::get('/pedidos/aprovar/{id}', [\App\Http\Controllers\PedidoController::class,"aprovar"]);
    Route::get('/pedidos/reprovar/{id}', [\App\Http\Controllers\PedidoController::class,"reprovar"]);
    Route::get('/temas/aprovar/{id}', [\App\Http\Controllers\TemaController::class,"aprovar"]);
    Route::post('/temas/reprovar', [\App\Http\Controllers\TemaController::class,"reprovar"]);
//    =======================================
    Route::get('/turma/avaliar/{turma_id}/{avaliacao_id}', [\App\Http\Controllers\AvaliacaoController::class,'avaliarEstudantes'])->name("avaliar");
    Route::post('/avaliar', [\App\Http\Controllers\AvaliacaoController::class,'avaliarAluno'])->name("avaliarAluno");


});



Route::group(['prefix' => 'config'], function () {
    Voyager::routes();
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
