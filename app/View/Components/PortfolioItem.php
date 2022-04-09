<?php

namespace App\View\Components;

use Illuminate\View\Component;

class PortfolioItem extends Component
{
    /**
     * Create a new component instance.
     *
     * @return void
     */
    public function __construct(public string $title,public array $categories,public string $github,public string $image)
    {
        //
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|\Closure|string
     */
    public function render()
    {
        return view('components.portfolio-item');
    }
}
