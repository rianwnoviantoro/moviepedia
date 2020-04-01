<?php

namespace App\View\Components;

use Illuminate\View\Component;

class MovieCard extends Component
{
  public $movie;
  public $genreMovie;

  public function __construct($movie, $genreMovie)
  {
    $this->movie = $movie;
    $this->genreMovie = $genreMovie;
  }

  public function render()
  {
    return view('components.movie-card');
  }
}
