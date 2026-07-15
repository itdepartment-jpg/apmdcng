<?php

namespace App\View\Components;

use Illuminate\View\Component;

class CardSlider extends Component
{
    public $items;
    public $perView;

    public function __construct($items = [], $perView = 3)
    {
        $this->items = $items;
        $this->perView = $perView;
    }

    public function render()
    {
        return view('components.card-slider');
    }
}
