@extends('layouts.main')

@section('content')
  {{-- Movie Info Start --}}
  <div class="movie-info border-b border-gray-800">
    <div class="container mx-auto px-4 py-16 flex flex-col md:flex-row">
      <img src="https://image.tmdb.org/t/p/w500{{ $movie['poster_path'] }}" alt="poster_{{ $movie['title'] }}" class="w-96">
      <div class="md:ml-24">
        <h2 class="text-4xl font-semibold">
          {{ $movie['title'] }}
        </h2>
        <div class="flex flex-wrap items-center tex-gray-400 text-sm">
          <svg class="w-4" viewBox="0 0 512 512" xmlns="http://www.w3.org/2000/svg"><linearGradient id="a" x1="236.94" x2="236.94" y1="458.43" y2="-71.182" gradientTransform="matrix(1.0667 0 0 -1.0667 3.267 557.54)" gradientUnits="userSpaceOnUse"><stop stop-color="#FFCF95" offset="0"/><stop stop-color="#FFC954" offset=".427"/><stop stop-color="#FFC200" offset="1"/></linearGradient><path d="M274.84 23.212l67.722 137.22 151.43 22.004c17.232 2.503 24.112 23.68 11.644 35.835l-109.58 106.81 25.867 150.82c2.944 17.162-15.07 30.25-30.482 22.147l-135.44-71.206-135.44 71.206c-15.412 8.102-33.426-4.985-30.482-22.147l25.867-150.82-109.58-106.81c-12.469-12.155-5.588-33.33 11.644-35.835l151.43-22.004 67.721-137.22c7.707-15.615 29.972-15.615 37.679 0z" fill="url(#a)"/><linearGradient id="b" x1="361.34" x2="201.24" y1="390.13" y2="390.13" gradientTransform="matrix(1.0667 0 0 -1.0667 3.267 557.54)" gradientUnits="userSpaceOnUse"><stop stop-color="#FFC200" stop-opacity="0" offset="0"/><stop stop-color="#fb0" stop-opacity=".203" offset=".203"/><stop stop-color="#FFA700" stop-opacity=".499" offset=".499"/><stop stop-color="#f80" stop-opacity=".852" offset=".852"/><stop stop-color="#FF7800" offset="1"/></linearGradient><path d="M342.56 160.43L274.84 23.21c-3.853-7.807-11.346-11.711-18.839-11.711v259.79l86.559-110.86z" fill="url(#b)"/><linearGradient id="c" x1="388.69" x2="346.29" y1="144.84" y2="353.64" gradientTransform="matrix(1.0667 0 0 -1.0667 3.267 557.54)" gradientUnits="userSpaceOnUse"><stop stop-color="#FFC200" stop-opacity="0" offset="0"/><stop stop-color="#fb0" stop-opacity=".203" offset=".203"/><stop stop-color="#FFA700" stop-opacity=".499" offset=".499"/><stop stop-color="#f80" stop-opacity=".852" offset=".852"/><stop stop-color="#FF7800" offset="1"/></linearGradient><path d="M396.06 325.08l109.58-106.81c6.151-5.996 7.586-14.185 5.399-21.247l-255.03 74.269 140.06 53.788z" fill="url(#c)"/><linearGradient id="d" x1="183.1" x2="349.16" y1="35.109" y2="201.17" gradientTransform="matrix(1.0667 0 0 -1.0667 3.267 557.54)" gradientUnits="userSpaceOnUse"><stop stop-color="#FFC200" stop-opacity="0" offset="0"/><stop stop-color="#fb0" stop-opacity=".203" offset=".203"/><stop stop-color="#FFA700" stop-opacity=".499" offset=".499"/><stop stop-color="#f80" stop-opacity=".852" offset=".852"/><stop stop-color="#FF7800" offset="1"/></linearGradient><path d="M413.63 496.39L256 271.29v155.55l135.44 71.206c7.734 4.066 16.121 2.794 22.188-1.648z" fill="url(#d)"/><linearGradient id="e" x1="64.678" x2="187.08" y1="245.11" y2="142.71" gradientTransform="matrix(1.0667 0 0 -1.0667 3.267 557.54)" gradientUnits="userSpaceOnUse"><stop stop-color="#FFC200" stop-opacity="0" offset="0"/><stop stop-color="#fb0" stop-opacity=".203" offset=".203"/><stop stop-color="#FFA700" stop-opacity=".499" offset=".499"/><stop stop-color="#f80" stop-opacity=".852" offset=".852"/><stop stop-color="#FF7800" offset="1"/></linearGradient><path d="M256 271.29l-140.06 53.788-25.866 150.82c-1.467 8.55 2.271 16.087 8.294 20.499l157.63-225.1z" fill="url(#e)"/><linearGradient id="f" x1="156.43" x2="106.83" y1="414.02" y2="273.22" gradientTransform="matrix(1.0667 0 0 -1.0667 3.267 557.54)" gradientUnits="userSpaceOnUse"><stop stop-color="#FFC200" stop-opacity="0" offset="0"/><stop stop-color="#fb0" stop-opacity=".203" offset=".203"/><stop stop-color="#FFA700" stop-opacity=".499" offset=".499"/><stop stop-color="#f80" stop-opacity=".852" offset=".852"/><stop stop-color="#FF7800" offset="1"/></linearGradient><path d="M.968 197.02l255.03 74.268-86.56-110.86-151.43 22.005C9.277 183.701 3.211 189.766.965 197.02z" fill="url(#f)"/><linearGradient id="g" x1="343.14" x2="-21.26" y1="399.32" y2="244.12" gradientTransform="matrix(1.0667 0 0 -1.0667 3.267 557.54)" gradientUnits="userSpaceOnUse"><stop stop-color="#FFC200" stop-opacity="0" offset="0"/><stop stop-color="#fb0" stop-opacity=".203" offset=".203"/><stop stop-color="#FFA700" stop-opacity=".499" offset=".499"/><stop stop-color="#f80" stop-opacity=".852" offset=".852"/><stop stop-color="#FF7800" offset="1"/></linearGradient><path d="M115.94 325.08L6.36 218.27c-6.151-5.996-7.586-14.185-5.399-21.247l255.03 74.268-140.06 53.788z" fill="url(#g)"/></svg>
          <span class="ml-1">{{ $movie['vote_average']*10 }}%</span>
          <span class="mx-2">|</span>
          <span>{{ \Carbon\Carbon::parse($movie['release_date'])->format('M d, Y') }}</span>
          <span class="mx-2">|</span>
          <span>
            @foreach($movie['genres'] as $gi)
              {{ $gi['name'] }}@if (!$loop->last), @endif
            @endforeach
          </span>
        </div>
        <p class="text-gray-300 mt-8">
          {{ $movie['overview'] }}
        </p>
        <div class="mt-12">
          <h4 class="text-white font-semibold">Featured Crew</h4>
          <div class="flex mt-4">
            @foreach($movie['credits']['crew'] as $crew)
              @if($loop->index < 3)
              <div class="mr-8">
                <div>{{ $crew['name'] }}</div>
                <div class="text-sm text-gray-400">{{ $crew['job'] }}</div>
              </div>
              @endif
            @endforeach
          </div>
        </div>
        <div x-data="{ isOpen : false }">
          @if(count($movie['videos']['results']) > 0)
            <div class="mt-12">
              <button @click="isOpen = true" class="flex inline-flex items-center bg-orange-500 text-gray-900 rounded font-semibold px-5 py-4 hover:bg-orange-600 transition ease-in-out duration-150">
                <svg class="w-6 fill-current" viewBox="0 0 512 512" xmlns="http://www.w3.org/2000/svg"><path d="M256 0C115.2 0 0 115.2 0 256s115.2 256 256 256 256-115.2 256-256S396.8 0 256 0zm115.2 281.6l-148.48 97.28c-17.92 12.8-43.52-2.56-43.52-25.6V158.72c0-23.04 25.6-38.4 43.52-25.6L371.2 230.4c17.92 12.8 17.92 38.4 0 51.2z"/></svg>
                <span class="ml-2">Play Trailer</span>
              </button>
            </div>
          @endif
          <div style="background-color: rgba(0, 0, 0, .6)" class="fixed top-0 left-0 w-full h-full flex items-center shadow-lg overflow-y-auto" x-show.transition.opacity="isOpen">
            <div class="container mx-auto lg:px-32 rounded-lg overflow-y-auto">
              <div class="bg-gray-900 rounded">
                <div class="flex justify-end pr-4 pt-2">
                  <button @click="isOpen = false" class="text-3xl leading-none hover:text-gray-300">&times;</button>
                </div>
                <div class="modal-body px-2 py-2">
                  <div class="responsive-container overflow-hidden relative" style="padding-top: 56.25%">
                    <iframe class="responsive-iframe absolute top-0 left-0 w-full h-full" src="https://www.youtube.com/embed/{{ $movie['videos']['results'][0]['key'] }}" style="border:0;" allow="autoplay; encrypted-media" allowfullscreen></iframe>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
  {{-- Movie Info End --}}

  {{-- Movie Cast Start --}}
  <div class="movie-cast border-b border-gray-800">
    <div class="container mx-auto px-4 py-16">
      <h2 class="text-4xl font-semibold">Cast</h2>
      <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 lg:grid-cols-5 gap-6">
        @foreach($movie['credits']['cast'] as $cast)
          @if($loop->index < 5)
          <div class="mt-8">
            <a href="#">
              <img src="https://image.tmdb.org/t/p/w300{{ $cast['profile_path'] }}" alt="{{ $cast['name'] }}" class="hover:opacity-50 transition ease-in-out duration-150">
            </a>
            <div class="mt-2">
              <a href="#" class="text-lg mt-2 hover:text-gray-300">{{ $cast['name'] }}</a>
              <div class="flex items-center text-gray-500 text-sm">
                {{ $cast['character'] }}
              </div>
            </div>
          </div>
          @endif
        @endforeach
      </div>
    </div>
  </div>
  {{-- Movie Cast End --}}

  {{-- Images Cover Start --}}
  <div class="images-cover border-b border-gray-800" x-data="{ isOpen: false, image: '' }">
    <div class="container mx-auto px-4 py-16">
      <h2 class="text-4xl font-semibold">Images</h2>
      <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 lg:grid-cols-3 gap-6">
        @foreach($movie['images']['backdrops'] as $backdrops)
          @if($loop->index < 9)
          <div class="mt-8">
            <a href="#" @click.prevent="
              isOpen = true
              image='https://image.tmdb.org/t/p/original{{ $backdrops['file_path'] }}'
            ">
              <img src="https://image.tmdb.org/t/p/w500{{ $backdrops['file_path'] }}" alt="{{ $backdrops['file_path'] }}" class="hover:opacity-50 transition ease-in-out duration-150">
            </a>
          </div>
          @endif
        @endforeach
      </div>
      <div style="background-color: rgba(0, 0, 0, .6)" class="fixed top-0 left-0 w-full h-full flex items-center shadow-lg overflow-y-auto" x-show.transition.opacity="isOpen" @click="isOpen = false">
        <div class="container mx-auto lg:px-32 rounded-lg overflow-y-auto">
          <div class="bg-gray-900 rounded">
            <div class="flex justify-end pr-4 pt-2">
              <button @click="isOpen = false" @keydown.escape.window="isOpen = false" class="text-3xl leading-none hover:text-gray-300">&times; </button>
            </div>
            <div class="modal-body px-1 py-1">
              <img :src="image" alt="poster_{{ $backdrops['file_path'] }}">
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
  {{-- Images Cover End --}}
@endsection
