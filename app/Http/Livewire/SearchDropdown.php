<?php

namespace App\Http\Livewire;

use Livewire\Component;
use Illuminate\Support\Facades\Http;

class SearchDropdown extends Component
{
  public $search = '';

  public function render()
  {
    $searchResults = [];

    if (strlen($this->search) >= 3) {
      $searchResults = Http::withToken(config('services.tmdb.token'))
      ->get(config('services.tmdb.url_api').'search/movie?query='.$this->search)
      ->json()['results'];
    }

    // dump($searchResults);

    return view('livewire.search-dropdown',[
      'searchResults' => collect($searchResults)->take(25)]);
  }
}
