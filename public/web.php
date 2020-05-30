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

Route::get('/', function () {
    return view('welcome');
});

Route::get('/register-admin', function(){
    return view('registros/register-admin');
});

Route::get('/register-emp', function(){
    return view('registros/register-emp');
});

Route::get('/register-alumno', function(){
    return view('registros/register-alumno');
});

Route::get('/register-cad', function(){
    return view('registros/register-cad');
});

/*
Route::get('/home', 'HomeController@index')->name('home');


Auth::routes(['verify' => true]);
*/

Route::get('/perfil-admin', function(){
    return view('perfiles/perfil-admin');
});

Route::get('/perfil-emp', function(){
   return view('perfiles/perfil-emp'); 
});

Route::get('/perfil-cad', function(){
   return view('perfiles/perfil-cad'); 
});

Route::get('/perfil-alumno', function(){
   return view('perfiles/perfil-alumno'); 
});

Auth::routes();

Route::get('/home', 'HomeController@index')->middleware('verified');


Route::get('/confirm', 'HomeController@formularioparte2')->middleware('verified');


Route::resource('administrativos', 'AdministrativoController');


Route::resource('users', 'UserController');

Route::resource('empresas', 'EmpresaController');

Route::resource('alumnos', 'AlumnoController');

Route::resource('catedraticos', 'CatedraticoController');

Route::resource('proyectos', 'ProyectoController');