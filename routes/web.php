<?php

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

use SebastianBergmann\Environment\Console;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/about', function (){
    echo "Essa aplicação é a primeira do curso";
});

Route::get('/phpinfo', function (){
    phpinfo();
});

Route::get('/hellocontroller/{nome2}', "TesteController@index2" );

Route::view('/welcome2','welcome');


Route::middleware('checkage')->group(function(){
    
    Route::get('/hellocontroller', "TesteController@index" );
    Route::post('/hellocontroller', "TesteController@post_index");
    
});




Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::resource('cidades','CidadeController');//Cria um monte de rotas