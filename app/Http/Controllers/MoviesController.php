<?php

namespace App\Http\Controllers;

class MoviesController extends Controller
{
	public function genresList()
	{
		$client = new \GuzzleHttp\Client();
		$api_key = config( 'themoviedb.api_key' );
		$res = $client->request( 'GET', "https://api.themoviedb.org/3/genre/movie/list?api_key={$api_key}" );

		return $res->getBody();
	}

	public function genreMoviesList( $genreId )
	{
		$client = new \GuzzleHttp\Client();
		$api_key = config( 'themoviedb.api_key' );
		$res = $client->request( 'GET', "https://api.themoviedb.org/3/genre/{$genreId}/movies?api_key={$api_key}" );

		return $res->getBody();
	}

	public function popularMoviesList()
	{
		$client = new \GuzzleHttp\Client();
		$api_key = config( 'themoviedb.api_key' );
		$res = $client->request( 'GET',
			"https://api.themoviedb.org/3/movie/popular?api_key={$api_key}" );

		return $res->getBody();
	}

	public function movieDetails( $movieId )
	{
		$client = new \GuzzleHttp\Client();
		$api_key = config( 'themoviedb.api_key' );
		$res = $client->request( 'GET', "https://api.themoviedb.org/3/movie/{$movieId}?api_key={$api_key}" );

		return $res->getBody();
	}

	public function searchMovies( $searchTerm )
	{
		$client = new \GuzzleHttp\Client();
		$api_key = config( 'themoviedb.api_key' );
		$res = $client->request( 'GET', "https://api.themoviedb.org/3/search/movie?api_key={$api_key}&query={$searchTerm}" );
		
		return $res->getBody();
	}
}
