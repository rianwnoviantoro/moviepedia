<?php

namespace App\View\Components;

use Illuminate\View\Component;

class TvCard extends Component
{

  public $tv;
  public $genreTv;

  public function __construct($tv, $genreTv)
  {
    $this->tv       = $tv;
    $this->genreTv  = $genreTv;
  }

  public function render()
  {
    return view('components.tv-card');
  }
}
