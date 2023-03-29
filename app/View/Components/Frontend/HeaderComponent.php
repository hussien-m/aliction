<?php

namespace App\View\Components\Frontend;

use App\Models\Header;
use Illuminate\View\Component;

class HeaderComponent extends Component
{
    /**
     * Create a new component instance.
     *
     * @return void
     */

     public $header;
    public function __construct()
    {
        $this->header = Header::first();
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|\Closure|string
     */
    public function render()
    {
        return view('components.frontend.header-component');
    }
}
