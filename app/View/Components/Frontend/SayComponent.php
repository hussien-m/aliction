<?php

namespace App\View\Components\Frontend;

use App\Models\Say;
use Illuminate\View\Component;

class SayComponent extends Component
{
    /**
     * Create a new component instance.
     *
     * @return void
     */

    public $says;
    public function __construct()
    {
        $this->says = Say::latest()->paginate(10);
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|\Closure|string
     */
    public function render()
    {
        return view('components.frontend.say-component');
    }
}
