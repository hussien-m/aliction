<?php

namespace App\View\Components\Frontend;

use App\Models\Features;
use Illuminate\View\Component;

class FeaturesComponent extends Component
{
    /**
     * Create a new component instance.
     *
     * @return void
     */

     public $features;
    public function __construct()
    {
        $this->features = Features::get();
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|\Closure|string
     */
    public function render()
    {
        return view('components.frontend.features-component');
    }
}
