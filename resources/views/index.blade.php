@extends('layouts.main')

@section('content')
  <div class="container mx-auto px-4 pt-16">
    {{-- Popular Movies Start --}}
    <div class="popular-movies">
      <h2 class="uppercase tracking-wider text-orange-500 text-lg font-semibold">
        Popular Movies
      </h2>
      <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 lg:grid-cols-5 gap-6">
        @foreach($popularMovies as $movie)
          <x-movie-card :movie="$movie" :genreMovie="$genreMovie"/>
        @endforeach
      </div>
    </div>
    {{-- Popular Movies End --}}

    {{-- Now Playing Start --}}
    <div class="now-playing-movies py-24">
      <h2 class="uppercase tracking-wider text-orange-500 text-lg font-semibold">
        Now Playing
      </h2>
      <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 lg:grid-cols-5 gap-6">
        @foreach($nowPlayingMovies as $movie)
          <x-movie-card :movie="$movie" :genreMovie="$genreMovie"/>
        @endforeach
      </div>
    </div>
    {{-- Now Playing End --}}
  </div>
@endsection
