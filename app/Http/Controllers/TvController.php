<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;

class TvController extends Controller
{
  public function index()
  {
    $popularTv  = Http::withToken(config('services.tmdb.token'))
      ->get(config('services.tmdb.url_api').'tv/popular')
      ->json()['results'];

    $onAirTv  = Http::withToken(config('services.tmdb.token'))
      ->get(config('services.tmdb.url_api').'tv/on_the_air')
      ->json()['results'];

    $genreTvs = Http::withToken(config('services.tmdb.token'))
      ->get(config('services.tmdb.url_api').'genre/tv/list')
      ->json()['genres'];

    $genres = collect($genreTvs)->mapWithKeys(function ($genre) {
      return [$genre['id'] => $genre['name']];
    });

    // dump($popularTv);

    return view('tvs.index',[
      'popularTv' => $popularTv,
      'onAirTv'   => $onAirTv,
      'genreTv'   => $genres,]);
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
    //
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
