<?php

namespace App\View\Components\layout;

use Illuminate\View\Component;

class Navbar extends Component
{
    /**
     * Create a new component instance.
     *
     * @return void
     */


    public array $navigationItems=[];


    public function __construct()
    {
        $this->navigationItems=[
            ['label'=>'About','href'=>'#about'],
            ['label'=>'Projects','href'=>'#portfolio'],
            ['label'=>'Contact','href'=>'#contact'],
        ];
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|\Closure|string
     */
    public function render()
    {
        return view('Layout.navbar');
    }
}
