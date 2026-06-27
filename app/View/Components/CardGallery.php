<?php

namespace App\View\Components;

use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

class CardGallery extends Component
{
    /**
     * Create a new component instance.
     */
    public function __construct(public string $title, public string $img, public string $date = "")
    {
        //
    }

    /**
     * Get the view / contents that represent the component.
     */
    public function render(): View|Closure|string
    {
        return view('components.card-gallery');
    }
}
