<?php

namespace App\View\Components;

use Illuminate\View\Component;

class delete extends Component
{
    public $route;
    public $id;

    /**
     * Create a new component instance.
     *
     * @return void
     */
    public function __construct($route,$id)
    {
        $this->route = $route;
        $this->id = $id;
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|\Closure|string
     */
    public function render()
    {
        return view('components.delete',['route'=>$this->route,'id'=>$this->id]);
    }
}
