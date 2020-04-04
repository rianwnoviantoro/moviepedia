<div class="relative mt-3 md:mt-0" x-data="{ isOpen: true }" @click.away="isOpen = false">
  <input wire:model.debounce.500ms="search" type="text"
    class="text-sm bg-gray-800 rounded-full w-64 px-4 pl-8 py-1 focus:outline-none focus:shadow-outline"
    placeholder="Search" @focus="isOpen = true" @keydown.escape.window="isOpen = false"
    @keydown.shif.tab="isOpen = false" @keydown="isOpen = true" x-ref="search" @keydown.window=" if (event.keyCode == 191) { event.preventDefault(); $refs.search.focus(); }">
  <div class="absolute top-0">
    <svg class="fill-current w-4 text-gray-500 mt-2 ml-2" viewBox="0 0 512.39 512.39"
      xmlns="http://www.w3.org/2000/svg">
      <path
        d="M211.2 422C94.85 422 .2 327.346.2 211S94.854 0 211.2 0s211 94.654 211 211-94.654 211-211 211zm0-382c-94.29 0-171 76.71-171 171s76.71 171 171 171 171-76.71 171-171-76.71-171-171-171zm295.14 466.53c7.81-7.811 7.81-20.475 0-28.285l-89.5-89.5c-7.811-7.811-20.475-7.811-28.285 0s-7.81 20.475 0 28.285l89.5 89.5c3.905 3.905 9.024 5.857 14.143 5.857s10.236-1.952 14.142-5.857z" />
    </svg>
  </div>

  <div wire:loading class="spinner top-0 right-0 mr-4 mt-4"></div>

  @if(strlen($search) >= 3)
  <div class="absolute overflow-y-auto bg-gray-800 tex-sm rounded w-64 mt-2 max-h-half z-50" x-show.transition.opacity="isOpen">
    @if($searchResults->count() > 0)
    <ul>
      @foreach($searchResults as $result)
      <li class="border-b border-gray-700">
        <a class="block hover:bg-gray-700 transition ease-in-out duration-300 px-2 py-2 flex items-center"
          href="{{ route('movies.show', $result['id']) }}" @if($loop->last) @keydown.tab="isOpen = false" @endif>
          @if($result['poster_path'])
          <img class="w-8" src="https://image.tmdb.org/t/p/w92{{ $result['poster_path'] }}"
            alt="poster_{{ $result['title'] }}">
          @else
          <img class="w-8" src="https://via.placeholder.com/50x75" alt="poster_{{ $result['title'] }}">
          @endif
          <span class="ml-4">{{ $result['title'] }}</span>
        </a>
      </li>
      @endforeach
    </ul>
    @else
    <div class="px-2 py-2">
      No results for "{{ $search }}"
    </div>
    @endif
  </div>
  @endif
</div>
