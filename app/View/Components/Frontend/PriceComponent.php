<?php

namespace App\View\Components\Frontend;

use App\Models\Extra;
use App\Models\Price;
use Illuminate\Support\Facades\DB;
use Illuminate\View\Component;

class PriceComponent extends Component
{
    /**
     * Create a new component instance.
     *
     * @return void
     */

     public $prices;
     public $extras;

    public function __construct()
    {
        $this->prices = Price::get();
        $this->extras = Extra::get();





    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|\Closure|string
     */
    public function render()
    {
        $extra_ids = array();
        $extras_price = DB::table('extra_price')->select('price_id')->get();
        foreach($extras_price as $ep){
            array_push($extra_ids,$ep->price_id);

        }


        return view('components.frontend.price-component',compact('extra_ids'));
    }
}
