<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});
Route::get('notConnected', 'AuthController@notConnected')->name('notconnected');
Route::post('login', 'AuthController@login');
Route::get('logout', 'AuthController@logout');
Route::get('/user', function (Request $request) {
    return auth()->guard('api')->user();
});

//Route::middleware('auth:api')->group(function () {
//    Route::get('logout', 'AuthController@logout');
//});

Route::resource('users', 'UserController');
Route::resource('abonnes', 'AbonneController');

Route::resource('abonnements', 'AbonnementController');

Route::resource('armoires', 'ArmoireController');
Route::resource('categories', 'CategorieController');
Route::resource('commentaires', 'CommentaireController');
Route::resource('etats', 'EtatController');
Route::resource('exemplaires', 'ExemplaireController');
Route::resource('failedjobs', 'FailedjobController');
Route::resource('notes', 'NoteController');
Route::resource('oeuvres', 'OeuvreController');
Route::resource('sections', 'SectionController');
Route::resource('sectionarmoires', 'SectionArmoireController');
