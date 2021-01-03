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

Route::get('/welcome', function () {
    return view('welcome');
});
Route::get('/', function (){
    return view('paginaInicial');
});
Route::get('/loginUsuario', function (){
    return view('loginUsuario');
});
Route::get('/todosvideos', function (){
    return view('todosvideos');
});
Route::get('registrarUsuario',function (){
    return view('registrarUsuario');
});

Route::get('perfilVotador' ,function ()
{
    return view('/Perfil/perfilVotador');
}
);
Route::get('perfilConcorrente' ,function ()
{
    return view('/Perfil/perfilConcorrente');
}
);
Route::get('viewConcorrente' ,function ()
{
    return view('/Perfil/viewConcorrente');
}
);
