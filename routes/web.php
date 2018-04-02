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
    return view('welcome');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');


Route::group(['prefix' => 'admin'], function () {
    Voyager::routes();
});
Route::get('/programme', 'ProgrammeController@index')->name('programme');
Route::post('/programme', 'ProgrammeController@store');
Route::get('/objectif', 'objectifcontroller@index')->name('objectif');
Route::post('/objectif', 'objectifController@store');

Route::get('/indicateur', 'indicateurcontroller@index')->name('indicateur');
Route::post('/indicateur', 'indicateurcontroller@store');
Route::get('/resource', 'Ressourcecontroller@index')->name('resource');
Route::get('/activite', 'activitecontroller@index')->name('activite');





