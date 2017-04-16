<?php

use Illuminate\Http\Request;

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

Route::middleware( 'auth:api' )->get( '/user', function ( Request $request ) {
	return $request->user();
} );

Route::middleware( 'auth:api' )->get( '/genres', 'MoviesController@genresList');
Route::middleware( 'auth:api' )->get( '/genre/{genreId}', 'MoviesController@genreMoviesList');
Route::middleware( 'auth:api' )->get( '/popular', 'MoviesController@popularMoviesList');
Route::middleware( 'auth:api' )->get( '/movie/{movieId}', 'MoviesController@movieDetails');
Route::middleware( 'auth:api' )->get( '/search/{searchTerm}', 'MoviesController@searchMovies');