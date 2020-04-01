<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;

class MoviesController extends Controller
{
  public function index()
  {
    $popularMovies  = Http::withToken(config('services.tmdb.token'))
      ->get(config('services.tmdb.url_api').'movie/popular')
      ->json()['results'];

    $nowPlayingMovies  = Http::withToken(config('services.tmdb.token'))
      ->get(config('services.tmdb.url_api').'movie/now_playing')
      ->json()['results'];

    $genreMovies = Http::withToken(config('services.tmdb.token'))
      ->get(config('services.tmdb.url_api').'genre/movie/list')
      ->json()['genres'];

    $genres = collect($genreMovies)->mapWithKeys(function ($genre) {
      return [$genre['id'] => $genre['name']];
    });

    // dump($popularMovies);

    return view('index',[
      'popularMovies'     => $popularMovies,
      'nowPlayingMovies'  => $nowPlayingMovies,
      'genreMovie'        => $genres,
    ]);
  }

  public function create()
  {
    //
  }

  public function store(Request $request)
  {
    //
  }

  public function show($id)
  {
    $movie  = Http::withToken(config('services.tmdb.token'))
      ->get(config('services.tmdb.url_api').'movie/'.$id.'?append_to_response=credits,videos,images')
      ->json();

    // dump($movie);

    return view('show',[
      'movie' => $movie]);
  }

  public function edit($id)
  {
    //
  }

  public function update(Request $request, $id)
  {
    //
  }

  public function destroy($id)
  {
    //
  }
}
