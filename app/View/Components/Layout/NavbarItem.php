<?php

namespace App\View\Components\layout;

use Illuminate\View\Component;

class NavbarItem extends Component
{
    /**
     * Create a new component instance.
     *
     * @return void
     */
    public string $href;

    public function __construct(string $href)
    {
        $this->href=$href;
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return
     */
    public function render()
    {
        return view('Layout.navbar-item');
    }
}
