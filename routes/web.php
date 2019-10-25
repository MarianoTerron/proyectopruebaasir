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
/*
Route::get('/', function () {
    return view('welcome');
});
*/


//route::get('/', 'libroscontroller@index');

Route::get ('libros', 'libroscontroller@show');


/*
    Route::get ('libros/{id}', function ($id) {
        return "libros: {$id}";
    });
*/

Route::get ('libros/{id}', 'libroscontroller@show');
    

?>