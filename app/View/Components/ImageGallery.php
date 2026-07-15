<?php

namespace App\View\Components;

use Illuminate\View\Component;

class ImageGallery extends Component
{
    public $images;
    public $height;

    /**
     * Create a new component instance.
     *
     * @param array $images Array of image objects with src, alt, caption
     * @param string $height Tailwind height class (default: h-64)
     * @return void
     */
    public function __construct($images = [], $height = 'h-64')
    {
        $this->images = $images;
        $this->height = $height;
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\View\View|string
     */
    public function render()
    {
        return view('components.image-gallery');
    }
}
