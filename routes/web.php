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

Route::get('/', function () {
    return view('main');
});

// Route::resource('pages', 'PagesController');
// Route::get('pages/{href}', 'PagesController@show')->where('href', '.+');
Route::get('pages/{href}', function($href) {
	$controller = app()->make('\App\Http\Controllers\PagesController');
	return $controller->callAction('show', ['href' => $href]);
})->where('href', '.+');
//Auth::routes();

//Route::get('/home', 'HomeController@index');
