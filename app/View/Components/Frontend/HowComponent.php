<?php

namespace App\View\Components\Frontend;

use App\Models\Helpdesk;
use Illuminate\View\Component;

class HowComponent extends Component
{
    /**
     * Create a new component instance.
     *
     * @return void
     */

     public $helpdesks;
    public function __construct()
    {
        $this->helpdesks = Helpdesk::get();
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|\Closure|string
     */
    public function render()
    {
        return view('components.frontend.how-component');
    }
}
