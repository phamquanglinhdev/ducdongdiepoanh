<?php

namespace App\View\Components;

use App\Models\Option;
use Illuminate\View\Component;

class Setting extends Component
{
    /**
     * Create a new component instance.
     *
     * @return void
     */
    public function __construct()
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
        $global = [];
        $options = Option::where("isActive","=",true)->get();
        foreach ($options as $option){
            $global[$option->alias] =  $option->value;
        }
        return view('components.setting',["global"=>$global]);
    }
}
