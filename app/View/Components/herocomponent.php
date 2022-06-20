<?php

namespace App\View\Components;

use Illuminate\View\Component;

class herocomponent extends Component
{
    /**
     * 
     * @var string;
     */
        public $lpost;

    /**
     * Create a new component instance.
     *     
     *  
     * @return void
     */

     
    public function __construct($lpost)
    {
        $this->lpost = $lpost;
       
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|\Closure|string
     */
    public function render()
    {
        return view('components.herocomponent');
    }
}
