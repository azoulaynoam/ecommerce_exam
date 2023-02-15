<?php

namespace App\View\Components;

use Illuminate\View\Component;

class store extends Component
{
    public $products;
    public $isFavorite;
    /**
     * Create a new component instance.
     *
     * @return void
     */
    public function __construct($products, $isFavorite)
    {
        $this->products=$products;
        $this->isFavorite=$isFavorite;
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|\Closure|string
     */
    public function render()
    {
        return view('components.store');
    }
}
