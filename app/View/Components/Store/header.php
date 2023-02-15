<?php

namespace App\View\Components\store;

use Illuminate\View\Component;

class header extends Component
{
    public $isFavorite;
    /**
     * Create a new component instance.
     *
     * @return void
     */
    public function __construct($isFavorite)
    {
        $this->isFavorite=$isFavorite;
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|\Closure|string
     */
    public function render()
    {
        return view('components.store.header');
    }
}
