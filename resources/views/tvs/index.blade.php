@extends('layouts.main')

@section('title', Request::segment(1) )

@section('content')
<div class="container mx-auto px-4 pt-16">
  {{-- Popular Tv Start --}}
  <div class="popular-movies">
    <h2 class="uppercase tracking-wider text-orange-500 text-lg font-semibold">
      Popular TV
    </h2>
    <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 lg:grid-cols-5 gap-6">
      @foreach($popularTv as $tv)
        <x-tv-card :tv="$tv" :genreTv="$genreTv"/>
      @endforeach
    </div>
  </div>
  {{-- Popular Tv End --}}

  {{-- On Air Tv Start --}}
  <div class="popular-movies py-24">
    <h2 class="uppercase tracking-wider text-orange-500 text-lg font-semibold">
      On Air TV
    </h2>
    <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 lg:grid-cols-5 gap-6">
      @foreach($onAirTv as $tv)
        <x-tv-card :tv="$tv" :genreTv="$genreTv"/>
      @endforeach
    </div>
  </div>
  {{-- On Air Tv End --}}
</div>
@endsection
