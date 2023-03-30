<?php

namespace App\View\Components\Frontend;

use App\Models\Price;
use Illuminate\View\Component;

class PriceComponent extends Component
{
    /**
     * Create a new component instance.
     *
     * @return void
     */

     public $prices;
    public function __construct()
    {
        $this->prices = Price::get();
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|\Closure|string
     */
    public function render()
    {
        return view('components.frontend.price-component');
    }
}
