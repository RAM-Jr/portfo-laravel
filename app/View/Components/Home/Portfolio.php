<?php

namespace App\View\Components\Home;

use Illuminate\Support\Arr;
use Illuminate\View\Component;

class Portfolio extends Component
{
    /**
     * Create a new component instance.
     *
     * @return void
     */
    public array $items=[];
    public array $tabs=[];
    public function __construct()
    {
        $this->items=[
            [
                'category'=>['Laravel','Sass','AlpineJs','Tailwind.css'],
                'title'=>'Full Stack app with Laravel, Tailwindcss and AlpineJs',
                'image'=>url('/img/portfo.jpg'),
                'github'=>'https://github.com/RAM-Jr/portfo-laravel'
            ],
            [
                'category'=>['HTML5','CSS3','Sass'],
                'title'=>'Advanced CSS and Sass Webpage',
                'image'=>url('/img/natours.PNG'),
                'github'=>'https://github.com/RAM-Jr/css-course-project'
            ],
            /* ['category'=>['Python','Flask','HTML5'],
            'title'=>'Simple Portfolio page with Flask',
            'image'=>url('/img/portfo_flask.img'),
            'github'=>'https://github.com/RAM-Jr/python-portfo-test'] */
        ];

        $this->tabs= array_unique(Arr::flatten(Arr::pluck($this->items,'category')));

    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|\Closure|string
     */
    public function render()
    {
        return view('components.home.portfolio');
    }
}
