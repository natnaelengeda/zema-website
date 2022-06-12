<?php

namespace App\View\Components;

use Illuminate\View\Component;

class hero-component extends Component
{

    /**
     * @var string
     */
    public $h1first;

    /**
     * @var string
     */
    public $h1second;



        
    /**
     * Create a new component instance.
     *  
     *     
     * 
     * @param string $h1first
     * @param string $h1second
     * @return void
     */
    public function __construct( $h1first, $h1second)
    {
        $this->h1first = $h1first;
        $this->h1second = $h1second;
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|\Closure|string
     */
    public function render()
    {
        return view('components.hero-component');
    }
}
